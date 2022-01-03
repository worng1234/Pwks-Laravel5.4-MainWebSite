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
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '02')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->orWhere('status', '=', '02')
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
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '03')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->orWhere('status', '=', '03')
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
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', '01')
                ->orWhere('status', '=', '04')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->orWhere('status', '=', '04')
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

    //เอกสารรายงานตัวและโอนย้ายข้อมูล

    public function documentIndexM1(Request $request)
    {
        if ($request->get('search') !== null) {
            $search = $request->get('search');
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', 'like', '%' . $search . '%')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.document-index-m1', ['data' => $data]);
        }

        $data = DB::table('new_student_register_m1')
            ->where('status_tranfer', '=', '02')
            ->get();

        return view('academic.document-and-tranfer.document-index-m1', ['data' => $data]);
    }

    public function documentAllM1($id)
    {
        $data1 = newstudentm1Model::find($id);
        $findID = $data1->idNumber;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        return view('academic.document-and-tranfer.document-all-m1', [
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    public function tranferM1($id)
    {
        $data = newstudentm1Model::find($id);
        $data2 = classroomModel::all();
        return view('academic.document-and-tranfer.tranfer-m1', [
            'data' => $data,
            'data2' => $data2
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

        return redirect('/documentIndex/M1');
    }

    public function documentIndexM4(Request $request)
    {
        if ($request->get('search') !== null) {
            $search = $request->get('search');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search . '%')
                ->where('status_tranfer', '=', '02')
                ->get();

            return view('academic.document-and-tranfer.document-index-m4', ['data' => $data]);
        }

        $data = DB::table('new_student_register_m4')
            ->where('status_tranfer', '=', '02')
            ->get();

        return view('academic.document-and-tranfer.document-index-m4', ['data' => $data]);
    }

    public function documentAllM4($id)
    {
        $data1 = newstudentm4Model::find($id);
        $findID = $data1->id_number;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();


        return view('academic.document-and-tranfer.document-all-m4', [
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    public function tranferM4($id)
    {
        $data = newstudentm4Model::find($id);
        $data2 = classroomModel::all();
        $data3 = classmajorModel::all();
        return view('academic.document-and-tranfer.tranfer-m4', [
            'data' => $data,
            'data2' => $data2,
            'data3' => $data3
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

        return redirect('/documentIndex/M4');
    }

    //โอนย้ายข้อมูลแล้ว
    public function tranferM1All(Request $request)
    {
        if ($request->get('search') !== null) {
            $search = $request->get('search');
            $data = DB::table('new_student_register_m1')
                ->where('idNumber', 'like', '%' . $search . '%')
                ->where('status_tranfer', '=', '01')
                ->get();

            return view('academic.document-and-tranfer.tranfer-all-m1', ['data' => $data]);
        }

        $data = DB::table('new_student_register_m1')
            ->where('status_tranfer', '=', '01')
            ->get();

        return view('academic.document-and-tranfer.tranfer-all-m1', ['data' => $data]);
    }

    public function AllDocumentM1($id)
    {
        $data1 = newstudentm1Model::find($id);
        $findID = $data1->idNumber;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        return view('academic.document-and-tranfer.all-document-tranfer-m1', [
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    public function tranferM4All(Request $request)
    {
        if ($request->get('search') !== null) {
            $search = $request->get('search');
            $data = DB::table('new_student_register_m4')
                ->where('id_number', 'like', '%' . $search . '%')
                ->where('status_tranfer', '=', '01')
                ->get();

            return view('academic.document-and-tranfer.tranfer-all-m4', ['data' => $data]);
        }

        $data = DB::table('new_student_register_m4')
            ->where('status_tranfer', '=', '01')
            ->get();

        return view('academic.document-and-tranfer.tranfer-all-m4', ['data' => $data]);
    }

    public function AllDocumentM4($id)
    {
        $data1 = newstudentm4Model::find($id);
        $findID = $data1->id_number;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->first();

        return view('academic.document-and-tranfer.all-document-tranfer-m4', [
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    //ออกเอกสาร

    public function ReportStudentAll(Request $request)
    {

        if ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', ['data' => $data]);
        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', ['data' => $data]);
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', ['data' => $data]);
        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->get();

            return view('academic.academic-report.academic-report-student-all', ['data' => $data]);
        }

        $data = studentcoreModels::all();

        return view('academic.academic-report.academic-report-student-all', [
            'data' => $data,
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
        //ม.1/1
        $m1_1_m = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '1')
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_1_m_all = count($m1_1_m);

        $m1_1_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '1')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_2_m_all = count($m1_2_m);

        $m1_2_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '2')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_3_m_all = count($m1_3_m);

        $m1_3_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '3')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_4_m_all = count($m1_4_m);

        $m1_4_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '4')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_5_m_all = count($m1_5_m);

        $m1_5_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '5')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_6_m_all = count($m1_6_m);

        $m1_6_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '6')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_7_m_all = count($m1_7_m);

        $m1_7_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '7')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_8_m_all = count($m1_8_m);

        $m1_8_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('student_room', '=', '8')
        ->where('gender' ,'=', 'หญิง')
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
        ->where('gender' ,'=', 'ชาย')
        ->first();
        $m1_m_all = count($m1_m);

        $m1_fm = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->where('gender' ,'=', 'หญิง')
        ->first();
        $m1_fm_all = count($m1_fm);

        $m1_all = DB::table('student_core')
        ->where('student_class', '=', '1')
        ->first();
        $m1_all_sum = count($m1_all);

        return view('academic.academic-report.academic-report-stat-student',[
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
        ]);
    }
}
