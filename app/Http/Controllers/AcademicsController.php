<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\studentcoreModels;
use App\Models\addressstudentModel;
use App\Models\healtystudentModel;
use App\Models\parentstudentModel;
use App\Models\studentdetailModel;
use App\Models\talentstudentModel;
use App\Models\newstudentm1Model;
use App\Models\newstudentm4Model;
use App\Models\registeryearModel;
use App\Student;
use App\Models\classroomModel;
use App\Models\classmajorModel;



class AcademicsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:academic');
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

        //ปวช.1
        $m4_9m = DB::table('student_core')
        ->where('student_class', '=', '4')
        ->where('student_major', '=', '09')
        ->get();
        $m4_9m_all = count($m4_9m);

        $m4_9 = DB::table('student_core')
        ->where('student_class', '=', '4')
        ->get();
        $m4_9_all = count($m4_9);

        //ปวช.2
       $m5_9m = DB::table('student_core')
       ->where('student_class', '=', '5')
       ->where('student_major', '=', '09')
       ->get();
       $m5_9m_all = count($m5_9m);

       $m5_9 = DB::table('student_core')
       ->where('student_class', '=', '5')
       ->get();
       $m5_9_all = count($m5_9);

        //ปวช.3
        $m6_9m = DB::table('student_core')
        ->where('student_class', '=', '6')
        ->where('student_major', '=', '09')
        ->get();
        $m6_9m_all = count($m6_9m);

        $m6_9 = DB::table('student_core')
        ->where('student_class', '=', '6')
        ->get();
        $m6_9_all = count($m6_9);

        $m123_m_all = $m1_m_all + $m2_m_all + $m3_m_all;
        $m123_fm_all = $m1_fm_all + $m2_fm_all + $m3_fm_all;
        $m123_all = $m123_m_all + $m123_fm_all;

        //จำนวนผูชายที่เอา ปวช. ออกแล้ว
        $m4_m_all_09 = $m4_m_all - $m4_9m_all; 
        $m5_m_all_09 = $m5_m_all - $m5_9m_all; 
        $m6_m_all_09 = $m6_m_all - $m6_9m_all; 

        $m456_m_all = $m4_m_all + $m5_fm_all + $m6_m_all;
        $m456_fm_all = $m4_fm_all + $m5_fm_all + $m6_fm_all;
        $m456_all = $m456_m_all + $m456_fm_all;

        $m_m_all = $m1_m_all + $m2_m_all + $m3_m_all + $m4_m_all + $m5_fm_all + $m6_m_all;
        $m_fm_all = $m1_fm_all + $m2_fm_all + $m3_fm_all + $m4_fm_all + $m5_fm_all + $m6_fm_all;
        $m_all = $m123_all + $m456_all;

        return view('academic', [
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
            'm4_m_all_09' => $m4_m_all_09,
            'm4_fm_all' => $m4_fm_all,
            'm4_all' => $m4_all,

             //ม.5
           'm5_m_all_09' => $m5_m_all_09,
           'm5_fm_all' => $m5_fm_all,
           'm5_all' => $m5_all,

            //ม.6
            'm6_m_all_09' => $m6_m_all_09,
            'm6_fm_all' => $m6_fm_all,
            'm6_all' => $m6_all,

            //ปวช.
            'm4_9m_all' => $m4_9m_all,
            'm5_9m_all' => $m5_9m_all,
            'm6_9m_all' => $m6_9m_all,

            'm4_9_all' => $m4_9_all,
            'm5_9_all' => $m5_9_all,
            'm6_9_all' => $m6_9_all,

        ]);
    }

    //กำหนดปีการศึกษาที่ใช้สมัครเรียน
    public function RegisterYear($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = registeryearModel::find($id);
        return view('academic.register-year.register-year-edit', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function EditRegisterYear(Request $request, $id)
    {
        $data = registeryearModel::find($id);
        $data->update($request->all());

        return redirect('/RegisterYear/1');
    }

    //เลื่อนชั้นเรียน
    public function academicClassAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->get();
        return view('academic.academic-class-all', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function academicClassChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->get();
        return view('academic.academic-class-change', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function academicChangeStatusAndClass(Request $request)
    {

        for ($i = 0; $i < count($request->student_class); $i++) {
            $data1[$i] = $request->student_class[$i];
            $data2[$i] = $request->student_room[$i];
            $id = $i + 1;
            $data = studentcoreModels::find($id);
            $datastudent = Student::find($id);
            $student = $datastudent->student_id;
            $data->update([
                'student_class' => $data1[$i],
                'student_room' => $data2[$i],
            ]);

            $upStudent = DB::table('students')
                ->where('student_id', '=', $student)
                ->update([
                    'student_class' => $data1[$i],
                    'student_room' => $data2[$i],
                ]);
        }
        return redirect('/academic/class');
    }

    public function academicChangeFinal(Request $request)
    {
        for ($i = 0; $i < count($request->status); $i++) {
            $data1[$i] = $request->status[$i];
            $id = $i + 1;
            $data = studentcoreModels::find($id);
            $data->update([
                'status' => $data1[$i],
            ]);
        }

        return redirect('/academic/final');
    }

    public function academicChangeMove(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $change = studentcoreModels::find($id);
        $change->date = $date;
        $change->update($request->all());
        return redirect('/academic/move');
    }

    public function academicChangeOut(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $change = studentcoreModels::find($id);
        $change->date = $date;
        $change->update($request->all());
        return redirect('/academic/out');
    }



    //จบการศึกษา
    public function academicFinalAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '02')
            ->get();
        return view('academic.academic-final-all', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function academicFinalChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->orWhere('status', '=', '02')
            ->get();
        return view('academic.academic-final-change', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    //ย้ายสถานศึกษา
    public function academicMoveAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '03')
            ->get();
        return view('academic.academic-move-all', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function academicMoveChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->orWhere('status', '=', '03')
            ->get();
        return view('academic.academic-move-change', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    //ออกกลางคัน
    public function academicOutAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '04')
            ->get();
        return view('academic.academic-out-all', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function academicOutChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null 
        && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->orWhere('status', '=', '04')
            ->get();
        return view('academic.academic-out-change', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    //เพิ่มแอคเค้านักเรียน

    public function showAccountStudent(Request $request)
    {
        if ($request->get('search') !== null) {
            $search = $request->get('search');
            $data = DB::table('students')
                ->where('student_id', 'like', '%' . $search . '%')
                ->get();
            return view('academic.academic-student-all', ['data' => $data]);
        }

        $data = Student::all();
        return view('academic.academic-student-all', ['data' => $data]);
    }

    public function addAccountStudent()
    {
        return view('academic.academic-student-add');
    }

    public function addAccount(Request $request)
    {
        Student::create([
            'student_id' => $request->get('password'),
            'prename' => $request->get('prename'),
            'fname' => $request->get('fname'),
            'name_cen' => $request->get('name_cen'),
            'surname' => $request->get('surname'),
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
        ]);

        return redirect('/academic/allAccount');
    }

    public function showAccount($id)
    {
        $data = Student::find($id);
        return view('academic.academic-student-edit', ['data' => $data]);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/academic/allAccount');
    }

    //จัดการข้อมูลห้องเรียน
    public function classRoom()
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = classroomModel::all();
        return view('academic.academic-class-room', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function classRoomAdd()
    {
        $school_year = DB::table('school_year')
        ->first();

        return view('academic.academic-class-room-add', ['school_year' => $school_year,]);
    }

    public function classRoomInsert(Request $request)
    {
        classroomModel::create([
            'class_id' => $request->get('class_id'),
            'class_room' => $request->get('class_room'),
        ]);
        return redirect('/academic/classRoom');
    }

    public function classRoomShow($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = classroomModel::find($id);
        return view('academic.academic-class-room-edit', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function classRoomEdit(Request $request, $id)
    {
        $data = classroomModel::find($id);
        $data->update([
            'class_id' => $request->get('class_id'),
            'class_room' => $request->get('class_room'),
        ]);
        return redirect('/academic/classRoom');
    }

    public function deleteClassRoom($id)
    {
        $student = classroomModel::find($id);
        $student->delete();
        return redirect('/academic/classRoom');
    }

    //จัดการข้อมูลสายการเรียน
    public function classMajor()
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = classmajorModel::all();
        return view('academic.academic-class-major', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function classMajorAdd()
    {
        $school_year = DB::table('school_year')
            ->first();
        return view('academic.academic-class-major-add', ['school_year' => $school_year,]);
    }

    public function classMajorInsert(Request $request)
    {
        classmajorModel::create([
            'class_id' => $request->get('class_id'),
            'class_major_name' => $request->get('class_major_name'),
        ]);
        return redirect('/academic/classMajor');
    }

    public function classMajorShow($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = classmajorModel::find($id);
        return view('academic.academic-class-major-edit', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function classMajorEdit(Request $request, $id)
    {
        $data = classmajorModel::find($id);
        $data->update([
            'class_id' => $request->get('class_id'),
            'class_major_name' => $request->get('class_major_name'),
        ]);
        return redirect('/academic/classMajor');
    }

    public function deleteClassMajor($id)
    {
        $student = classmajorModel::find($id);
        $student->delete();
        return redirect('/academic/classMajor');
    }

    //เอกสารรายงานตัวและโอนย้ายข้อมูล

    public function documentUnsubmitM1(Request $request)
    {
        if ($request->get('search') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', 'like', '%' . $search . '%')
                ->where('status_report', '=', '02')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.unsubmit-document.document-unsubmit-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
        ->first();

        $data = DB::table('new_student_register_m1')
            ->where('status_report', '=', '02')
            ->where('status_tranfer', '=', '02')
            ->get();

        return view('academic.document-and-tranfer.unsubmit-document.document-unsubmit-m1', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function documentAllM1($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data1 = newstudentm1Model::find($id);
        $findID = $data1->idNumber;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        $data3 = DB::table('status_pic')
            ->where('student_idcard', '=', $findID)
            ->first();

        return view('academic.document-and-tranfer.document-all-m1', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'school_year' => $school_year,
        ]);
    }

    public function upDocumentStatusM1(Request $request, $id)
    {
        $data1 = newstudentm1Model::find($id);

        if (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } else {
            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "03";
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', '=', $request->get('idNumber'))
                ->update([
                    'status_report' => $status_report,
                ]);
        }

        return redirect('/submitNotTranfer/M1');
    }

    public function submitNotTranferM1(Request $request)
    {
        if ($request->get('search') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', 'like', '%' . $search . '%')
                ->where('status_report', '=', '01')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('new_student_register_m1')
                ->where('status_report', 'like', '%' . $search2 . '%')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m1')
                ->where('status_report', 'like', '%' . $search2 . '%')
                ->where('student_year', 'like', '%' . $search3 . '%')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m1')
                ->where('student_year', 'like', '%' . $search3 . '%')
                ->where('status_report', '=', '01')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', 'like', '%' . $search . '%')
                ->where('status_report', 'like', '%' . $search2 . '%')
                ->where('student_year', 'like', '%' . $search3 . '%')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('new_student_register_m1')
            ->where('status_tranfer', '=', '02')
            ->where('status_report', '=', '01')
            ->orWhere('status_report', '=', '03')
            ->get();

        return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m1', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function tranferM1($id)
    {

        $school_year = DB::table('school_year')
            ->first();

        $data = newstudentm1Model::find($id);
        $data2 = classroomModel::all();
        return view('academic.document-and-tranfer.tranfer-m1', [
            'data' => $data,
            'data2' => $data2,
            'school_year' => $school_year,
        ]);
    }

    public function tranferM1Insert(Request $request, $id)
    {
        $data = newstudentm1Model::find($id);
        $data->update([
            "status_tranfer" => $request->get('status_tranfer'),
        ]);

        studentcoreModels::create([
            "student_id_card" => $request->get('student_id_card'),
            "student_id" => $request->get('student_id'),
            "student_class" => $request->get('student_class'),
            "student_room" => $request->get('student_room'),
            "prename" => $request->get('prename'),
            "fname" => $request->get('fname'),
            "name_cen" => $request->get('name_cen'),
            "surname" => $request->get('surname'),
            "birth_year" => $request->get('birth_year'),
            "birth_month" => $request->get('birth_month'),
            "birth_day" => $request->get('birth_day'),
            "gender" => $request->get('gender'),
            "religion" => $request->get('religion'),
            "origin" => $request->get('origin'),
            "nationality" => $request->get('nationality'),
            "tel_s" => $request->get('tel_s'),
            "score" => $request->get('score'),
            "status" => $request->get('status'),
        ]);

        addressstudentModel::create([
            "student_idcard_a" => $request->get('student_id_card'),
            "house_number" => $request->get('house_number'),
            "group" => $request->get('group'),
            "alley" => $request->get('alley'),
            "street" => $request->get('street'),
            "subdistrict" => $request->get('subdistrict'),
            "district" => $request->get('district'),
            "province" => $request->get('province'),
            "post" => $request->get('post'),
        ]);

        studentdetailModel::create([
            "student_idcard_d" => $request->get('student_id_card'),
        ]);

        talentstudentModel::create([
            "student_idcard_t" => $request->get('student_id_card'),
            "final_school" => $request->get('final_school'),
            "f_subdistrict" => $request->get('f_subdistrict'),
            "f_district" => $request->get('f_district'),
            "f_province" => $request->get('f_province'),
        ]);

        healtystudentModel::create([
            "student_idcard_h" => $request->get('student_id_card'),
        ]);

        parentstudentModel::create([
            "student_idcard_p" => $request->get('student_id_card'),
            "prename_f" => $request->get('prename_f'),
            "name_f" => $request->get('name_f'),
            "name_cen_f" => $request->get('name_cen_f'),
            "surname_f" => $request->get('surname_f'),
            "id_father" => $request->get('id_father'),
            "job_f" => $request->get('job_f'),
            "tel_f" => $request->get('tel_f'),
            "prename_m" => $request->get('prename_m'),
            "name_m" => $request->get('name_m'),
            "name_cen_m" => $request->get('name_cen_m'),
            "surname_m" => $request->get('surname_m'),
            "id_mother" => $request->get('id_mother'),
            "job_m" => $request->get('job_m'),
            "tel_m" => $request->get('tel_m'),
            "parent" => $request->get('parent'),
            "prename_p" => $request->get('prename_p'),
            "name_p" => $request->get('name_p'),
            "name_cen_p" => $request->get('name_cen_p'),
            "surname_p" => $request->get('surname_p'),
            "id_parent" => $request->get('id_parent'),
            "status_parent" => $request->get('status_parent'),
            "job_p" => $request->get('job_p'),
            "tel_p" => $request->get('tel_p'),
        ]);

        Student::create([
            'student_id' => $request->get('student_id'),
            'prename' => $request->get('prename'),
            'fname' => $request->get('fname'),
            'name_cen' => $request->get('name_cen'),
            'surname' => $request->get('surname'),
            "student_class" => $request->get('student_class'),
            "student_room" => $request->get('student_room'),
            'username' => $request->get('student_id_card'),
            'password' => bcrypt($request->get('student_id')),
        ]);

        return redirect('/tranferAllM1');
    }

    public function documentUnsubmitM4(Request $request)
    {
        if ($request->get('search') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search . '%')
                ->where('status_report', '=', '02')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.unsubmit-document.document-unsubmit-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('new_student_register_m4')
            ->where('status_report', '=', '02')
            ->where('status_tranfer', '=', '02')
            ->get();

        return view('academic.document-and-tranfer.unsubmit-document.document-unsubmit-m4', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function documentAllM4($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data1 = newstudentm4Model::find($id);
        $findID = $data1->id_number;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        $data3 = DB::table('status_pic')
            ->where('student_idcard', '=', $findID)
            ->first();


        return view('academic.document-and-tranfer.document-all-m4', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'school_year' => $school_year,
        ]);
    }

    public function upDocumentStatusM4(Request $request, $id)
    {
        $data1 = newstudentm4Model::find($id);

        if (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_idcard_mother') == '01'
            && $request->get('status_house_father') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_mother') == '01' && $request->get('status_house_mother') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_idcard_parent') == '01' && $request->get('status_house_parent') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01' && $request->get('status_disability_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } elseif (
            $request->get('status_idcard_father') == '01' && $request->get('status_house_father') == '01'
            && $request->get('status_front_grade') == '01' && $request->get('status_back_grade') == '01'
            && $request->get('status_birth_certificate') == '01'
        ) {

            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                ]);

            $status_report = "01";
            $status_tranfer = "02";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                    'status_tranfer' => $status_tranfer,
                ]);
        } else {
            $status = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    'status_idcard_father' => $request->get('status_idcard_father'),
                    'status_idcard_mother' => $request->get('status_idcard_mother'),
                    'status_house_father' => $request->get('status_house_father'),
                    'status_house_mother' => $request->get('status_house_mother'),
                    'status_idcard_parent' => $request->get('status_idcard_parent'),
                    'status_house_parent' => $request->get('status_house_parent'),
                    'status_front_grade' => $request->get('status_front_grade'),
                    'status_back_grade' => $request->get('status_back_grade'),
                    'status_birth_certificate' => $request->get('status_birth_certificate'),
                    'status_disability_certificate' => $request->get('status_disability_certificate'),
                ]);

            $status_report = "03";
            $data = DB::table('new_student_register_m4')
                ->where('id_number', '=', $request->get('id_number'))
                ->update([
                    'status_report' => $status_report,
                ]);
        }

        return redirect('/submitNotTranfer/M4');
    }

    public function submitNotTranferM4(Request $request)
    {
        if ($request->get('search') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search . '%')
                ->where('status_report', '=', '01')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('new_student_register_m4')
                ->where('status_report', 'like', '%' . $search2 . '%')
                ->where('status_report', '=', '01')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m4')
                ->where('status_report', 'like', '%' . $search2 . '%')
                ->where('student_year', 'like', '%' . $search3 . '%')
                ->where('status_report', '=', '01')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m4')
                ->where('student_year', 'like', '%' . $search3 . '%')
                ->where('status_report', '=', '01')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search . '%')
                ->where('status_report', 'like', '%' . $search2 . '%')
                ->where('student_year', 'like', '%' . $search3 . '%')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('new_student_register_m4')
            ->where('status_tranfer', '=', '02')
            ->where('status_report', '=', '01')
            ->orWhere('status_report', '=', '03')
            ->get();

        return view('academic.document-and-tranfer.submit-not-tranfer.submit-not-tranfer-m4', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function tranferM4($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = newstudentm4Model::find($id);
        $data2 = classroomModel::all();
        $data3 = classmajorModel::all();
        return view('academic.document-and-tranfer.tranfer-m4', [
            'data' => $data,
            'data2' => $data2,
            'data3' => $data3,
            'school_year' => $school_year,
        ]);
    }

    public function tranferM4Insert(Request $request, $id)
    {
        $data = newstudentm4Model::find($id);
        $data->update([
            "status_tranfer" => $request->get('status_tranfer'),
        ]);

        studentcoreModels::create([
            "student_id_card" => $request->get('student_id_card'),
            "student_id" => $request->get('student_id'),
            "student_major" => $request->get('student_major'),
            "student_class" => $request->get('student_class'),
            "student_room" => $request->get('student_room'),
            "prename" => $request->get('prename'),
            "fname" => $request->get('fname'),
            "name_cen" => $request->get('name_cen'),
            "surname" => $request->get('surname'),
            "birth_year" => $request->get('birth_year'),
            "birth_month" => $request->get('birth_month'),
            "birth_day" => $request->get('birth_day'),
            "gender" => $request->get('gender'),
            "religion" => $request->get('religion'),
            "origin" => $request->get('origin'),
            "nationality" => $request->get('nationality'),
            "tel_s" => $request->get('tel_s'),
            "score" => $request->get('score'),
            "status" => $request->get('status'),
        ]);

        addressstudentModel::create([
            "student_idcard_a" => $request->get('student_id_card'),
            "house_number" => $request->get('house_number'),
            "group" => $request->get('group'),
            "alley" => $request->get('alley'),
            "street" => $request->get('street'),
            "subdistrict" => $request->get('subdistrict'),
            "district" => $request->get('district'),
            "province" => $request->get('province'),
            "post" => $request->get('post'),
        ]);

        studentdetailModel::create([
            "student_idcard_d" => $request->get('student_id_card'),
        ]);

        talentstudentModel::create([
            "student_idcard_t" => $request->get('student_id_card'),
            "final_school" => $request->get('final_school'),
            "f_subdistrict" => $request->get('f_subdistrict'),
            "f_district" => $request->get('f_district'),
            "f_province" => $request->get('f_province'),
        ]);

        healtystudentModel::create([
            "student_idcard_h" => $request->get('student_id_card'),
        ]);

        parentstudentModel::create([
            "student_idcard_p" => $request->get('student_id_card'),
            "prename_f" => $request->get('prename_f'),
            "name_f" => $request->get('name_f'),
            "name_cen_f" => $request->get('name_cen_f'),
            "surname_f" => $request->get('surname_f'),
            "id_father" => $request->get('id_father'),
            "job_f" => $request->get('job_f'),
            "tel_f" => $request->get('tel_f'),
            "prename_m" => $request->get('prename_m'),
            "name_m" => $request->get('name_m'),
            "name_cen_m" => $request->get('name_cen_m'),
            "surname_m" => $request->get('surname_m'),
            "id_mother" => $request->get('id_mother'),
            "job_m" => $request->get('job_m'),
            "tel_m" => $request->get('tel_m'),
            "parent" => $request->get('parent'),
            "prename_p" => $request->get('prename_p'),
            "name_p" => $request->get('name_p'),
            "name_cen_p" => $request->get('name_cen_p'),
            "surname_p" => $request->get('surname_p'),
            "id_parent" => $request->get('id_parent'),
            "status_parent" => $request->get('status_parent'),
            "job_p" => $request->get('job_p'),
            "tel_p" => $request->get('tel_p'),
        ]);

        Student::create([
            'student_id' => $request->get('student_id'),
            'prename' => $request->get('prename'),
            'fname' => $request->get('fname'),
            'name_cen' => $request->get('name_cen'),
            'surname' => $request->get('surname'),
            "student_class" => $request->get('student_class'),
            "student_room" => $request->get('student_room'),
            'username' => $request->get('student_id_card'),
            'password' => bcrypt($request->get('student_id')),
        ]);

        return redirect('/tranferAllM4');
    }

    //โอนย้ายข้อมูลแล้ว
    public function tranferM1All(Request $request)
    {
        if ($request->get('search') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', 'like', '%' . $search . '%')
                ->where('status_tranfer', '=', '01')
                ->get();

            return view('academic.document-and-tranfer.tranfers.tranfer-all-m1', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('new_student_register_m1')
            ->where('status_tranfer', '=', '01')
            ->get();

        return view('academic.document-and-tranfer.tranfers.tranfer-all-m1', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function AllDocumentM1($id)
    {

        $school_year = DB::table('school_year')
            ->first();

        $data1 = newstudentm1Model::find($id);
        $findID = $data1->idNumber;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        $data3 = DB::table('status_pic')
            ->where('student_idcard', '=', $findID)
            ->first();

        return view('academic.document-and-tranfer.all-document-tranfer-m1', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'school_year' => $school_year,
        ]);
    }

    public function tranferM4All(Request $request)
    {
        if ($request->get('search') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search = $request->get('search');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search . '%')
                ->where('status_tranfer', '=', '01')
                ->get();

            return view('academic.document-and-tranfer.tranfers.tranfer-all-m4', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }

        $school_year = DB::table('school_year')
            ->first();

        $data = DB::table('new_student_register_m4')
            ->where('status_tranfer', '=', '01')
            ->get();

        return view('academic.document-and-tranfer.tranfers.tranfer-all-m4', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function AllDocumentM4($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data1 = newstudentm4Model::find($id);
        $findID = $data1->id_number;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        $data3 = DB::table('status_pic')
            ->where('student_idcard', '=', $findID)
            ->first();

        return view('academic.document-and-tranfer.all-document-tranfer-m4', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'school_year' => $school_year,
        ]);
    }

    //download Document

    public function profileDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/profile_img/'.$file));
        
    }

    public function StudentSubmitDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/student_submit/'.$file));
    }

    public function IdStudentDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/id_card/id_card_student/'.$file));
    }

    public function IdFatherDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/id_card/id_card_father/'.$file));
    }

    public function IdMotherDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/id_card/id_card_mother/'.$file));
    }

    public function IdParentDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/id_card/id_card_parent/'.$file));
    }

    public function HouseStudentDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/house_regis/house_student/'.$file));
    }

    public function HouseFatherDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/house_regis/house_father/'.$file));
    }

    public function HouseMotherDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/house_regis/house_mother/'.$file));
    }

    public function HouseParentDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/house_regis/house_parent/'.$file));
    }

    public function FrontGradeDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/front_grade/'.$file));
    }

    public function BackGradeDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/back_grade/'.$file));
    }

    public function BirthCertificateDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/birth_certificate/'.$file));
    }

    public function DisabilityCertificateDownload (Request $request, $file){

        return response()->download(public_path('ImgAll/disability_certificate/'.$file));
    }

    

    //ออกเอกสาร

    public function ReportStudentAll(Request $request)
    {
        
        if ($request->get('search1') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $school_year = DB::table('school_year')
            ->first();
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', [
                'data' => $data,
                'school_year' => $school_year,
            ]);
        }
        $school_year = DB::table('school_year')
            ->first();

        $data = studentcoreModels::all();

        return view('academic.academic-report.academic-report-student-all', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function ReportStudyM4(Request $request)
    {
        if ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search1 . '%')
                ->get();

            return view('academic.academic-report.academic-report-study-m4', [
                'data' => $data,
            ]);
        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('new_student_register_m4')
                ->where('major_name1', 'like', '%' . $search2 . '%')
                ->get();

            return view('academic.academic-report.academic-report-study-m4', [
                'data' => $data,
            ]);
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m4')
                ->where('major_name2', 'like', '%' . $search3 . '%')
                ->get();

            return view('academic.academic-report.academic-report-study-m4', [
                'data' => $data,
            ]);
        } elseif ($request->get('search4') !== null) {
            $search4 = $request->get('search4');
            $data = DB::table('new_student_register_m4')
                ->where('major_name3', 'like', '%' . $search4 . '%')
                ->get();

            return view('academic.academic-report.academic-report-study-m4', [
                'data' => $data,
            ]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('new_student_register_m4')
                ->where('major_name1', 'like', '%' . $search2 . '%')
                ->where('major_name2', 'like', '%' . $search3 . '%')
                ->get();

            return view('academic.academic-report.academic-report-study-m4', [
                'data' => $data,
            ]);
        } elseif (
            $request->get('search2') !== null && $request->get('search3') !== null
            && $request->get('search4') !== null
        ) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $search4 = $request->get('search4');
            $data = DB::table('new_student_register_m4')
                ->where('major_name1', 'like', '%' . $search2 . '%')
                ->where('major_name2', 'like', '%' . $search3 . '%')
                ->where('major_name3', 'like', '%' . $search4 . '%')
                ->get();

            return view('academic.academic-report.academic-report-study-m4', [
                'data' => $data,
            ]);
        }

        $data = DB::table('new_student_register_m4')
            ->where('status_tranfer', '=', '02')
            ->get();

        return view('academic.academic-report.academic-report-study-m4', [
            'data' => $data,
        ]);
    }

    public function StatStudent()
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();
        //ม.1/1
        $m1_1_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_1_m_all = count($m1_1_m);

        $m1_1_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_1_fm_all = count($m1_1_fm);

        $m1_1_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '1')
            ->first();
        $m1_1_all_sum = count($m1_1_all);

        //ม.1/2
        $m1_2_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_2_m_all = count($m1_2_m);

        $m1_2_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_2_fm_all = count($m1_2_fm);

        $m1_2_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '2')
            ->first();
        $m1_2_all_sum = count($m1_2_all);

        //ม.1/3
        $m1_3_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_3_m_all = count($m1_3_m);

        $m1_3_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_3_fm_all = count($m1_3_fm);

        $m1_3_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '3')
            ->first();
        $m1_3_all_sum = count($m1_3_all);

        //ม.1/4
        $m1_4_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_4_m_all = count($m1_4_m);

        $m1_4_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_4_fm_all = count($m1_4_fm);

        $m1_4_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '4')
            ->first();
        $m1_4_all_sum = count($m1_4_all);

        //ม.1/5
        $m1_5_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_5_m_all = count($m1_5_m);

        $m1_5_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_5_fm_all = count($m1_5_fm);

        $m1_5_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '5')
            ->first();
        $m1_5_all_sum = count($m1_5_all);

        //ม.1/6
        $m1_6_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_6_m_all = count($m1_6_m);

        $m1_6_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_6_fm_all = count($m1_6_fm);

        $m1_6_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '6')
            ->first();
        $m1_6_all_sum = count($m1_6_all);

        //ม.1/7
        $m1_7_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_7_m_all = count($m1_7_m);

        $m1_7_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_7_fm_all = count($m1_7_fm);

        $m1_7_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '7')
            ->first();
        $m1_7_all_sum = count($m1_7_all);

        //ม.1/8
        $m1_8_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_8_m_all = count($m1_8_m);

        $m1_8_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_8_fm_all = count($m1_8_fm);

        $m1_8_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('student_room', '=', '8')
            ->first();
        $m1_8_all_sum = count($m1_8_all);

        //ม.1 ทั้งหมด
        $m1_m = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m1_m_all = count($m1_m);

        $m1_fm = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m1_fm_all = count($m1_fm);

        $m1_all = DB::table('student_core')
            ->where('student_class', '=', '1')
            ->first();
        $m1_all_sum = count($m1_all);

        //ม.2/1
        $m2_1_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_1_m_all = count($m2_1_m);

        $m2_1_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_1_fm_all = count($m2_1_fm);

        $m2_1_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '1')
            ->first();
        $m2_1_all_sum = count($m2_1_all);

        //ม.2/2
        $m2_2_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_2_m_all = count($m2_2_m);

        $m2_2_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_2_fm_all = count($m2_2_fm);

        $m2_2_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '2')
            ->first();
        $m2_2_all_sum = count($m2_2_all);

        //ม.2/3
        $m2_3_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_3_m_all = count($m2_3_m);

        $m2_3_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_3_fm_all = count($m2_3_fm);

        $m2_3_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '3')
            ->first();
        $m2_3_all_sum = count($m2_3_all);

        //ม.2/4
        $m2_4_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_4_m_all = count($m2_4_m);

        $m2_4_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_4_fm_all = count($m2_4_fm);

        $m2_4_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '4')
            ->first();
        $m2_4_all_sum = count($m2_4_all);

        //ม.2/5
        $m2_5_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_5_m_all = count($m2_5_m);

        $m2_5_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_5_fm_all = count($m2_5_fm);

        $m2_5_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '5')
            ->first();
        $m2_5_all_sum = count($m2_5_all);

        //ม.2/6
        $m2_6_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_6_m_all = count($m2_6_m);

        $m2_6_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_6_fm_all = count($m2_6_fm);

        $m2_6_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '6')
            ->first();
        $m2_6_all_sum = count($m2_6_all);

        //ม.2/7
        $m2_7_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_7_m_all = count($m2_7_m);

        $m2_7_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_7_fm_all = count($m2_7_fm);

        $m2_7_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '7')
            ->first();
        $m2_7_all_sum = count($m2_7_all);

        //ม.2/8
        $m2_8_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_8_m_all = count($m2_8_m);

        $m2_8_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_8_fm_all = count($m2_8_fm);

        $m2_8_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('student_room', '=', '8')
            ->first();
        $m2_8_all_sum = count($m2_8_all);

        //ม.2 ทั้งหมด
        $m2_m = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m2_m_all = count($m2_m);

        $m2_fm = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m2_fm_all = count($m2_fm);

        $m2_all = DB::table('student_core')
            ->where('student_class', '=', '2')
            ->first();
        $m2_all_sum = count($m2_all);

        //ม.3/1
        $m3_1_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_1_m_all = count($m3_1_m);

        $m3_1_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_1_fm_all = count($m3_1_fm);

        $m3_1_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '1')
            ->first();
        $m3_1_all_sum = count($m3_1_all);

        //ม.3/2
        $m3_2_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_2_m_all = count($m3_2_m);

        $m3_2_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_2_fm_all = count($m3_2_fm);

        $m3_2_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '2')
            ->first();
        $m3_2_all_sum = count($m3_2_all);

        //ม.3/3
        $m3_3_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_3_m_all = count($m3_3_m);

        $m3_3_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_3_fm_all = count($m3_3_fm);

        $m3_3_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '3')
            ->first();
        $m3_3_all_sum = count($m3_3_all);

        //ม.3/4
        $m3_4_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_4_m_all = count($m3_4_m);

        $m3_4_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_4_fm_all = count($m3_4_fm);

        $m3_4_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '4')
            ->first();
        $m3_4_all_sum = count($m3_4_all);

        //ม.3/5
        $m3_5_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_5_m_all = count($m3_5_m);

        $m3_5_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_5_fm_all = count($m3_5_fm);

        $m3_5_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '5')
            ->first();
        $m3_5_all_sum = count($m3_5_all);

        //ม.3/6
        $m3_6_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_6_m_all = count($m3_6_m);

        $m3_6_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_6_fm_all = count($m3_6_fm);

        $m3_6_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '6')
            ->first();
        $m3_6_all_sum = count($m3_6_all);

        //ม.3/7
        $m3_7_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_7_m_all = count($m3_7_m);

        $m3_7_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_7_fm_all = count($m3_7_fm);

        $m3_7_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '7')
            ->first();
        $m3_7_all_sum = count($m3_7_all);

        //ม.3/8
        $m3_8_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_8_m_all = count($m3_8_m);

        $m3_8_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_8_fm_all = count($m3_8_fm);

        $m3_8_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('student_room', '=', '8')
            ->first();
        $m3_8_all_sum = count($m3_8_all);

        //ม.3 ทั้งหมด
        $m3_m = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m3_m_all = count($m3_m);

        $m3_fm = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m3_fm_all = count($m3_fm);

        $m3_all = DB::table('student_core')
            ->where('student_class', '=', '3')
            ->first();
        $m3_all_sum = count($m3_all);

        //ม.4/1
        $m4_1_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_1_m_all = count($m4_1_m);

        $m4_1_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_1_fm_all = count($m4_1_fm);

        $m4_1_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '1')
            ->first();
        $m4_1_all_sum = count($m4_1_all);

        //ม.4/2
        $m4_2_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_2_m_all = count($m4_2_m);

        $m4_2_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_2_fm_all = count($m4_2_fm);

        $m4_2_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '2')
            ->first();
        $m4_2_all_sum = count($m4_2_all);

        //ม.4/3
        $m4_3_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_3_m_all = count($m4_3_m);

        $m4_3_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_3_fm_all = count($m4_3_fm);

        $m4_3_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '3')
            ->first();
        $m4_3_all_sum = count($m4_3_all);

        //ม.4/4
        $m4_4_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_4_m_all = count($m4_4_m);

        $m4_4_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_4_fm_all = count($m4_4_fm);

        $m4_4_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '4')
            ->first();
        $m4_4_all_sum = count($m4_4_all);

        //ม.4/5
        $m4_5_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_5_m_all = count($m4_5_m);

        $m4_5_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_5_fm_all = count($m4_5_fm);

        $m4_5_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '5')
            ->first();
        $m4_5_all_sum = count($m4_5_all);

        //ม.4/6
        $m4_6_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_6_m_all = count($m4_6_m);

        $m4_6_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_6_fm_all = count($m4_6_fm);

        $m4_6_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '6')
            ->first();
        $m4_6_all_sum = count($m4_6_all);

        //ม.4/7
        $m4_7_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_7_m_all = count($m4_7_m);

        $m4_7_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_7_fm_all = count($m4_7_fm);

        $m4_7_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '7')
            ->first();
        $m4_7_all_sum = count($m4_7_all);

        //ม.4/8
        $m4_8_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_8_m_all = count($m4_8_m);

        $m4_8_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_8_fm_all = count($m4_8_fm);

        $m4_8_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '8')
            ->first();
        $m4_8_all_sum = count($m4_8_all);

        //ม.4/9
        $m4_9_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '9')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_9_m_all = count($m4_9_m);

        $m4_9_fm = DB::table('student_core')
            ->where('student_class', '=', '9')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_9_fm_all = count($m4_9_fm);

        $m4_9_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '9')
            ->first();
        $m4_9_all_sum = count($m4_9_all);

        //ม.4 ทั้งหมด
        $m4_m = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m4_m_all = count($m4_m);

        $m4_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m4_fm_all = count($m4_fm);

        $m4_all = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->first();
        $m4_all_sum = count($m4_all);

        //ม.5/1
        $m5_1_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_1_m_all = count($m5_1_m);

        $m5_1_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_1_fm_all = count($m5_1_fm);

        $m5_1_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '1')
            ->first();
        $m5_1_all_sum = count($m5_1_all);

        //ม.5/2
        $m5_2_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_2_m_all = count($m5_2_m);

        $m5_2_fm = DB::table('student_core')
            ->where('student_class', '=', '4')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_2_fm_all = count($m5_2_fm);

        $m5_2_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '2')
            ->first();
        $m5_2_all_sum = count($m5_2_all);

        //ม.5/3
        $m5_3_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_3_m_all = count($m5_3_m);

        $m5_3_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_3_fm_all = count($m5_3_fm);

        $m5_3_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '3')
            ->first();
        $m5_3_all_sum = count($m5_3_all);

        //ม.5/4
        $m5_4_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_4_m_all = count($m5_4_m);

        $m5_4_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_4_fm_all = count($m5_4_fm);

        $m5_4_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '4')
            ->first();
        $m5_4_all_sum = count($m5_4_all);

        //ม.5/5
        $m5_5_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_5_m_all = count($m5_5_m);

        $m5_5_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_5_fm_all = count($m5_5_fm);

        $m5_5_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '5')
            ->first();
        $m5_5_all_sum = count($m5_5_all);

        //ม.5/6
        $m5_6_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_6_m_all = count($m5_6_m);

        $m5_6_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_6_fm_all = count($m5_6_fm);

        $m5_6_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '6')
            ->first();
        $m5_6_all_sum = count($m5_6_all);

        //ม.5/7
        $m5_7_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_7_m_all = count($m5_7_m);

        $m5_7_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_7_fm_all = count($m5_7_fm);

        $m5_7_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '7')
            ->first();
        $m5_7_all_sum = count($m5_7_all);

        //ม.5/8
        $m5_8_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_8_m_all = count($m5_8_m);

        $m5_8_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_8_fm_all = count($m5_8_fm);

        $m5_8_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '8')
            ->first();
        $m5_8_all_sum = count($m5_8_all);

        //ม.5/9
        $m5_9_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '9')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_9_m_all = count($m5_9_m);

        $m5_9_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_9_fm_all = count($m5_9_fm);

        $m5_9_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('student_room', '=', '9')
            ->first();
        $m5_9_all_sum = count($m5_9_all);

        //ม.5 ทั้งหมด
        $m5_m = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m5_m_all = count($m5_m);

        $m5_fm = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m5_fm_all = count($m5_fm);

        $m5_all = DB::table('student_core')
            ->where('student_class', '=', '5')
            ->first();
        $m5_all_sum = count($m5_all);

        //ม.6/1
        $m6_1_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_1_m_all = count($m6_1_m);

        $m6_1_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '1')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_1_fm_all = count($m6_1_fm);

        $m6_1_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '1')
            ->first();
        $m6_1_all_sum = count($m6_1_all);

        //ม.6/2
        $m6_2_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_2_m_all = count($m6_2_m);

        $m6_2_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '2')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_2_fm_all = count($m6_2_fm);

        $m6_2_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '2')
            ->first();
        $m6_2_all_sum = count($m6_2_all);

        //ม.6/3
        $m6_3_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_3_m_all = count($m6_3_m);

        $m6_3_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '3')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_3_fm_all = count($m6_3_fm);

        $m6_3_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '3')
            ->first();
        $m6_3_all_sum = count($m6_3_all);

        //ม.6/4
        $m6_4_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_4_m_all = count($m6_4_m);

        $m6_4_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '4')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_4_fm_all = count($m6_4_fm);

        $m6_4_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '4')
            ->first();
        $m6_4_all_sum = count($m6_4_all);

        //ม.6/5
        $m6_5_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_5_m_all = count($m6_5_m);

        $m6_5_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '5')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_5_fm_all = count($m6_5_fm);

        $m6_5_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '5')
            ->first();
        $m6_5_all_sum = count($m6_5_all);

        //ม.6/6
        $m6_6_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_6_m_all = count($m6_6_m);

        $m6_6_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_6_fm_all = count($m6_6_fm);

        $m6_6_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '6')
            ->first();
        $m6_6_all_sum = count($m6_6_all);

        //ม.6/7
        $m6_7_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_7_m_all = count($m6_7_m);

        $m6_7_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '7')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_7_fm_all = count($m6_7_fm);

        $m6_7_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '7')
            ->first();
        $m6_7_all_sum = count($m6_7_all);

        //ม.6/8
        $m6_8_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_8_m_all = count($m6_8_m);

        $m6_8_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_8_fm_all = count($m6_8_fm);

        $m6_8_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '8')
            ->first();
        $m6_8_all_sum = count($m6_8_all);

        //ม.6/9
        $m6_9_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '9')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_9_m_all = count($m6_9_m);

        $m6_9_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '8')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_9_fm_all = count($m6_9_fm);

        $m6_9_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('student_room', '=', '9')
            ->first();
        $m6_9_all_sum = count($m6_9_all);

        //ม.6 ทั้งหมด
        $m6_m = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('gender', '=', 'ชาย')
            ->first();
        $m6_m_all = count($m6_m);

        $m6_fm = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->where('gender', '=', 'หญิง')
            ->first();
        $m6_fm_all = count($m6_fm);

        $m6_all = DB::table('student_core')
            ->where('student_class', '=', '6')
            ->first();
        $m6_all_sum = count($m6_all);

        //รวม ม.ต้น
        $m123_m = $m1_m_all + $m2_m_all + $m3_m_all;
        $m123_fm = $m1_fm_all + $m2_fm_all + $m3_fm_all;
        $m123_all = $m1_all_sum + $m2_all_sum + $m3_all_sum;

        //รวม ม.ปลาย
        $m456_m = $m4_m_all + $m5_m_all + $m6_m_all;
        $m456_fm = $m4_fm_all + $m5_fm_all + $m6_fm_all;
        $m456_all = $m4_all_sum + $m5_all_sum + $m6_all_sum;

        //ม.ต้น + ม.ปลาย
        $m_m_all = $m1_m_all + $m2_m_all + $m3_m_all + $m4_m_all + $m5_m_all + $m6_m_all;
        $m_fm_all = $m1_fm_all + $m2_fm_all + $m3_fm_all + $m4_fm_all + $m5_fm_all + $m6_fm_all;
        $m_all = $m1_all_sum + $m2_all_sum + $m3_all_sum + $m4_all_sum + $m5_all_sum + $m6_all_sum;

        return view('academic.academic-report.academic-report-stat-student', [

            //ปีการศึกษา
            'school_year' => $school_year,

            //รวม
            'm123_m' => $m123_m,
            'm123_fm' => $m123_fm,
            'm123_all' => $m123_all,
            'm456_m' => $m456_m,
            'm456_fm' => $m456_fm,
            'm456_all' => $m456_all,
            'm_m_all' => $m_m_all,
            'm_fm_all' => $m_fm_all,
            'm_all' => $m_all,

            //ม.1/1
            'm1_1_m_all' => $m1_1_m_all,
            'm1_1_fm_all' => $m1_1_fm_all,
            'm1_1_all_sum' => $m1_1_all_sum,

            //ม.1/2
            'm1_2_m_all' => $m1_2_m_all,
            'm1_2_fm_all' => $m1_2_fm_all,
            'm1_2_all_sum' => $m1_2_all_sum,

            //ม.1/3
            'm1_3_m_all' => $m1_3_m_all,
            'm1_3_fm_all' => $m1_3_fm_all,
            'm1_3_all_sum' => $m1_3_all_sum,

            //ม.1/4
            'm1_4_m_all' => $m1_4_m_all,
            'm1_4_fm_all' => $m1_4_fm_all,
            'm1_4_all_sum' => $m1_4_all_sum,

            //ม.1/5
            'm1_5_m_all' => $m1_5_m_all,
            'm1_5_fm_all' => $m1_5_fm_all,
            'm1_5_all_sum' => $m1_5_all_sum,

            //ม.1/6
            'm1_6_m_all' => $m1_6_m_all,
            'm1_6_fm_all' => $m1_6_fm_all,
            'm1_6_all_sum' => $m1_6_all_sum,

            //ม.1/7
            'm1_7_m_all' => $m1_7_m_all,
            'm1_7_fm_all' => $m1_7_fm_all,
            'm1_7_all_sum' => $m1_7_all_sum,

            //ม.1/8
            'm1_8_m_all' => $m1_8_m_all,
            'm1_8_fm_all' => $m1_8_fm_all,
            'm1_8_all_sum' => $m1_8_all_sum,

            //ม.1
            'm1_m_all' => $m1_m_all,
            'm1_fm_all' => $m1_fm_all,
            'm1_all_sum' => $m1_all_sum,

            //ม.2/1
            'm2_1_m_all' => $m2_1_m_all,
            'm2_1_fm_all' => $m2_1_fm_all,
            'm2_1_all_sum' => $m2_1_all_sum,

            //ม.2/2
            'm2_2_m_all' => $m2_2_m_all,
            'm2_2_fm_all' => $m2_2_fm_all,
            'm2_2_all_sum' => $m2_2_all_sum,

            //ม.2/3
            'm2_3_m_all' => $m2_3_m_all,
            'm2_3_fm_all' => $m2_3_fm_all,
            'm2_3_all_sum' => $m2_3_all_sum,

            //ม.2/4
            'm2_4_m_all' => $m2_4_m_all,
            'm2_4_fm_all' => $m2_4_fm_all,
            'm2_4_all_sum' => $m2_4_all_sum,

            //ม.2/5
            'm2_5_m_all' => $m2_5_m_all,
            'm2_5_fm_all' => $m2_5_fm_all,
            'm2_5_all_sum' => $m2_5_all_sum,

            //ม.2/6
            'm2_6_m_all' => $m2_6_m_all,
            'm2_6_fm_all' => $m2_6_fm_all,
            'm2_6_all_sum' => $m2_6_all_sum,

            //ม.2/7
            'm2_7_m_all' => $m2_7_m_all,
            'm2_7_fm_all' => $m2_7_fm_all,
            'm2_7_all_sum' => $m2_7_all_sum,

            //ม.2/8
            'm2_8_m_all' => $m2_8_m_all,
            'm2_8_fm_all' => $m2_8_fm_all,
            'm2_8_all_sum' => $m2_8_all_sum,

            //ม.2
            'm2_m_all' => $m2_m_all,
            'm2_fm_all' => $m2_fm_all,
            'm2_all_sum' => $m2_all_sum,

            //ม.3/1
            'm3_1_m_all' => $m3_1_m_all,
            'm3_1_fm_all' => $m3_1_fm_all,
            'm3_1_all_sum' => $m3_1_all_sum,

            //ม.3/2
            'm3_2_m_all' => $m3_2_m_all,
            'm3_2_fm_all' => $m3_2_fm_all,
            'm3_2_all_sum' => $m3_2_all_sum,

            //ม.3/3
            'm3_3_m_all' => $m3_3_m_all,
            'm3_3_fm_all' => $m3_3_fm_all,
            'm3_3_all_sum' => $m3_3_all_sum,

            //ม.3/4
            'm3_4_m_all' => $m3_4_m_all,
            'm3_4_fm_all' => $m3_4_fm_all,
            'm3_4_all_sum' => $m3_4_all_sum,

            //ม.3/5
            'm3_5_m_all' => $m3_5_m_all,
            'm3_5_fm_all' => $m3_5_fm_all,
            'm3_5_all_sum' => $m3_5_all_sum,

            //ม.3/6
            'm3_6_m_all' => $m3_6_m_all,
            'm3_6_fm_all' => $m3_6_fm_all,
            'm3_6_all_sum' => $m3_6_all_sum,

            //ม.3/7
            'm3_7_m_all' => $m3_7_m_all,
            'm3_7_fm_all' => $m3_7_fm_all,
            'm3_7_all_sum' => $m3_7_all_sum,

            //ม.3/8
            'm3_8_m_all' => $m3_8_m_all,
            'm3_8_fm_all' => $m3_8_fm_all,
            'm3_8_all_sum' => $m3_8_all_sum,

            //ม.3
            'm3_m_all' => $m3_m_all,
            'm3_fm_all' => $m3_fm_all,
            'm3_all_sum' => $m3_all_sum,

            //ม.4/1
            'm4_1_m_all' => $m4_1_m_all,
            'm4_1_fm_all' => $m4_1_fm_all,
            'm4_1_all_sum' => $m4_1_all_sum,

            //ม.4/2
            'm4_2_m_all' => $m4_2_m_all,
            'm4_2_fm_all' => $m4_2_fm_all,
            'm4_2_all_sum' => $m4_2_all_sum,

            //ม.4/3
            'm4_3_m_all' => $m4_3_m_all,
            'm4_3_fm_all' => $m4_3_fm_all,
            'm4_3_all_sum' => $m4_3_all_sum,

            //ม.4/4
            'm4_4_m_all' => $m4_4_m_all,
            'm4_4_fm_all' => $m4_4_fm_all,
            'm4_4_all_sum' => $m4_4_all_sum,

            //ม.4/5
            'm4_5_m_all' => $m4_5_m_all,
            'm4_5_fm_all' => $m4_5_fm_all,
            'm4_5_all_sum' => $m4_5_all_sum,

            //ม.4/6
            'm4_6_m_all' => $m4_6_m_all,
            'm4_6_fm_all' => $m4_6_fm_all,
            'm4_6_all_sum' => $m4_6_all_sum,

            //ม.4/7
            'm4_7_m_all' => $m4_7_m_all,
            'm4_7_fm_all' => $m4_7_fm_all,
            'm4_7_all_sum' => $m4_7_all_sum,

            //ม.4/8
            'm4_8_m_all' => $m4_8_m_all,
            'm4_8_fm_all' => $m4_8_fm_all,
            'm4_8_all_sum' => $m4_8_all_sum,

            //ม.4/9
            'm4_9_m_all' => $m4_9_m_all,
            'm4_9_fm_all' => $m4_9_fm_all,
            'm4_9_all_sum' => $m4_9_all_sum,

            //ม.4
            'm4_m_all' => $m4_m_all,
            'm4_fm_all' => $m4_fm_all,
            'm4_all_sum' => $m4_all_sum,

            //ม.5/1
            'm5_1_m_all' => $m5_1_m_all,
            'm5_1_fm_all' => $m5_1_fm_all,
            'm5_1_all_sum' => $m5_1_all_sum,

            //ม.5/2
            'm5_2_m_all' => $m5_2_m_all,
            'm5_2_fm_all' => $m5_2_fm_all,
            'm5_2_all_sum' => $m5_2_all_sum,

            //ม.5/3
            'm5_3_m_all' => $m5_3_m_all,
            'm5_3_fm_all' => $m5_3_fm_all,
            'm5_3_all_sum' => $m5_3_all_sum,

            //ม.5/4
            'm5_4_m_all' => $m5_4_m_all,
            'm5_4_fm_all' => $m5_4_fm_all,
            'm5_4_all_sum' => $m5_4_all_sum,

            //ม.5/5
            'm5_5_m_all' => $m5_5_m_all,
            'm5_5_fm_all' => $m5_5_fm_all,
            'm5_5_all_sum' => $m5_5_all_sum,

            //ม.5/6
            'm5_6_m_all' => $m5_6_m_all,
            'm5_6_fm_all' => $m5_6_fm_all,
            'm5_6_all_sum' => $m5_6_all_sum,

            //ม.5/7
            'm5_7_m_all' => $m5_7_m_all,
            'm5_7_fm_all' => $m5_7_fm_all,
            'm5_7_all_sum' => $m5_7_all_sum,

            //ม.5/8
            'm5_8_m_all' => $m5_8_m_all,
            'm5_8_fm_all' => $m5_8_fm_all,
            'm5_8_all_sum' => $m5_8_all_sum,

            //ม.5/9
            'm5_9_m_all' => $m5_9_m_all,
            'm5_9_fm_all' => $m5_9_fm_all,
            'm5_9_all_sum' => $m5_9_all_sum,

            //ม.5
            'm5_m_all' => $m5_m_all,
            'm5_fm_all' => $m5_fm_all,
            'm5_all_sum' => $m5_all_sum,

            //ม.6/1
            'm6_1_m_all' => $m6_1_m_all,
            'm6_1_fm_all' => $m6_1_fm_all,
            'm6_1_all_sum' => $m6_1_all_sum,

            //ม.6/2
            'm6_2_m_all' => $m6_2_m_all,
            'm6_2_fm_all' => $m6_2_fm_all,
            'm6_2_all_sum' => $m6_2_all_sum,

            //ม.6/3
            'm6_3_m_all' => $m6_3_m_all,
            'm6_3_fm_all' => $m6_3_fm_all,
            'm6_3_all_sum' => $m6_3_all_sum,

            //ม.6/4
            'm6_4_m_all' => $m6_4_m_all,
            'm6_4_fm_all' => $m6_4_fm_all,
            'm6_4_all_sum' => $m6_4_all_sum,

            //ม.6/5
            'm6_5_m_all' => $m6_5_m_all,
            'm6_5_fm_all' => $m6_5_fm_all,
            'm6_5_all_sum' => $m6_5_all_sum,

            //ม.6/6
            'm6_6_m_all' => $m6_6_m_all,
            'm6_6_fm_all' => $m6_6_fm_all,
            'm6_6_all_sum' => $m6_6_all_sum,

            //ม.6/7
            'm6_7_m_all' => $m6_7_m_all,
            'm6_7_fm_all' => $m6_7_fm_all,
            'm6_7_all_sum' => $m6_7_all_sum,

            //ม.6/8
            'm6_8_m_all' => $m6_8_m_all,
            'm6_8_fm_all' => $m6_8_fm_all,
            'm6_8_all_sum' => $m6_8_all_sum,

            //ม.6/9
            'm6_9_m_all' => $m6_9_m_all,
            'm6_9_fm_all' => $m6_9_fm_all,
            'm6_9_all_sum' => $m6_9_all_sum,

            //ม.6
            'm6_m_all' => $m6_m_all,
            'm6_fm_all' => $m6_fm_all,
            'm6_all_sum' => $m6_all_sum,
        ]);
    }
}
