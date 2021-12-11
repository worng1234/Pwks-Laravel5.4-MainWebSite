<?php

namespace App\Models;

use Carbon;
use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{

    protected $table = "test2";
    protected $fillable = [
        'id',
        'name',
        'id_number2',
        'student_id',
        'date',
        'score'
    ];
}
