<?php

namespace App\Http\Controllers;

use App\Models\StudentDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function SaveCourse(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'mode_of_study' => 'required',
        ]);

        $data = [
            'course' => $request->course,
            'mode_of_study' => $request->mode_of_study,
        ];

        return $data;
    }

    public function LoadUpdateView()
    {
        return view('pages.profileupdate');
    }

    public function StudentDetails(Request $request)
    {
        $request->validate([
            'phone_number' => ['required'],
            'dob' => 'required',
            'education' => 'required',
            'county' => 'required',
            'sub_county' => 'required',
            'address' => 'required',
        ], [
            'phone_number.required' => 'Phone number is mandatory',
            'dob.required' => 'Date of birth is mandatory',
            'education.required' => 'Level of education is mandatory',
            'county.required' => 'Provide your county',
            'sub_county.required' => 'Enter your sub county',
            'address.required' => 'Enter your address',
        ]);

        $student = StudentDetails::where(['user_id' => Auth::user()->id])->first();
        if ($student) {
            $data = [
                'phone_number' => $request->phone_number,
                'year_of_birth' => $request->dob,
                'highest_level_of_education' => $request->education,
                'county' => $request->county,
                'sub_county' => $request->sub_county,
                'address' => $request->address,
            ];
            StudentDetails::where(['user_id' => Auth::user()->id])->update($data);
            return 1;
        } else {
            $data = [
                'user_id' => Auth::user()->id,
                'phone_number' => $request->phone_number,
                'year_of_birth' => $request->dob,
                'highest_level_of_education' => $request->education,
                'county' => $request->county,
                'sub_county' => $request->sub_county,
                'address' => $request->address,
            ];
            StudentDetails::create($data);
            User::where(['id' => Auth::user()->id])->update(['profile_status' => 'updated']);
            return 1;
        }
    }

    public function CheckStatus()
    {
        $user_details = User::where(['users.id' => Auth::user()->id])
        ->join('student_details', 'student_details.user_id', '=', 'users.id')
        ->first();

        return $user_details;
    }
}
