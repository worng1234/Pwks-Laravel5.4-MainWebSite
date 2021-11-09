<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class behaviorstudentModel extends Model
{
    protected $table = "behavior_student";
    protected $fillable = [
        'B_student_id',
        'score',
        'behavior_history',
        'pos_score',
        'neg_score',
        'title',
        'behavior_date'
    ];
}
