<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healtystudentModel extends Model
{
    protected $table = "healty_student";
    protected $fillable = [
        'student_idcard_h',
        'weight',
        'height',
        'disease',
        'medicine_lose',
        'medicine',
        'remedy',
        'sight_eye',
        'glasses',
        'danger',
        'unsound',
        'defective',

    ];
}
