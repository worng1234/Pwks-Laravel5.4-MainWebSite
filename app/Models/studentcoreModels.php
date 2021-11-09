<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class studentcoreModels extends Model
{

    protected $table = "student_core";
    protected $fillable = [
        'student_id_card',
        'studentID',
        'student_major',
        'student_class',
        'student_room',
        'student_number',
        'prename',
        'prename_eng',
        'name_eng',
        'name_cen_eng',
        'surname_eng',
        'birth_year',
        'birth_month',
        'birth_day',
        'nickname',
        'gender',
        'bloodgroup',
        'religion',
        'origin',
        'nationality',
        'language',
        'tel_s',
        'email',
        'fname',
        'name_cen',
        'surname',
        'rememberToken',
    ];


}
