<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = "test";
    protected $fillable = [
        'name',
        'student_id',
        'score'
    ];
}
