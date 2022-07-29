<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'demo']);
    }
    public function index()
    {
        return view('pages.homepage');
    }

    public function demo()
    {
        return view('pages.registration');
    }

    public function CourseRegistration()
    {
        return view('pages.courseregistration');
    }
}
