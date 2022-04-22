<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class newstudentm1Model extends Model
{

    protected $table = "new_student_register_m1";
    protected $fillable = [
        'id',
        'prename',
        'fname',
        'name_cen',
        'surname',
        'sex',
        'id_number',
        'day',
        'mounth',
        'year',
        'religion',
        'nationality',
        'origin',
        'disabled',
        'poor_person',
        'etc',
        'tel',
        'email',
        'father_prename',
        'father_name',
        'father_namecen',
        'father_surname',
        'father_id',
        'father_job',
        'father_tel',
        'mother_prename',
        'mother_name',
        'mother_namecen',
        'mother_surname',
        'mother_job',
        'mother_id',
        'mother_tel',
        'parent',
        'parent_status',
        'parent_prename',
        'parent_name',
        'parent_namecen',
        'parent_surname',
        'parent_id',
        'parent_job',
        'parent_tel',
        'house_number',
        'street',
        'road',
        'bloc',
        'sub_district',
        'district',
        'province',
        'post',
        'final_school',
        'final_school_sub_district',
        'final_school_district',
        'final_school_province',
        'status_rigis',
        'status_picall',
        'status_report',
        'status_tranfer',
        'date',
        'student_year'
    ];
}
