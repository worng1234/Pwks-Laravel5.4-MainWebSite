<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffairController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:affair');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        return view('affair', [
            'm1_regis_dayall1' => $m1_regis_dayall1,
            'm1_regis_dayall2' => $m1_regis_dayall2,
            'm4_regis_dayall1' => $m4_regis_dayall1,
            'm4_regis_dayall2' => $m4_regis_dayall2,
        ]);
    }
}
