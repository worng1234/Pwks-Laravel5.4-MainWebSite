<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classmajorModel extends Model
{
    protected $table = "class_major_m4";
    protected $fillable = [
        'class_id',
        'class_major_name'
    ];
}
