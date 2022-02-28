<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class talentstudentModel extends Model
{
    protected $table = "talent_student";
    protected $fillable = [
        'student_idcard_t',
        'final_school',
        'final_class',
        'avg_grade',
        'f_sub_district',
        'f_district',
        'f_province',
        'like_subject1',
        'like_subject2',
        'like_subject3',
        'like_subject4',
        'unlike_subject1',
        'unlike_subject2',
        'unlike_subject3',
        'unlike_subject4',
        'talent',
        'dream_job',
        'because',
        'read_write',
        'understand',
    ];
}
