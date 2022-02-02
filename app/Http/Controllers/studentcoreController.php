<?php

namespace App\Http\Controllers;

use App\Models\studentcoreModels;
use App\Models\addressstudentModel;
use App\Models\healtystudentModel;
use App\Models\parentstudentModel;
use App\Models\studentdetailModel;
use App\Models\talentstudentModel;
use App\Models\classroomModel;
use App\Models\classmajorModel;
use App\Models\photostudentModel;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcoreController extends Controller
{
    public function index(Request $request)
    {
        
        $data = DB::table('student_core')
            ->where('status', '=', '01')
            ->get();
        $school_year = DB::table('school_year')
            ->first();
        $class_room = DB::table('class_room')
            ->get();

        return view('Studentcore.studentcore', [
            'data' => $data,
            'school_year' => $school_year,
            'class_room' => $class_room
        ]);
    }

    public function create()
    {
        $classroom = classroomModel::all();
        $classmajor = classmajorModel::all();
        return view('Studentcore.student.student-core', [
            'classroom' => $classroom,
            'classmajor' => $classmajor,
        ]);
    }

    public function search(Request $request)
    {

        
    }

    public function show($id)
    {
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);
        return view('Studentcore.studentcorebyID', compact('studentcore', 'addressstudent', 'healtystudent', 'talentstudent', 'studentdetail', 'parentstudentModel'));
    }

    public function edit($id)
    {
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);
        return view('Studentcore.fixprofilestudentcore', compact('studentcore', 'addressstudent', 'healtystudent', 'talentstudent', 'studentdetail', 'parentstudentModel'));
    }

    public function update(Request $request, $id)
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
        return redirect('StudentCore')->with('success', 'Updated Successfully');
    }



    //Post
    public function addstudentcore(Request $request)
    {

        $data = DB::table('student_core')
            ->where('student_id_card', '=', $request->get('student_id_card'))
            ->first();


        if ($data == NULL) {



            if (
                $request->hasFile('profile_img') && $request->hasFile('id_card_student')
                && $request->hasFile('house_student')  &&
                $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
                && $request->hasFile('house_father')  && $request->hasFile('house_mother')
                && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
                && $request->hasFile('birth_certificate')
            ) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
                $compPic4 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic4);

                $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
                $compPic5 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic5);

                $house_father = $request->file('house_father')->getClientOriginalExtension();
                $compPic6 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic6);

                $house_mother = $request->file('house_mother')->getClientOriginalExtension();
                $compPic7 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic7);

                $front_grade = $request->file('front_grade')->getClientOriginalExtension();
                $compPic8 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic8);

                $back_grade = $request->file('back_grade')->getClientOriginalExtension();
                $compPic9 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic9);

                $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
                $compPic10 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic10);

                $pic = new photostudentModel([
                    "student_idcard" => $request->get('student_id_card'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "id_card_father" => $compPic4,
                    "id_card_mother" => $compPic5,
                    "house_father" => $compPic6,
                    "house_mother" => $compPic7,
                    "front_grade" => $compPic8,
                    "back_grade" => $compPic9,
                    "birth_certificate" => $compPic10,
                ]);

                $pic->save();
            } elseif (
                $request->hasFile('profile_img') && $request->hasFile('id_card_student')
                && $request->hasFile('house_student')  &&
                $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
                && $request->hasFile('house_father')  && $request->hasFile('house_mother')
                && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
                && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
            ) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
                $compPic4 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic4);

                $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
                $compPic5 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic5);

                $house_father = $request->file('house_father')->getClientOriginalExtension();
                $compPic6 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic6);

                $house_mother = $request->file('house_mother')->getClientOriginalExtension();
                $compPic7 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic7);

                $front_grade = $request->file('front_grade')->getClientOriginalExtension();
                $compPic8 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic8);

                $back_grade = $request->file('back_grade')->getClientOriginalExtension();
                $compPic9 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic9);

                $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
                $compPic10 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic10);

                $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
                $compPic11 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic11);


                $pic = new photostudentModel([
                    "student_idcard" => $request->get('student_id_card'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "id_card_father" => $compPic4,
                    "id_card_mother" => $compPic5,
                    "house_father" => $compPic6,
                    "house_mother" => $compPic7,
                    "front_grade" => $compPic8,
                    "back_grade" => $compPic9,
                    "birth_certificate" => $compPic10,
                    "disability_certificate" => $compPic11,
                ]);

                $pic->save();
            } elseif (
                $request->hasFile('profile_img') && $request->hasFile('id_card_student')
                && $request->hasFile('house_student')  &&
                $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
                && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
                && $request->hasFile('birth_certificate')
            ) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
                $compPic4 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic4);

                $house_parent = $request->file('house_parent')->getClientOriginalExtension();
                $compPic5 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic5);

                $front_grade = $request->file('front_grade')->getClientOriginalExtension();
                $compPic6 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic6);

                $back_grade = $request->file('back_grade')->getClientOriginalExtension();
                $compPic7 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic7);

                $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
                $compPic8 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic8);

                $pic = new photostudentModel([
                    "student_idcard" => $request->get('student_id_card'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "id_card_parent" => $compPic4,
                    "house_parent" => $compPic5,
                    "front_grade" => $compPic6,
                    "back_grade" => $compPic7,
                    "birth_certificate" => $compPic8,

                ]);

                $pic->save();
            } elseif (
                $request->hasFile('profile_img') && $request->hasFile('id_card_student')
                && $request->hasFile('house_student')  &&
                $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
                && $request->hasFile('front_grade') && $request->hasFile('back_grade')
                && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
            ) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
                $compPic4 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic4);

                $house_parent = $request->file('house_parent')->getClientOriginalExtension();
                $compPic5 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic5);

                $front_grade = $request->file('front_grade')->getClientOriginalExtension();
                $compPic6 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic6);

                $back_grade = $request->file('back_grade')->getClientOriginalExtension();
                $compPic7 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic7);

                $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
                $compPic8 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic8);

                $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
                $compPic9 = str_replace(' ', '_', $request->student_id_card);
                $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic9);

                $pic = new photostudentModel([
                    "student_idcard" => $request->get('student_id_card'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "id_card_parent" => $compPic4,
                    "house_parent" => $compPic5,
                    "front_grade" => $compPic6,
                    "back_grade" => $compPic7,
                    "birth_certificate" => $compPic8,
                    "disability_certificate" => $compPic9,

                ]);

                $pic->save();
            }

            $addressstudent = new addressstudentModel([
                "student_idcard_a" => $request->get('student_id_card'),
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
                "student_idcard_h" => $request->get('student_id_card'),
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
                "student_idcard_p" => $request->get('student_id_card'),
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
                "relationship_parent" => $request->get('relationship_parent'),
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
                "student_id" => $request->get('student_id'),
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
                "score" => $request->get('score'),
                "status" => $request->get('status'),
            ]);

            $studentdetail = new studentdetailModel([
                "student_idcard_d" => $request->get('student_id_card'),
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
                "student_idcard_t" => $request->get('student_id_card'),
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

            $studentlogin = new Student([
                "student_id" => $request->get('student_id'),
                "prename" => $request->get('prename'),
                "fname" => $request->get('fname'),
                "name_cen" => $request->get('name_cen'),
                "surname" => $request->get('surname'),
                "student_class" => $request->get('student_class'),
                "student_room" => $request->get('student_room'),
                "username" => $request->get('student_id_card'),
                "password" => bcrypt($request->get('student_id')),
            ]);

            $addressstudent->save();
            $healtystudent->save();
            $parentstudent->save();
            $studentcore->save();
            $studentdetail->save();
            $talentstudent->save();
            $studentlogin->save();

            return redirect('/success/Addstudentcore');
        } else {
            return redirect('/Unsuccess/Addstudentcore');
        }
    }


    public function destroy($id)
    {
        $studentcore = studentcoreModels::find($id);
        $addressstudent = addressstudentModel::find($id);
        $healtystudent = healtystudentModel::find($id);
        $talentstudent = talentstudentModel::find($id);
        $studentdetail = studentdetailModel::find($id);
        $parentstudentModel = parentstudentModel::find($id);

        $findIdCard = $studentcore->student_id_card;

        $status_pic = DB::table('status_pic')
            ->where('student_idcard', '=', $findIdCard);

        $photo_student = DB::table('photo_student')
            ->where('student_idcard', '=', $findIdCard);

        $studentcore->delete();
        $addressstudent->delete();
        $healtystudent->delete();
        $talentstudent->delete();
        $studentdetail->delete();
        $parentstudentModel->delete();
        $status_pic->delete();
        $photo_student->delete();

        return redirect('StudentCore');
    }


    public function joinstudentandbehavior()
    {
        $data = DB::table('student_information_core')
            ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
            ->select(
                'student_information_core.id',
                'student_information_core.student_id',
                'student_information_core.prename',
                'student_information_core.name',
                'student_information_core.surname',
                'behavior_student.title',
                'behavior_student.behavior_date'
            )
            ->get();
        return response()->json($data, 200);
    }

    public function joinstudentandbehaviorid($student_id)
    {
        $data = DB::table('student_information_core')
            ->join('behavior_student', 'student_information_core.student_id', '=', 'behavior_student.B_student_id')
            ->select(
                'student_information_core.id',
                'student_information_core.student_id',
                'student_information_core.prename',
                'student_information_core.name',
                'student_information_core.surname',
                'behavior_student.title',
                'behavior_student.behavior_date'
            )
            ->where('student_information_core.student_id', $student_id)
            ->get();
        return response()->json($data, 200);
    }

    public function showStudentByID($id)
    {
    }

    public function showStudentDocument($id)
    {
        $data = Student::find($id);
        $school_year = DB::table('school_year')
            ->first();

        return view('Studentcore.student.student-document-edit', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    public function editStudentDocument(Request $request, $id)
    {
        $data = Student::find($id);
        $findID = $data->username;

        if (
            $request->hasFile('profile_img') && $request->hasFile('id_card_student')
            && $request->hasFile('house_student')  && $request->hasFile('student_submit')
            && $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic11 = str_replace(' ', '_', $request->get('username') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic11);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic12 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic12);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic13 = str_replace(' ', '_', $request->get('username') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic13);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic14 = str_replace(' ', '_', $request->get('username') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic14);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "id_card_mother" => $compPic2,
                    "house_father" => $compPic3,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                    "disability_certificate" => $compPic10,
                    "profile_img" => $compPic11,
                    "id_card_student" => $compPic12,
                    "house_student" => $compPic13,
                    "student_submit" => $compPic14,
                ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "id_card_mother" => $compPic2,
                    "house_father" => $compPic3,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "id_card_mother" => $compPic2,
                    "house_father" => $compPic3,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
        ) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic8);


            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "id_card_mother" => $compPic2,
                    "house_father" => $compPic3,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic8,
                ]);
        } elseif (
            $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_parent" => $compPic1,
                    "house_parent" => $compPic2,
                    "front_grade" => $compPic3,
                    "back_grade" => $compPic4,
                    "birth_certificate" => $compPic5,
                ]);
        } elseif (
            $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
            && $request->hasFile('front_grade') && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
        ) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic6);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_parent" => $compPic1,
                    "house_parent" => $compPic2,
                    "front_grade" => $compPic3,
                    "back_grade" => $compPic4,
                    "birth_certificate" => $compPic5,
                    "disability_certificate" => $compPic6,
                ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                    "disability_certificate" => $compPic10,
                ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {


            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                    "disability_certificate" => $compPic10,
                ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic10,
                ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('disability_certificate')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic10,
                ]);
        } elseif (
            $request->hasFile('id_card_father') && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);
        } elseif ($request->hasFile('front_grade') && $request->hasFile('back_grade')) {

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic1);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic2);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "front_grade" => $compPic1,
                    "back_grade" => $compPic2,
                ]);
        } elseif ($request->hasFile('id_card_father')) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_father" => $compPic1
                ]);
        } elseif ($request->hasFile('id_card_mother')) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_mother" => $compPic1
                ]);
        } elseif ($request->hasFile('house_father')) {

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "house_father" => $compPic1
                ]);
        } elseif ($request->hasFile('house_mother')) {

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "house_mother" => $compPic1
                ]);
        } elseif ($request->hasFile('front_grade')) {

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "front_grade" => $compPic1
                ]);
        } elseif ($request->hasFile('back_grade')) {

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "back_grade" => $compPic1
                ]);
        } elseif ($request->hasFile('birth_certificate')) {

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "birth_certificate" => $compPic1
                ]);
        } elseif ($request->hasFile('id_card_parent')) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_parent" => $compPic1
                ]);
        } elseif ($request->hasFile('house_parent')) {

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "house_parent" => $compPic1
                ]);
        } elseif ($request->hasFile('disability_certificate')) {

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "disability_certificate" => $compPic1
                ]);
        } elseif ($request->hasFile('profile_img')) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "profile_img" => $compPic1
                ]);
        } elseif ($request->hasFile('id_card_student')) {

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "id_card_student" => $compPic1
                ]);
        } elseif ($request->hasFile('house_student')) {

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "house_student" => $compPic1
                ]);
        } elseif ($request->hasFile('student_submit')) {

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('username') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('username'))
                ->update([
                    "student_submit" => $compPic1
                ]);
        }



        return redirect('/DocumentStudent/{$data}');
    }
}
