<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone_number',
        'year_of_birth',
        'highest_level_of_education',
        'county',
        'sub_county',
        'address',
    ];
}
