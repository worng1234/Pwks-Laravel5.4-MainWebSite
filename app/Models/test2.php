<?php

namespace App\Models;

use Carbon;
use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{

    protected $table = "test2";
    protected $fillable = [
        'id',
        'address',
        'id_number2',
        'pic',
        'date'
    ];
}
