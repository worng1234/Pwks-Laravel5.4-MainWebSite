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
        return view('student');
    }

    public function showStudentByID($id)
    {
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

        return view('Studentcore.student.student-info-id', ['data' => $data]);
    }

    public function editStudentByID($id)
    {
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
        $data1 = Student::find($id);
        $findID = $data1->username;

        $data2 = DB::table('photo_student')
        ->where('student_idcard', '=', $findID)
        ->first();

        return view('Studentcore.student.student-document', [
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
