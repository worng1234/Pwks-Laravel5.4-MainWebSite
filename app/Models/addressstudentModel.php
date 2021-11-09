<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addressstudentModel extends Model
{
    protected $table = "address_student";
    protected $fillable = [
        'student_idcard_a',
        'house_number',
        'group',
        'village',
        'alley',
        'street',
        'subdistrict',
        'district',
        'province',
        'post',
        'address_now',
        'house_number_n',
        'group_n',
        'village_n',
        'alley_n',
        'street_n',
        'subdistrict_n',
        'district_n',
        'province_n',
        'post_n',
    ];
}
