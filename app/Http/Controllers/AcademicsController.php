<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\studentcoreModels;

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
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-all', ['data' => $data]);

        }
        $data = DB::table('student_core')
        ->where('status', '=', 'กำลังศึกษาอยู่')
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
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->get();
            return view('academic.academic-class-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'กำลังศึกษาอยู่')
        ->get();
        return view('academic.academic-class-change', ['data' => $data]);
    }

    public function academicChangeStatusAndClass(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $change = studentcoreModels::find($id);
        $change->date = $date;
        $change->update($request->all());
        return redirect('/academic/class');
    }

    public function academicChangeFinal(Request $request, $id)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $change = studentcoreModels::find($id);
        $change->date = $date;
        $change->update($request->all());
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
                ->where('status', '=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-all', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'จบการศึกษา')
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
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'จบการศึกษา')
                ->get();
            return view('academic.academic-final-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'กำลังศึกษาอยู่')
        ->orWhere('status','=', 'จบการศึกษา')
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
                ->where('status', '=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-all', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'ย้ายสถานศึกษา')
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
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ย้ายสถานศึกษา')
                ->get();
            return view('academic.academic-move-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'กำลังศึกษาอยู่')
        ->orWhere('status','=', 'ย้ายสถานศึกษา')
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
                ->where('status', '=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);

        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-all', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'ออกกลางคัน')
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
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null && $request->get('search3') !== null) {
            $search2 = $request->get('search2');
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);

        } elseif ($request->get('search1') !== null) {
            $search1 = $request->get('search1');
            $data = DB::table('student_core')
                ->where('student_id', 'like', '%' . $search1 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);

        } elseif ($request->get('search2') !== null) {
            $search2 = $request->get('search2');
            $data = DB::table('student_core')
                ->where('student_class', 'like', '%' . $search2 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
            
        } elseif ($request->get('search3') !== null) {
            $search3 = $request->get('search3');
            $data = DB::table('student_core')
                ->where('student_room', 'like', '%' . $search3 . '%')
                ->where('status', '=', 'กำลังศึกษาอยู่')
                ->orWhere('status','=', 'ออกกลางคัน')
                ->get();
            return view('academic.academic-out-change', ['data' => $data]);
        }

        $data = DB::table('student_core')
        ->where('status', '=', 'กำลังศึกษาอยู่')
        ->orWhere('status','=', 'ออกกลางคัน')
        ->get();
        return view('academic.academic-out-change', ['data' => $data]);
    }

    
}
