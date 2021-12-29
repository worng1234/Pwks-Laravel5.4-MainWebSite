<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\studentcoreModels;
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
        return view('academic');
    }

    //เลื่อนชั้นเรียน
    public function academicClassAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        }
        $data = DB::table('student_core')
        ->where('status', '=', '01')
        ->get();
        return view('academic.academic-class-all', ['data' => $data]);
    }

    public function academicClassChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '01')
        ->get();
        return view('academic.academic-class-change', ['data' => $data]);
    }

    public function academicChangeStatusAndClass(Request $request)
    {
        
        for ($i=0; $i < count($request->student_class); $i++) { 
            $data1[$i] = $request->student_class[$i];
            $data2[$i] = $request->student_room[$i];
            $id = $i+1;
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
        for ($i=0; $i < count($request->status); $i++) { 
            $data1[$i] = $request->status[$i];
            $id = $i+1;
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
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '02')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '02')
        ->get();
        return view('academic.academic-final-all', ['data' => $data]);
    }

    public function academicFinalChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '01')
        ->orWhere('status','=', '02')
        ->get();
        return view('academic.academic-final-change', ['data' => $data]);
    }

    //ย้ายสถานศึกษา
    public function academicMoveAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '03')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '03')
        ->get();
        return view('academic.academic-move-all', ['data' => $data]);
    }

    public function academicMoveChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '01')
        ->orWhere('status','=', '03')
        ->get();
        return view('academic.academic-move-change', ['data' => $data]);
    }

    //ออกกลางคัน
    public function academicOutAll(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '04')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '04')
        ->get();
        return view('academic.academic-out-all', ['data' => $data]);
    }

    public function academicOutChange(Request $request)
    {
        if ($request->get('search1') !== null && $request->get('search2') !== null && $request->get('search3') !== null) {
            $search1 = $request->get('search1');
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
            
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status','=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', '01')
        ->orWhere('status','=', '04')
        ->get();
        return view('academic.academic-out-change', ['data' => $data]);
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
        $data = classroomModel::all();
        return view('academic.academic-class-room', ['data' => $data]);
    }

    public function classRoomAdd()
    {
        return view('academic.academic-class-room-add');
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
        $data = classroomModel::find($id);
        return view('academic.academic-class-room-edit', ['data' => $data]);
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
        $data = classmajorModel::all();
        return view('academic.academic-class-major', ['data' => $data]);
    }

    public function classMajorAdd()
    {
        return view('academic.academic-class-major-add');
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
        $data = classmajorModel::find($id);
        return view('academic.academic-class-major-edit', ['data' => $data]);
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
}
