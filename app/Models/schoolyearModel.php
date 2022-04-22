<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schoolyearModel extends Model
{
    protected $table = "school_year";
    protected $fillable = [
        'term',
        'study_year',
    ];
}
