<?php

namespace App\Http\Controllers;

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
        return redirect('StudentCore')->with('success','Updated Successfully');
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
            "prename_m" => $request->get('prename_m'),
            "name_m" => $request->get('name_m'),
            "name_cen_m" => $request->get('name_cen_m'),
            "surname_m" => $request->get('surname_m'),
            "id_mother" => $request->get('id_mother'),
            "type_card_m" => $request->get('type_card_m'),
            "age_m" => $request->get('age_m'),
            "bloodgroup_m" => $request->get('bloodgroup_m'),
            "job_m" => $request->get('job_m'),
            "salary_m" => $request->get('salary_m'),
            "tel_m" => $request->get('tel_m'),
            "house_number_m" => $request->get('house_number_m'),
            "group_m" => $request->get('group_m'),
            "village_m" => $request->get('village_m'),
            "alley_m" => $request->get('alley_m'),
            "street_m" => $request->get('street_m'),
            "subdistrict_m" => $request->get('subdistrict_m'),
            "district_m" => $request->get('district_m'),
            "province_m" => $request->get('province_m'),
            "post_m" => $request->get('post_m'),
            "parent" => $request->get('parent'),
            "prename_p" => $request->get('prename_p'),
            "name_p" => $request->get('name_p'),
            "name_cen_p" => $request->get('name_cen_p'),
            "surname_p" => $request->get('surname_p'),
            "id_parent" => $request->get('id_parent'),
            "type_card_p" => $request->get('type_card_p'),
            "age_p" => $request->get('age_p'),
            "bloodgroup_p" => $request->get('bloodgroup_p'),
            "job_p" => $request->get('job_p'),
            "salary_p" => $request->get('salary_p'),
            "tel_p" => $request->get('tel_p'),
            "house_number_p" => $request->get('house_number_p'),
            "group_p" => $request->get('group_p'),
            "village_p" => $request->get('village_p'),
            "alley_p" => $request->get('alley_p'),
            "street_p" => $request->get('street_p'),
            "subdistrict_p" => $request->get('subdistrict_p'),
            "district_p" => $request->get('district_p'),
            "province_p" => $request->get('province_p'),
            "post_p" => $request->get('post_p'),
            "status_parent" => $request->get('status_parent'),
            "student_parent" => $request->get('student_parent'),
            "no_blood" => $request->get('no_blood'),
            "no_brother" => $request->get('no_brother'),
            "no_son" => $request->get('no_son'),
            "no_sister" => $request->get('no_sister'),
            "no_son2" => $request->get('no_son2'),
            "no_parent" => $request->get('no_parent'),
            "no_study" => $request->get('no_study'),
            "no_job" => $request->get('no_job'),
            "no_house" => $request->get('no_house'),
            "student_job" => $request->get('student_job'),
            "student_money" => $request->get('student_money'),
            "parent_money" => $request->get('parent_money'),
            "parent_total" => $request->get('parent_total'),
            "parent_house" => $request->get('parent_house'),
            "job_study" => $request->get('job_study'),
            "job_detail" => $request->get('job_detail'),
            "total_study" => $request->get('total_study'),
        ]);

        $studentcore = new studentcoreModels([
            "student_id_card" => $request->get('student_id_card'),
            "studentID" => $request->get('studentID'),
            "student_major" => $request->get('student_major'),
            "student_class" => $request->get('student_class'),
            "student_room" => $request->get('student_room'),
            "student_number" => $request->get('student_number'),
            "prename" => $request->get('prename'),
            "prename_eng" => $request->get('prename_eng'),
            "name_eng" => $request->get('name_eng'),
            "name_cen_eng" => $request->get('name_cen_eng'),
            "surname_eng" => $request->get('surname_eng'),
            "birth_year" => $request->get('birth_year'),
            "birth_month" => $request->get('birth_month'),
            "birth_day" => $request->get('birth_day'),
            "gender" => $request->get('gender'),
            "bloodgroup" => $request->get('bloodgroup'),
            "religion" => $request->get('religion'),
            "origin" => $request->get('origin'),
            "nationality" => $request->get('nationality'),
            "language" => $request->get('language'),
            "tel_s" => $request->get('tel_s'),
            "email" => $request->get('email'),
            "fname" => $request->get('fname'),
            "name_cen" => $request->get('name_cen'),
            "surname" => $request->get('surname'),
            "nickname" => $request->get('nickname'),
        ]);

        $studentdetail = new studentdetailModel([
            "student_idcard_d" => $request->get('student_idcard_d'),
            "go_school" => $request->get('go_school'),
            "go_school_time" => $request->get('go_school_time'),
            "distance" => $request->get('distance'),
            "long_distance" => $request->get('long_distance'),
            "disabled" => $request->get('disabled'),
            "unfortuned" => $request->get('unfortuned'),
            "friend_drug" => $request->get('friend_drug'),
            "sell_drug" => $request->get('sell_drug'),
            "sexual" => $request->get('sexual'),
            "not_parent" => $request->get('not_parent'),
            "dark_travel" => $request->get('dark_travel'),
            "sexual_harrasment" => $request->get('sexual_harrasment'),
            "cute_world" => $request->get('cute_world'),
            "good_guy" => $request->get('good_guy'),
            "social_good" => $request->get('social_good'),
            "gadject" => $request->get('gadject'),
            "internet" => $request->get('internet'),
            "lack" => $request->get('lack'),
            "problem" => $request->get('problem'),
            "help" => $request->get('help'),
            "rich_man" => $request->get('rich_man'),
        ]);

        $talentstudent = new talentstudentModel([
            "student_idcard_t" => $request->get('student_idcard_t'),
            "final_school" => $request->get('final_school'),
            "final_class" => $request->get('final_class'),
            "avg_grade" => $request->get('avg_grade'),
            "f_subdistrict" => $request->get('f_subdistrict'),
            "f_district" => $request->get('f_district'),
            "f_province" => $request->get('f_province'),
            "like_subject1" => $request->get('like_subject1'),
            "like_subject2" => $request->get('like_subject2'),
            "like_subject3" => $request->get('like_subject3'),
            "like_subject4" => $request->get('like_subject4'),
            "unlike_subject1" => $request->get('unlike_subject1'),
            "unlike_subject2" => $request->get('unlike_subject2'),
            "unlike_subject3" => $request->get('unlike_subject3'),
            "unlike_subject4" => $request->get('unlike_subject4'),
            "talent" => $request->get('talent'),
            "dream_job" => $request->get('dream_job'),
            "because" => $request->get('because'),
            "read_write" => $request->get('read_write'),
            "understand" => $request->get('understand'),
        ]);
        
        $addressstudent->save();
        $healtystudent->save();
        $parentstudent->save();
        $studentcore->save();
        $studentdetail->save();
        $talentstudent->save();

        return redirect('StudentCore');
    }
    

    public function destroy($id){
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);

        $studentcore->delete();
        $addressstudent->delete();
        $healtystudent->delete();
        $talentstudent->delete();
        $studentdetail->delete();
        $parentstudentModel->delete();

        return redirect('StudentCore');
    }
    

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
