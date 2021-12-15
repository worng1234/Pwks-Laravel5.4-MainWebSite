<?php

namespace App\Http\Controllers;

use App\Models\behaviorstudentModel;
use Illuminate\Http\Request;
use App\Models\studentcoreModels;
use Illuminate\Support\Facades\DB;

class behaviorstudentController extends Controller
{
    public function index()
    {
        $data_student = studentcoreModels::all();
        return view('behavior-student.stu-ad-conduct-score-all', ['data_student' => $data_student]);
    }

    public function behaviorIndex()
    {
        $data = behaviorstudentModel::all();
        return view('behavior-student.stu-ad-conduct-score-check-all', ['data' => $data]);
    }

    public function addMinus($id)
    {
        $data = studentcoreModels::find($id);
        return view('behavior-student.stu-ad-conduct-score-add-minus', compact('data'));
    }

    public function addPlus($id)
    {
        $data = studentcoreModels::find($id);
        return view('behavior-student.stu-ad-conduct-score-add-plus', compact('data'));
    }

    public function viewBehaviorID($id)
    {
        $data_student = studentcoreModels::find($id);
        $stid = $data_student->student_id;

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
                'behavior_student.plus_score'
            )
            ->where('student_core.student_id', '=',$stid)
            ->get();
        

        return view(
            'behavior-student.stu-ad-conduct-score-check-view-id',
            [
                "data_student" => $data_student,
                "student" => $student,
            ]
        );
    }

    public function minusInsert(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $behavior_minus = new behaviorstudentModel([
            "fullname" => $request->get('fullname'),
            "student_id_behavior" => $request->get('student_id'),
            "behavior_history" => $request->get('behavior_history'),
            "behavior_class" => $request->get('behavior_class'),
            "behavior_room" => $request->get('behavior_room'),
            "minus_score" => $request->get('minus_score'),
            "plus_score" => $request->get('plus_score'),
            "etc" => $request->get('etc'),
            "behavior_date" => $date,
        ]);

        $behavior_minus->save();

        $student_score = studentcoreModels::find($id);
        $sumscore = $student_score->score;
        $sum = (int)$sumscore - (int)$request->minus_score;
        $student_score->score = $sum;
        $student_score->save();

        return redirect('/behavior/index');
    }

    public function plusInsert(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $behavior_minus = new behaviorstudentModel([
            "fullname" => $request->get('fullname'),
            "student_id_behavior" => $request->get('student_id'),
            "behavior_history" => $request->get('behavior_history'),
            "behavior_class" => $request->get('behavior_class'),
            "behavior_room" => $request->get('behavior_room'),
            "minus_score" => $request->get('minus_score'),
            "plus_score" => $request->get('plus_score'),
            "etc" => $request->get('etc'),
            "behavior_date" => $date,
        ]);

        $behavior_minus->save();

        $student_score = studentcoreModels::find($id);
        $sumscore = $student_score->score;
        $sum = (int)$sumscore + (int)$request->plus_score;
        $student_score->score = $sum;
        $student_score->save();

        return redirect('/behavior/index');
    }
}
