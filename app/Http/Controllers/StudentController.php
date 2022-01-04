<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Models\studentcoreModels;
use App\Models\addressstudentModel;
use App\Models\healtystudentModel;
use App\Models\parentstudentModel;
use App\Models\studentdetailModel;
use App\Models\talentstudentModel;
use App\Models\classmajorModel;


class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
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

        return view('student', [
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

    public function showStudentByID($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $data1 = Student::find($id);
        $studentcore = $data1->username;

        $data = DB::table('student_core')
            ->join('address_student', 'address_student.student_idcard_a', '=', 'student_core.student_id_card')
            ->join('healty_student', 'healty_student.student_idcard_h', '=', 'address_student.student_idcard_a')
            ->join('parent_student', 'parent_student.student_idcard_p', '=', 'healty_student.student_idcard_h')
            ->join('student_detail', 'student_detail.student_idcard_d', '=', 'healty_student.student_idcard_h')
            ->join('talent_student', 'talent_student.student_idcard_t', '=', 'student_detail.student_idcard_d')
            ->where('student_core.student_id_card', '=', $studentcore)
            ->where('address_student.student_idcard_a', '=', $studentcore)
            ->where('healty_student.student_idcard_h', '=', $studentcore)
            ->where('parent_student.student_idcard_p', '=', $studentcore)
            ->where('student_detail.student_idcard_d', '=', $studentcore)
            ->where('talent_student.student_idcard_t', '=', $studentcore)
            ->first();

        return view('Studentcore.student.student-info-id', [
            'data' => $data,
            //ปีการศึกษา
            'school_year' => $school_year,
        ]);
    }

    public function editStudentByID($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $classmajor = classmajorModel::all();

        $data1 = Student::find($id);
        $studentcore = $data1->username;

        $data = DB::table('student_core')
            ->join('address_student', 'address_student.student_idcard_a', '=', 'student_core.student_id_card')
            ->join('healty_student', 'healty_student.student_idcard_h', '=', 'address_student.student_idcard_a')
            ->join('parent_student', 'parent_student.student_idcard_p', '=', 'healty_student.student_idcard_h')
            ->join('student_detail', 'student_detail.student_idcard_d', '=', 'healty_student.student_idcard_h')
            ->join('talent_student', 'talent_student.student_idcard_t', '=', 'student_detail.student_idcard_d')
            ->where('student_core.student_id_card', '=', $studentcore)
            ->where('address_student.student_idcard_a', '=', $studentcore)
            ->where('healty_student.student_idcard_h', '=', $studentcore)
            ->where('parent_student.student_idcard_p', '=', $studentcore)
            ->where('student_detail.student_idcard_d', '=', $studentcore)
            ->where('talent_student.student_idcard_t', '=', $studentcore)
            ->first();

        return view('Studentcore.student.student-info-edit', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data' => $data,
            'classmajor' => $classmajor,
        ]);
    }

    public function upStudentByID(Request $request, $id)
    {
        
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);

        $studentcore->update($request->all());
        $addressstudent->update($request->all());
        $healtystudent->update($request->all());
        $talentstudent->update($request->all());
        $studentdetail->update($request->all());
        $parentstudentModel->update($request->all());
        

        return redirect('/student');
    }

    public function studentIncrease($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $classmajor = classmajorModel::all();

        $data1 = Student::find($id);
        $studentcore = $data1->username;

        $data = DB::table('student_core')
            ->join('address_student', 'address_student.student_idcard_a', '=', 'student_core.student_id_card')
            ->join('healty_student', 'healty_student.student_idcard_h', '=', 'address_student.student_idcard_a')
            ->join('parent_student', 'parent_student.student_idcard_p', '=', 'healty_student.student_idcard_h')
            ->join('student_detail', 'student_detail.student_idcard_d', '=', 'healty_student.student_idcard_h')
            ->join('talent_student', 'talent_student.student_idcard_t', '=', 'student_detail.student_idcard_d')
            ->where('student_core.student_id_card', '=', $studentcore)
            ->where('address_student.student_idcard_a', '=', $studentcore)
            ->where('healty_student.student_idcard_h', '=', $studentcore)
            ->where('parent_student.student_idcard_p', '=', $studentcore)
            ->where('student_detail.student_idcard_d', '=', $studentcore)
            ->where('talent_student.student_idcard_t', '=', $studentcore)
            ->first();

        return view('Studentcore.student.student-increase', [
            //ปีการศึกษา
            'school_year' => $school_year,

            'data' => $data,
            'classmajor' => $classmajor,
        ]);
    }

    public function increaseStudentAdd(Request $request, $id)
    {
        
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);

        $studentcore->update($request->all());
        $addressstudent->update($request->all());
        $healtystudent->update($request->all());
        $talentstudent->update($request->all());
        $studentdetail->update($request->all());
        $parentstudentModel->update($request->all());
        

        return redirect('/student');
    }

    //เอกสารประจำตัว
    public function DocumentStudentAll($id)
    {
        //ปีการศึกษา
        $school_year = DB::table('school_year')
            ->first();

        $data1 = Student::find($id);
        $findID = $data1->username;

        $data2 = DB::table('photo_student')
        ->where('student_idcard', '=', $findID)
        ->first();

        return view('Studentcore.student.student-document', [
            //ปีการศึกษา
            'school_year' => $school_year,
            
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    //รูปภาพทั้งหมด
    public function profileStudent($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
        ->where('student_idcard', '=', $pic)
        ->first();
        return view('Newstudent.photo-student.photoM4.profile-student', ['data' => $data]);
    }

    public function IdCardStudent($id)
    {
        $data1 = Student::find($id);
        
        $pic = $data1->username;
        $data = DB::table('photo_student')
        ->where('student_idcard', '=', $pic)
        ->first();
        return view('Newstudent.photo-student.photoM4.id-card-student', ['data' => $data]);
    }

    public function HouseStudent($id)
    {
        $data1 = Student::find($id);
        
        $pic = $data1->username;
        $data = DB::table('photo_student')
        ->where('student_idcard', '=', $pic)
        ->first();
        return view('Newstudent.photo-student.photoM4.house-student', ['data' => $data]);
    }

    public function SubmitStudent($id)
    {
        $data1 = Student::find($id);
        
        $pic = $data1->username;
        $data = DB::table('photo_student')
        ->where('student_idcard', '=', $pic)
        ->first();
        return view('Newstudent.photo-student.photoM4.student-submit', ['data' => $data]);
    }

    public function IdCardFather($id)
    {
        $data1 = Student::find($id);
        
        $pic = $data1->username;
        $data = DB::table('photo_student')
        ->where('student_idcard', '=', $pic)
        ->first();
        return view('Newstudent.photo-student.photoM4.id-card-father', ['data' => $data]);
    }

    public function IdCardMother($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.id-card-mother', ['data' => $data]);
    }

    public function IdCardParent($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.id-card-parent', ['data' => $data]);
    }

    public function HouseFather($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-father', ['data' => $data]);
    }

    public function HouseMother($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-mother', ['data' => $data]);
    }

    public function HouseParent($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-parent', ['data' => $data]);
    }

    public function FrontGrade($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.front-grade', ['data' => $data]);
    }

    public function BackGrade($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.back-grade', ['data' => $data]);
    }

    public function BirthCertificate($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.birth-certificate', ['data' => $data]);
    }

    public function DisabilityCertificate($id)
    {
        $data1 = Student::find($id);

        $pic = $data1->username;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.disability-certificate', ['data' => $data]);
    }
}
