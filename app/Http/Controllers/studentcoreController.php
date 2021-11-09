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
    public function address(Request $request){

        $post = new addressstudentModel();
        $post->student_idcard_a = $request['student_idcard_a'];
        $post->house_number = $request['house_number'];
        $post->group = $request['group'];
        $post->village = $request['village'];
        $post->alley = $request['alley'];
        $post->street = $request['street'];
        $post->subdistrict = $request['subdistrict'];
        $post->district = $request['district'];
        $post->province = $request['province'];
        $post->post = $request['post'];
        $post->address_now = $request['address_now'];
        $post->house_number_n = $request['house_number_n'];
        $post->village_n = $request['village_n'];
        $post->alley_n = $request['alley_n'];
        $post->street_n = $request['street_n'];
        $post->subdistrict_n = $request['subdistrict_n'];
        $post->district_n = $request['district_n'];
        $post->province_n = $request['province_n'];
        $post->post_n = $request['post_n'];
        $post->group_n = $request['group_n'];

        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }

    }
    public function healty(Request $request){

        $post = new healtystudentModel();
        $post->student_idcard_h = $request['student_idcard_h'];
        $post->weight = $request['weight'];
        $post->height = $request['height'];
        $post->disease = $request['disease'];
        $post->medicine_lose = $request['medicine_lose'];
        $post->medicine = $request['medicine'];
        $post->remedy = $request['remedy'];
        $post->sight_eye = $request['sight_eye'];
        $post->glasses = $request['glasses'];
        $post->danger = $request['danger'];
        $post->unsound = $request['unsound'];
        $post->defective = $request['defective'];

        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }
    }

    public function parent(Request $request){

        $post = new parentstudentModel();
        $post->student_idcard_p = $request['student_idcard_p'];
        $post->prename_f = $request['prename_f'];
        $post->name_f = $request['name_f'];
        $post->name_cen_f = $request['name_cen_f'];
        $post->surname_f = $request['surname_f'];
        $post->id_father = $request['id_father'];
        $post->type_card_f = $request['type_card_f'];
        $post->age_f = $request['age_f'];
        $post->bloodgroup_f = $request['bloodgroup_f'];
        $post->job_f = $request['job_f'];
        $post->salary_f = $request['salary_f'];
        $post->tel_f = $request['tel_f'];
        $post->house_number_f = $request['house_number_f'];
        $post->group_f = $request['group_f'];
        $post->village_f = $request['village_f'];
        $post->alley_f = $request['alley_f'];
        $post->street_f = $request['street_f'];
        $post->subdistrict_f = $request['subdistrict_f'];
        $post->district_f = $request['district_f'];
        $post->province_f = $request['province_f'];
        $post->post_f = $request['post_f'];
        $post->prename_m = $request['prename_m'];
        $post->name_m = $request['name_m'];
        $post->name_cen_m = $request['name_cen_m'];
        $post->surname_m = $request['surname_m'];
        $post->id_mother = $request['id_mother'];
        $post->type_card_m = $request['type_card_m'];
        $post->age_m = $request['age_m'];
        $post->bloodgroup_m = $request['bloodgroup_m'];
        $post->job_m = $request['job_m'];
        $post->salary_m = $request['salary_m'];
        $post->tel_m = $request['tel_m'];
        $post->house_number_m = $request['house_number_m'];
        $post->group_m = $request['group_m'];
        $post->village_m = $request['village_m'];
        $post->alley_m = $request['alley_m'];
        $post->street_m = $request['street_m'];
        $post->subdistrict_m = $request['subdistrict_m'];
        $post->district_m = $request['district_m'];
        $post->province_m = $request['province_m'];
        $post->post_m = $request['post_m'];
        $post->parent = $request['parent'];
        $post->prename_p = $request['prename_p'];
        $post->name_p = $request['name_p'];
        $post->name_cen_p = $request['name_cen_p'];
        $post->surname_p = $request['surname_p'];
        $post->id_parent = $request['id_parent'];
        $post->type_card_p = $request['type_card_p'];
        $post->age_p = $request['age_p'];
        $post->bloodgroup_p = $request['bloodgroup_p'];
        $post->job_p = $request['job_p'];
        $post->salary_p = $request['salary_p'];
        $post->tel_p = $request['tel_p'];
        $post->house_number_p = $request['house_number_p'];
        $post->group_p = $request['group_p'];
        $post->village_p = $request['village_p'];
        $post->alley_p = $request['alley_p'];
        $post->street_p = $request['street_p'];
        $post->subdistrict_p = $request['subdistrict_p'];
        $post->district_p = $request['district_p'];
        $post->province_p = $request['province_p'];
        $post->post_p = $request['post_p'];
        $post->status_parent = $request['status_parent'];
        $post->student_parent = $request['student_parent'];
        $post->no_blood = $request['no_blood'];
        $post->no_brother = $request['no_brother'];
        $post->no_son = $request['no_son'];
        $post->no_sister = $request['no_sister'];
        $post->no_son2 = $request['no_son2'];
        $post->no_parent = $request['no_parent'];
        $post->no_study = $request['no_study'];
        $post->no_job = $request['no_job'];
        $post->no_house = $request['no_house'];
        $post->student_job = $request['student_job'];
        $post->student_money = $request['student_money'];
        $post->parent_money = $request['parent_money'];
        $post->parent_total = $request['parent_total'];
        $post->parent_house = $request['parent_house'];
        $post->job_study = $request['job_study'];
        $post->job_detail = $request['job_detail'];
        $post->total_study = $request['total_study'];

        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }
    }

    public function studentdetail(Request $request){

        $post = new studentdetailModel();
        $post->student_idcard_d = $request['student_idcard_d'];
        $post->go_school = $request['go_school'];
        $post->go_school_time = $request['go_school_time'];
        $post->distance = $request['distance'];
        $post->long_distance = $request['long_distance'];
        $post->gadject = $request['gadject'];
        $post->internet = $request['internet'];
        $post->disabled = $request['disabled'];
        $post->unfortuned = $request['unfortuned'];
        $post->lack = $request['lack'];
        $post->friend_drug = $request['friend_drug'];
        $post->sell_drug = $request['sell_drug'];
        $post->sexual = $request['sexual'];
        $post->not_parent = $request['not_parent'];
        $post->dark_travel = $request['dark_travel'];
        $post->sexual_harrasment = $request['sexual_harrasment'];
        $post->cute_world = $request['cute_world'];
        $post->rich_man = $request['rich_man'];
        $post->good_guy = $request['good_guy'];
        $post->social_good = $request['social_good'];
        $post->problem = $request['problem'];
        $post->help = $request['help'];

        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }

    }
    public function talent(Request $request){

        $post = new talentstudentModel();
        $post->student_idcard_t = $request['student_idcard_t'];
        $post->final_school = $request['final_school'];
        $post->final_class = $request['final_class'];
        $post->avg_grade = $request['avg_grade'];
        $post->f_subdistrict = $request['f_subdistrict'];
        $post->f_district = $request['f_district'];
        $post->f_province = $request['f_province'];
        $post->like_subject1 = $request['like_subject1'];
        $post->like_subject2 = $request['like_subject2'];
        $post->like_subject3 = $request['like_subject3'];
        $post->like_subject4 = $request['like_subject4'];
        $post->unlike_subject1 = $request['unlike_subject1'];
        $post->unlike_subject2 = $request['unlike_subject2'];
        $post->unlike_subject3 = $request['unlike_subject3'];
        $post->unlike_subject4 = $request['unlike_subject4'];
        $post->talent = $request['talent'];
        $post->dream_job = $request['dream_job'];
        $post->because = $request['because'];
        $post->read_write = $request['read_write'];
        $post->understand = $request['understand'];

        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }
    }

    public function studentcore(Request $request){

        $post = new studentcoreModels();
        $post->studentID = $request['studentID'];
        $post->student_id_card = $request['student_id_card'];
        $post->student_major = $request['student_major'];
        $post->student_class = $request['student_class'];
        $post->student_room = $request['student_room'];
        $post->prename = $request['prename'];
        $post->prename_eng = $request['prename_eng'];
        $post->name_eng = $request['name_eng'];
        $post->name_cen_eng = $request['name_cen_eng'];
        $post->surname_eng = $request['surname_eng'];
        $post->birth_year = $request['birth_year'];
        $post->birth_month = $request['birth_month'];
        $post->birth_day = $request['birth_day'];
        $post->nickname = $request['nickname'];
        $post->gender = $request['gender'];
        $post->bloodgroup = $request['bloodgroup'];
        $post->religion = $request['religion'];
        $post->origin = $request['origin'];
        $post->nationality = $request['nationality'];
        $post->language = $request['language'];
        $post->tel_s = $request['tel_s'];
        $post->email = $request['email'];
        $post->fname = $request['fname'];
        $post->name_cen = $request['name_cen'];
        $post->surname = $request['surname'];


        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }
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
