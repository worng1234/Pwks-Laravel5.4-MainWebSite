<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class  newstudentController extends Controller
{
    public function getAll(){
        $data = DB::table('student_information_core')
        ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
        ->select('student_information_core.student_id',
                 'student_information_core.prename',
                 'student_information_core.name',
                 'student_information_core.surname',
                 'behavior_student.title',
                 'behavior_student.behavior_date')
        ->get();
        return response()->json($data, 200);
    }

    public function create(Request $request){
        $data['name'] = $request['name'];
        $data['surname'] = $request['surname'];
        test::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 201);
      }

      public function store(Request $request)
    {
        $test = test::create($request->all());
        return response($test, 201);
    }
}
