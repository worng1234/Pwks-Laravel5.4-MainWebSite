<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class statuspicModel extends Model
{
    protected $table = "status_pic";
    protected $fillable = [
        'student_idcard',
        'status_profile',
        'status_idcard_student',
        'status_house_student',
        'status_submit_student',
        'status_front_grade',
        'status_back_grade',
        'status_birth_certificate',
        'status_disability_certificate',
        'status_idcard_father',
        'status_idcard_mother',
        'status_idcard_parent',
        'status_house_father',
        'status_house_mother',
        'status_house_parent',
    ];
}
