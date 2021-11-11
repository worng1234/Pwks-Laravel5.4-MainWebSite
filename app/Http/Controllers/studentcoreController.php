<?php

namespace App\Http\Controllers;

use App\Models\studentcoreModel;
use App\Models\studentcoreModels;
use App\Models\addressstudentModel;
use App\Models\healtystudentModel;
use App\Models\parentstudentModel;
use App\Models\studentdetailModel;
use App\Models\talentstudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcoreController extends Controller
{
    public function index(){
        $data = studentcoreModels::all();
        return view('Studentcore.studentcore', compact('data'));
    }

    public function show($id){
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);
        return view('Studentcore.studentcorebyID', compact('studentcore','addressstudent','healtystudent','talentstudent','studentdetail','parentstudentModel'));
    }

    public function edit($id){
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);
        return view('Studentcore.fixprofilestudentcore', compact('studentcore','addressstudent','healtystudent','talentstudent','studentdetail','parentstudentModel'));
    }

    public function update(Request $request, $id){
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
        return redirect()->route('StudentCore.index')->with('success','Updated Successfully');
    }



    //Post
    public function addstudentcore(Request $request){

        $addressstudent = new addressstudentModel([
            "student_idcard_a" => $request->get('student_idcard_a'),
            "house_number" => $request->get('house_number'),
            "group" => $request->get('group'),
            "village" => $request->get('village'),
            "alley" => $request->get('alley'),
            "street" => $request->get('street'),
            "subdistrict" => $request->get('subdistrict'),
            "district" => $request->get('district'),
            "province" => $request->get('province'),
            "post" => $request->get('post'),
            "address_now" => $request->get('address_now'),
            "house_number_n" => $request->get('house_number_n'),
            "village_n" => $request->get('village_n'),
            "alley_n" => $request->get('alley_n'),
            "street_n" => $request->get('street_n'),
            "subdistrict_n" => $request->get('subdistrict_n'),
            "district_n" => $request->get('district_n'),
            "province_n" => $request->get('province_n'),
            "post_n" => $request->get('post_n'),
            "group_n" => $request->get('group_n'),
        ]);
        
        $healtystudent = new healtystudentModel([
            "student_idcard_h" => $request->get('student_idcard_h'),
            "weight" => $request->get('weight'),
            "height" => $request->get('height'),
            "disease" => $request->get('disease'),
            "medicine_lose" => $request->get('medicine_lose'),
            "medicine" => $request->get('medicine'),
            "remedy" => $request->get('remedy'),
            "glasses" => $request->get('glasses'),
            "danger" => $request->get('danger'),
            "unsound" => $request->get('unsound'),
            "defective" => $request->get('defective'),
            "sight_eye" => $request->get('sight_eye'),
        ]);

        $parentstudent = new parentstudentModel([
            "student_idcard_p" => $request->get('student_idcard_p'),
            "prename_f" => $request->get('prename_f'),
            "name_f" => $request->get('name_f'),
            "name_cen_f" => $request->get('name_cen_f'),
            "surname_f" => $request->get('surname_f'),
            "id_father" => $request->get('id_father'),
            "type_card_f" => $request->get('type_card_f'),
            "age_f" => $request->get('age_f'),
            "bloodgroup_f" => $request->get('bloodgroup_f'),
            "job_f" => $request->get('job_f'),
            "salary_f" => $request->get('salary_f'),
            "tel_f" => $request->get('tel_f'),
            "house_number_f" => $request->get('house_number_f'),
            "group_f" => $request->get('group_f'),
            "village_f" => $request->get('village_f'),
            "alley_f" => $request->get('alley_f'),
            "street_f" => $request->get('street_f'),
            "subdistrict_f" => $request->get('subdistrict_f'),
            "district_f" => $request->get('district_f'),
            "province_f" => $request->get('province_f'),
            "post_f" => $request->get('post_f'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
            "weight" => $request->get('weight'),
        ]);

        

    }
    

    //GetID
    public function studentcoreID($id)
    {
        return studentcoreModels::find($id);
    }

    public function addressstudentID($id)
    {
        return addressstudentModel::find($id);
    }

    public function healtystudentID($id)
    {
        return healtystudentModel::find($id);
    }

    public function parentstudentID($id)
    {
        return parentstudentModel::find($id);
    }

    public function studentdetailID($id)
    {
        return studentdetailModel::find($id);
    }

    public function talentstudentID($id)
    {
        return talentstudentModel::find($id);
    }

//Update
    public function studentcoreUpdate(Request $request, $id){
        $studentcore = studentcoreModels::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }

    public function addressstudentUpdate(Request $request, $id){
        $studentcore = addressstudentModel::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }

    public function healtystudentUpdate(Request $request, $id){
        $studentcore = healtystudentModel::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }

    public function parentstudentUpdate(Request $request, $id){
        $studentcore = parentstudentModel::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }

    public function studentdetailUpdate(Request $request, $id){
        $studentcore = studentdetailModel::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }

    public function talentstudentUpdate(Request $request, $id){
        $studentcore = talentstudentModel::find($id);
        $studentcore->update($request->all());
        return $studentcore;
    }
//////////////////////////////////
    public function joinstudentandbehavior(){
        $data = DB::table('student_information_core')
        ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
        ->select('student_information_core.id',
                 'student_information_core.student_id',
                 'student_information_core.prename',
                 'student_information_core.name',
                 'student_information_core.surname',
                 'behavior_student.title',
                 'behavior_student.behavior_date')
        ->get();
        return response()->json($data, 200);
    }

    public function joinstudentandbehaviorid($student_id){
        $data = DB::table('student_information_core')
        ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
        ->select('student_information_core.id',
                 'student_information_core.student_id',
                 'student_information_core.prename',
                 'student_information_core.name',
                 'student_information_core.surname',
                 'behavior_student.title',
                 'behavior_student.behavior_date')
        ->where('student_information_core.student_id',$student_id)
        ->get();
        return response()->json($data, 200);
    }
}
