<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classroomModel extends Model
{
    protected $table = "class_room";
    protected $fillable = [
        'class_id',
        'class_room'
    ];
}
