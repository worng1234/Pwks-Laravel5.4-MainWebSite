<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photostudentModel extends Model
{
    protected $table = "photo_student";
    protected $fillable = [
        'student_idcard',
        'profile_img',
        'front_grade',
        'back_grade',
        'birth_certificate',
        'disability_certificate',
        'student_submit',
        'house_student',
        'house_father',
        'house_mother',
        'house_parent',
        'id_card_student',
        'id_card_father',
        'id_card_mother',
        'id_card_parent',
    ];
}
