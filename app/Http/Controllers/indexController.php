<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\newstudentm1Model;
use App\Models\newstudentm4Model;

class indexController extends Controller
{
    public function index()
    {
        $datesm1 = newstudentm1Model::all();
        foreach ($datesm1 as $dateall) {
            $dateallsm1 = $dateall->date;
        }

        $datesm4 = newstudentm4Model::all();
        foreach ($datesm4 as $dateall) {
            $dateallsm4 = $dateall->date;
        }

        $m1_regis_day1 = DB::table('new_student_register_m1')
            ->where('date', '=', '2021-11-28')
            ->get();
        $m1_regis_dayall1 = $m1_regis_day1->count();

        $m1_regis_day2 = DB::table('new_student_register_m1')
            ->where('date', '=', '2021-11-29')
            ->get();
        $m1_regis_dayall2 = $m1_regis_day2->count();


        //ม.4
        $m4_regis_day1 = DB::table('new_student_register_m4')
            ->where('date', '=', '2021-11-28')
            ->get();
        $m4_regis_dayall1 = $m4_regis_day1->count();

        $m4_regis_day2 = DB::table('new_student_register_m4')
            ->where('date', '=', '2021-11-29')
            ->get();
        $m4_regis_dayall2 = $m4_regis_day2->count();

        return view('index-eim', [
            'm1_regis_dayall1' => $m1_regis_dayall1,
            'm1_regis_dayall2' => $m1_regis_dayall2,
            'm4_regis_dayall1' => $m4_regis_dayall1,
            'm4_regis_dayall2' => $m4_regis_dayall2,
            'dateallsm1' => $dateallsm1,
            'dateallsm4' => $dateallsm4,
        ]);
    }
}
