<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Academic;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        //ม.1
        $m1_m = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('gender', '=', 'ชาย')
        ->get();
        $m1_m_all = count($m1_m);

        $m1_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('gender', '=', 'หญิง')
        ->get();
        $m1_fm_all = count($m1_fm);

        $m1 = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->get();
        $m1_all = count($m1);

         //ม.2
         $m2_m = DB::table('student_core')
         ->where('student_class', '=', '2')
         ->where('gender', '=', 'ชาย')
         ->get();
         $m2_m_all = count($m2_m);
 
         $m2_fm = DB::table('student_core')
         ->where('student_class', '=', '2')
         ->where('gender', '=', 'หญิง')
         ->get();
         $m2_fm_all = count($m2_fm);
 
         $m2 = DB::table('student_core')
         ->where('student_class', '=', '2')
         ->get();
         $m2_all = count($m2);

          //ม.3
        $m3_m = DB::table('student_core')
        ->where('student_class', '=', '3')
        ->where('gender', '=', 'ชาย')
        ->get();
        $m3_m_all = count($m3_m);

        $m3_fm = DB::table('student_core')
        ->where('student_class', '=', '3')
        ->where('gender', '=', 'หญิง')
        ->get();
        $m3_fm_all = count($m3_fm);

        $m3 = DB::table('student_core')
        ->where('student_class', '=', '3')
        ->get();
        $m3_all = count($m3);

         //ม.4
         $m4_m = DB::table('student_core')
         ->where('student_class', '=', '4')
         ->where('gender', '=', 'ชาย')
         ->get();
         $m4_m_all = count($m4_m);
 
         $m4_fm = DB::table('student_core')
         ->where('student_class', '=', '4')
         ->where('gender', '=', 'หญิง')
         ->get();
         $m4_fm_all = count($m4_fm);
 
         $m4 = DB::table('student_core')
         ->where('student_class', '=', '4')
         ->get();
         $m4_all = count($m4);

          //ม.5
        $m5_m = DB::table('student_core')
        ->where('student_class', '=', '5')
        ->where('gender', '=', 'ชาย')
        ->get();
        $m5_m_all = count($m5_m);

        $m5_fm = DB::table('student_core')
        ->where('student_class', '=', '5')
        ->where('gender', '=', 'หญิง')
        ->get();
        $m5_fm_all = count($m5_fm);

        $m5 = DB::table('student_core')
        ->where('student_class', '=', '5')
        ->get();
        $m5_all = count($m5);

         //ม.6
         $m6_m = DB::table('student_core')
         ->where('student_class', '=', '6')
         ->where('gender', '=', 'ชาย')
         ->get();
         $m6_m_all = count($m6_m);
 
         $m6_fm = DB::table('student_core')
         ->where('student_class', '=', '6')
         ->where('gender', '=', 'หญิง')
         ->get();
         $m6_fm_all = count($m6_fm);
 
         $m6 = DB::table('student_core')
         ->where('student_class', '=', '6')
         ->get();
         $m6_all = count($m6);

         $m123_m_all = $m1_m_all+$m2_m_all+$m3_m_all;
         $m123_fm_all = $m1_fm_all+$m2_fm_all+$m3_fm_all;
         $m123_all = $m123_m_all + $m123_fm_all;

         $m456_m_all = $m4_m_all+$m5_fm_all+$m6_m_all;
         $m456_fm_all = $m4_fm_all+$m5_fm_all + $m6_fm_all;
         $m456_all = $m456_m_all + $m456_fm_all;

         $m_m_all = $m1_m_all+$m2_m_all+$m3_m_all+$m4_m_all+$m5_fm_all+$m6_m_all;
         $m_fm_all = $m1_fm_all+$m2_fm_all+$m3_fm_all+$m4_fm_all+$m5_fm_all + $m6_fm_all;
         $m_all = $m123_all + $m456_all;

        return view('admin', [
            //ปีการศึกษา
            'school_year' => $school_year,

            //รวม
            'm123_m_all' => $m123_m_all,
            'm123_fm_all' => $m123_fm_all,
            'm123_all' => $m123_all,
            
            'm456_m_all' => $m456_m_all,
            'm456_fm_all' => $m456_fm_all,
            'm456_all' => $m456_all,

            'm_m_all' => $m_m_all,
            'm_fm_all' => $m_fm_all,
            'm_all' => $m_all,

            //ม.1
            'm1_m_all' => $m1_m_all,
            'm1_fm_all' => $m1_fm_all,
            'm1_all' => $m1_all,

             //ม.2
             'm2_m_all' => $m2_m_all,
             'm2_fm_all' => $m2_fm_all,
             'm2_all' => $m2_all,

              //ม.3
            'm3_m_all' => $m3_m_all,
            'm3_fm_all' => $m3_fm_all,
            'm3_all' => $m3_all,

             //ม.4
             'm4_m_all' => $m4_m_all,
             'm4_fm_all' => $m4_fm_all,
             'm4_all' => $m4_all,

              //ม.5
            'm5_m_all' => $m5_m_all,
            'm5_fm_all' => $m5_fm_all,
            'm5_all' => $m5_all,

             //ม.6
             'm6_m_all' => $m6_m_all,
             'm6_fm_all' => $m6_fm_all,
             'm6_all' => $m6_all,
        ]);
    }

    public function Addacademic()
    {
        return view('admin.admin-add-academic');
    }

    public function AddacademicInsert(Request $request)
    {
        Academic::create([
            'prename' => $request->get('prename'),
            'fname' => $request->get('fname'),
            'surname' => $request->get('surname'),
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
        ]);
    }

    public function AcademicAccountIndex()
    {
        $data = academic::all();
        return view('admin.admin-all-academic', ['data' => $data]);
    }

    public function AcademicAccountShow($id)
    {
        $data = academic::find($id);
        return view('admin.admin-edit-academic', ['data' => $data]);
    }

    public function AcademicAccountEdit(Request $request, $id)
    {
        $data = academic::find($id);
        $data->update($request->all());

        return redirect('/AdminAll/Academic');
    }

    public function AcademicAccountDelete(Request $request, $id)
    {
        $newstudentm1 = academic::find($id);
        $newstudentm1->delete();
        return redirect('/AdminAll/Academic');
    }
}
