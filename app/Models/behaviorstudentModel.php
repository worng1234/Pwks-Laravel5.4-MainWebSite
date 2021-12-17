<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class behaviorstudentModel extends Model
{
    protected $table = "behavior_student";
    protected $fillable = [
        'student_id_behavior',
        'fullname',
        'behavior_history',
        'behavior_class',
        'behavior_room',
        'minus_score',
        'plus_score',
        'etc',
        'behavior_day',
        'behavior_mount',
        'behavior_year',
        'behavior_term',
        'behavior_study_year',
        
    ];
}
