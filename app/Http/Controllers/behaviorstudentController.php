<?php

namespace App\Http\Controllers;

use App\Models\behaviorstudentModel;
use Illuminate\Http\Request;
use App\Models\studentcoreModels;
use App\Models\schoolyearModel;
use Illuminate\Support\Facades\DB;
use App\Student;

class behaviorstudentController extends Controller
{
    public function index(Request $request)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $search = $request->get('search');
        $data_student = DB::table('student_core')
            ->where('student_id', 'like', '%' . $search . '%')
            ->get();
        return view('behavior-student.stu-ad-conduct-score-all', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data_student' => $data_student,
        ]);
    }

    public function behaviorIndex(Request $request)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $search = $request->get('search');
        $data = DB::table('behavior_student')
            ->where('student_id_behavior', 'like', '%' . $search . '%')
            ->get();
        return view('behavior-student.stu-ad-conduct-score-check-all', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data' => $data,
        ]);
    }

    public function addMinus($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $data = studentcoreModels::find($id);
        $data2 = schoolyearModel::first();
        return view('behavior-student.stu-ad-conduct-score-add-minus', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data' => $data,
            'data2' => $data2
        ]);
    }

    public function addPlus($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $data = studentcoreModels::find($id);
        $data2 = schoolyearModel::first();
        return view('behavior-student.stu-ad-conduct-score-add-plus', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data' => $data,
            'data2' => $data2
        ]);
    }

    public function viewBehaviorIDReport($id)
    {
        $data_student = studentcoreModels::find($id);
        $stid = $data_student->student_id;
        $photo_id = $data_student->student_id_card;
        $student_Plus = DB::table('student_core')
            ->join('behavior_student', 'student_core.student_id', '=', 'behavior_student.student_id_behavior')
            ->select(
                'student_core.student_id',
                'student_core.student_number',
                'behavior_student.fullname',
                'behavior_student.behavior_class',
                'behavior_student.behavior_room',
                'behavior_student.behavior_history',
                'behavior_student.plus_score',
                'behavior_student.behavior_day',
                'behavior_student.behavior_mount',
                'behavior_student.behavior_year',
                'behavior_student.behavior_study_year',
                'behavior_student.behavior_term',
                'behavior_student.etc'

            )
            ->where('student_core.student_id', '=', $stid)
            ->whereNotNull('behavior_student.plus_score')
            ->get();

        $student_Minus = DB::table('student_core')
            ->join('behavior_student', 'student_core.student_id', '=', 'behavior_student.student_id_behavior')
            ->select(
                'student_core.student_id',
                'student_core.student_number',
                'behavior_student.fullname',
                'behavior_student.behavior_class',
                'behavior_student.behavior_room',
                'behavior_student.behavior_history',
                'behavior_student.minus_score',
                'behavior_student.behavior_day',
                'behavior_student.behavior_mount',
                'behavior_student.behavior_year',
                'behavior_student.behavior_study_year',
                'behavior_student.behavior_term',
                'behavior_student.etc'

            )
            ->where('student_core.student_id', '=', $stid)
            ->whereNotNull('behavior_student.minus_score')
            ->get();

        $photo = DB::table('student_core')
            ->join('photo_student', 'student_core.student_id_card', '=', 'photo_student.student_idcard')
            ->select('photo_student.profile_img')
            ->where('student_core.student_id_card', '=', $photo_id)
            ->first();

        return view(
            'behavior-student.behavior-report.behavior-report-id',
            [
                "data_student" => $data_student,
                "student_Plus" => $student_Plus,
                "student_Minus" => $student_Minus,
                "photo" => $photo
            ]
        );
    }

    public function viewBehaviorID($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $data_student = studentcoreModels::find($id);
        $stid = $data_student->student_id;
        $photo_id = $data_student->student_id_card;

        $student = DB::table('student_core')
            ->join('behavior_student', 'student_core.student_id', '=', 'behavior_student.student_id_behavior')
            ->select(
                'student_core.student_id',
                'student_core.student_number',
                'behavior_student.fullname',
                'behavior_student.behavior_class',
                'behavior_student.behavior_room',
                'behavior_student.behavior_history',
                'behavior_student.minus_score',
                'behavior_student.plus_score',
                'behavior_student.behavior_day',
                'behavior_student.behavior_mount',
                'behavior_student.behavior_year',
                'behavior_student.behavior_study_year',
                'behavior_student.behavior_term',
                'behavior_student.etc'

            )
            ->where('student_core.student_id', '=', $stid)
            ->get();

        if ($photo_id !== NULL) {
            $photo = DB::table('student_core')
                ->join('photo_student', 'student_core.student_id_card', '=', 'photo_student.student_idcard')
                ->select('photo_student.profile_img')
                ->where('student_core.student_id_card', '=', $photo_id)
                ->first();
        } else {
            $photo = $photo_id;
        }



        return view(
            'behavior-student.stu-ad-conduct-score-check-view-id',
            [
                //ปีการศึกษา
                'school_year' => $school_year,

                "data_student" => $data_student,
                "student" => $student,
                "photo" => $photo
            ]
        );
    }

    //นักเรียน
    public function viewStudentBehaviorID($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $data_student = Student::find($id);
        $stid = $data_student->username;
        $photo_id = $data_student->student_id_card;

        $student = DB::table('student_core')
            ->join('behavior_student', 'student_core.student_id', '=', 'behavior_student.student_id_behavior')
            ->select(
                'student_core.student_id',
                'student_core.student_number',
                'behavior_student.fullname',
                'behavior_student.behavior_class',
                'behavior_student.behavior_room',
                'behavior_student.behavior_history',
                'behavior_student.minus_score',
                'behavior_student.plus_score',
                'behavior_student.behavior_day',
                'behavior_student.behavior_mount',
                'behavior_student.behavior_year',
                'behavior_student.behavior_study_year',
                'behavior_student.behavior_term',
                'behavior_student.etc'

            )
            ->where('student_core.student_id', '=', $stid)
            ->get();

        if ($photo_id !== NULL) {
            $photo = DB::table('student_core')
                ->join('photo_student', 'student_core.student_id_card', '=', 'photo_student.student_idcard')
                ->select('photo_student.profile_img')
                ->where('student_core.student_id_card', '=', $photo_id)
                ->first();
        } else {
            $photo = $photo_id;
        }



        return view(
            'Studentcore.student.student-behavior-id',
            [
                //ปีการศึกษา
                'school_year' => $school_year,

                "data_student" => $data_student,
                "student" => $student,
                "photo" => $photo
            ]
        );
    }

    public function minusInsert(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');

        $student_score = studentcoreModels::find($id);
        $sumscore = $student_score->score;
        $sum = (int)$sumscore - (int)$request->minus_score;
        $student_score->score = $sum;

        $behavior_minus = new behaviorstudentModel([
            "fullname" => $request->get('fullname'),
            "student_id_behavior" => $request->get('student_id'),
            "behavior_history" => $request->get('behavior_history'),
            "behavior_class" => $request->get('behavior_class'),
            "behavior_room" => $request->get('behavior_room'),
            "minus_score" => $request->get('minus_score'),
            "plus_score" => $request->get('plus_score'),
            "total_score" => $sum,
            "etc" => $request->get('etc'),
            "behavior_day" => $day,
            "behavior_mount" => $mounth,
            "behavior_year" => $year,
            "behavior_term" => $request->get('behavior_term'),
            "behavior_study_year" => $request->get('behavior_study_year'),
        ]);

        $behavior_minus->save();
        $student_score->save();

        return redirect('/behavior/index');
    }

    public function plusInsert(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $student_score = studentcoreModels::find($id);
        $sumscore = $student_score->score;
        $sum = (int)$sumscore + (int)$request->plus_score;
        $student_score->score = $sum;

        $behavior_minus = new behaviorstudentModel([
            "fullname" => $request->get('fullname'),
            "student_id_behavior" => $request->get('student_id'),
            "behavior_history" => $request->get('behavior_history'),
            "behavior_class" => $request->get('behavior_class'),
            "behavior_room" => $request->get('behavior_room'),
            "minus_score" => $request->get('minus_score'),
            "plus_score" => $request->get('plus_score'),
            "total_score" => $sum,
            "etc" => $request->get('etc'),
            "behavior_day" => $day,
            "behavior_mount" => $mounth,
            "behavior_year" => $year,
            "behavior_term" => $request->get('behavior_term'),
            "behavior_study_year" => $request->get('behavior_study_year'),
        ]);

        $behavior_minus->save();
        $student_score->save();

        return redirect('/behavior/index');
    }

    public function behaviorAll(Request $request)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('behavior_student')
                ->where('behavior_mount', 'like', '%' . $search1 . '%')
                ->where('behavior_term', 'like', '%' . $search2 . '%')
                ->where('behavior_study_year', 'like', '%' . $search3 . '%')
                ->get();
            return view('behavior-student.behavior-report.behavior-report-all', ['data' => $data]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('behavior_student')
                ->where('behavior_term', 'like', '%' . $search2 . '%')
                ->where('behavior_study_year', 'like', '%' . $search3 . '%')
                ->get();
            return view('behavior-student.behavior-report.behavior-report-all', ['data' => $data]);
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('behavior_student')
                ->where('behavior_study_year', 'like', '%' . $search3 . '%')
                ->get();
            return view('behavior-student.behavior-report.behavior-report-all', ['data' => $data]);
        }

        $data = DB::table('behavior_student')->get();
        return view('behavior-student.behavior-report.behavior-report-all', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data' => $data,
        ]);
    }
}
