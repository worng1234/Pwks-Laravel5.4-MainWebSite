<?php

namespace App\Http\Controllers;

use App\Models\newstudentm4Model;
use App\Models\photostudentModel;
use App\Models\statuspicModel;
use App\Models\classmajorModel;
use App\Models\registeryearModel;
use App\RegisterloginM4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newstudentm4Controller extends Controller
{
    public function edit($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $newstudentm4Model = newstudentm4Model::findOrFail($id);

        $m4major1 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name1)
            ->first();
        
        $m4major2 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name2)
            ->first();

        $m4major3 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name3)
            ->first();

        $m4major4 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name4)
            ->first();

        $m4major5 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name5)
            ->first();

        $m4major6 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name6)
            ->first();

        $m4major7 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name7)
            ->first();
            
        return view('Newstudent.fixprofilenewstudentm4', [
            'newstudentm4Model' => $newstudentm4Model,
            'school_year' => $school_year,
            'm4major1' => $m4major1,
            'm4major2' => $m4major2,
            'm4major3' => $m4major3,
            'm4major4' => $m4major4,
            'm4major5' => $m4major5,
            'm4major6' => $m4major6,
            'm4major7' => $m4major7,
        ]);
    }

    public function index()
    {
        $school_year = DB::table('school_year')
            ->first();

        $datas =  $datas = DB::table('new_student_register_m4')
            ->where('status_picall', '=', '02')
            ->get();
        return view('Newstudent.unsubmit-object.unsubmit-object-m4', [
            'datas' => $datas,
            'school_year' => $school_year,
        ]);
    }

    public function submitObjectM4()
    {
        $school_year = DB::table('school_year')
            ->first();

        $datas =  $datas = DB::table('new_student_register_m4')
            ->where('status_picall', '=', '01')
            ->get();
        return view('Newstudent.submit-object.submit-object-m4', [
            'datas' => $datas,
            'school_year' => $school_year,
        ]);
    }

    public function create()
    {
        $data = classmajorModel::all();
        return view('Newstudent.register-student.newstudentm4', ['data' => $data]);
    }

    public function editnewstudentm4($id)
    {
        

        $newstudentm4Model = newstudentm4Model::findOrFail($id);

        $m4major1 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name1)
            ->first();
        
        $m4major2 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name2)
            ->first();

        $m4major3 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name3)
            ->first();

        $m4major4 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name4)
            ->first();

        $m4major5 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name5)
            ->first();

        $m4major6 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name6)
            ->first();

        $m4major7 = DB::table('class_major_m4')
            ->where('class_id', '=', $newstudentm4Model->major_name7)
            ->first();

        return view('Newstudent.Edit-Newstudent.editprofilenewstudentm4', [
            'newstudentm4Model' => $newstudentm4Model,
            'm4major1' => $m4major1,
            'm4major2' => $m4major2,
            'm4major3' => $m4major3,
            'm4major4' => $m4major4,
            'm4major5' => $m4major5,
            'm4major6' => $m4major6,
            'm4major7' => $m4major7,
        ]);
    }

    //ส่งเอกสารรายงานตัว
    public function documentM4($id)
    {
        $data = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Newstudent-document.send-document.send-document-m4', ['data' => $data]);
    }

    public function editDocument(Request $request, $id)
    {
        $data = newstudentm4Model::find($id);
        $findID = $data->id_number;

        if (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
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
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                    "status_house_father" => $request->get('status_house_father'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
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

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                    "status_house_father" => $request->get('status_house_father'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_father" => $compPic1,
                    "id_card_mother" => $compPic2,
                    "house_father" => $compPic3,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_house_father" => $request->get('status_house_father'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
        ) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic8);


            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
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

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_house_father" => $request->get('status_house_father'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "id_card_parent" => $compPic1,
                    "house_parent" => $compPic2,
                    "front_grade" => $compPic3,
                    "back_grade" => $compPic4,
                    "birth_certificate" => $compPic5,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
            && $request->hasFile('front_grade') && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
        ) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic6);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_parent" => $compPic1,
                    "house_parent" => $compPic2,
                    "front_grade" => $compPic3,
                    "back_grade" => $compPic4,
                    "birth_certificate" => $compPic5,
                    "disability_certificate" => $compPic6,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
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

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                    "status_house_father" => $request->get('status_house_father'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {


            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
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

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                    "status_house_father" => $request->get('status_house_father'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "id_card_parent" => $compPic8,
                    "house_parent" => $compPic9,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_house_parent" => $request->get('status_house_parent'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic10,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_house_father" => $request->get('status_house_father'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('disability_certificate')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic10,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_father') && $request->hasFile('house_father')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_father" => $request->get('status_idcard_father'),
                    "status_house_father" => $request->get('status_house_father'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('front_grade') && $request->hasFile('back_grade')) {

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic1);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic2);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "front_grade" => $compPic1,
                    "back_grade" => $compPic2,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    "status_back_grade" => $request->get('status_back_grade'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('id_card_father')) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_father" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_idcard_father" => $request->get('status_idcard_father'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('id_card_mother')) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_mother" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('house_father')) {

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "house_father" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_house_father" => $request->get('status_house_father'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('house_mother')) {

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "house_mother" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_house_mother" => $request->get('status_house_mother'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('front_grade')) {

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "front_grade" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),

                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('back_grade')) {

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "back_grade" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_back_grade" => $request->get('status_back_grade'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('birth_certificate')) {

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "birth_certificate" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('id_card_parent')) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "id_card_parent" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('house_parent')) {

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_regis/house_parent', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "house_parent" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_house_parent" => $request->get('status_house_parent'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        } elseif ($request->hasFile('disability_certificate')) {

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "disability_certificate" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
                ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        }



        return redirect('/Newstudent/documentSuccess');
    }

    public function shownewstudentm4($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.show-newstudentm4byID', [
            'data' => $data,
            'school_year' => $school_year,
        ]);
    }

    //statusPic
    public function showStatusPic($id)
    {
        $school_year = DB::table('school_year')
            ->first();

        $data1 = newstudentm4Model::findOrFail($id);

        $pic = $data1->id_number;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();

        $data3 = DB::table('status_pic')
            ->where('student_idcard', '=', $pic)
            ->first();

        return view('Newstudent.StatusPic.status-picM4', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'school_year' => $school_year,
        ]);
    }

    public function updatePic(Request $request, $id)
    {
        $data = newstudentm4Model::find($id);
        $student = $data->id_number;

        if (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '01' && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_profile') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '01' && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_profile') == '01'  && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_idcard_student') == '01' && $request->get('status_house_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '01' && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (
            $request->get('status_idcard_student') == '01'

        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } elseif (

            $request->get('status_house_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $status_success1 = "01";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '01' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '03'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '03' && $request->get('status_idcard_student') == '03'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '03' 
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '03' 
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '01' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_idcard_student') == '03'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_idcard_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_house_student') == '01' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
           
            $request->get('status_house_student') == '03' 
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '01'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '01' && $request->get('status_idcard_student') == '03'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_profile') == '03' && $request->get('status_idcard_student') == '03'
            && $request->get('status_house_student') == '03' && $request->get('status_submit_student') == '01'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }elseif (
            $request->get('status_submit_student') == '03'
        ) {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "03";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        } else {
            $add1 = DB::table('status_pic')
                ->where('student_idcard', '=', $student)
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $status_success1 = "02";

            $data->update([
                "status_rigis" => $status_success1,
                "status_picall" => $status_success1,
            ]);
        }


        return redirect('/SubmitObject/M4');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $register_year = DB::table('register_year')
            ->where('id', '=', '1')
            ->first();

        $data = DB::table('new_student_register_m4')
            ->where('id_number', '=', $request->get('id_number'))
            ->first();

        if ($data == NULL) {
            if (
                $request->hasFile('profile_img') && $request->hasFile('id_card_student')
                && $request->hasFile('house_student')  && $request->hasFile('student_submit')
            ) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $profile_img);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->id_number . '.' . $id_card_student);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->id_number . '.' . $house_student);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $student_submit = $request->file('student_submit')->getClientOriginalExtension();
                $compPic4 = str_replace(' ', '_', $request->id_number . '.' . $student_submit);
                $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

                $pic2 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);
                $pic2->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

                $datastatus->save();
            } elseif (
                $request->hasFile('profile_img') && $request->hasFile('id_card_student')
                && $request->hasFile('house_student')
            ) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $profile_img);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->id_number . '.' . $id_card_student);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->id_number . '.' . $house_student);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $pic2 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                ]);
                $pic2->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

                $datastatus->save();
            } elseif (
                $request->hasFile('id_card_student') && $request->hasFile('house_student')
                && $request->hasFile('student_submit')
            ) {

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->id_number . '.' . $id_card_student);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->id_number . '.' . $house_student);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $student_submit = $request->file('student_submit')->getClientOriginalExtension();
                $compPic4 = str_replace(' ', '_', $request->id_number . '.' . $student_submit);
                $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

                $pic2 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);
                $pic2->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

                $datastatus->save();
            } elseif (
                $request->hasFile('id_card_student') && $request->hasFile('house_student')
            ) {

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->id_number . '.' . $id_card_student);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic3 = str_replace(' ', '_', $request->id_number . '.' . $house_student);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

                $pic2 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                ]);
                $pic2->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

                $datastatus->save();
            } elseif ($request->hasFile('profile_img')  && $request->hasFile('id_card_student')) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $profile_img);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic2 = str_replace(' ', '_', $request->id_number . '.' . $id_card_student);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

                $pic2 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                ]);
                $pic2->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

                $datastatus->save();
            } elseif ($request->hasFile('profile_img')) {

                $profile_img = $request->file('profile_img')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $profile_img);
                $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

                $pic1 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "profile_img" => $compPic1,
                ]);
                $pic1->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_profile" => $request->get('status_profile'),
                ]);

                $datastatus->save();
            } elseif ($request->hasFile('id_card_student')) {

                $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $id_card_student);
                $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic1);

                $pic1 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "id_card_student" => $compPic1,
                ]);
                $pic1->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

                $datastatus->save();
            } elseif ($request->hasFile('house_student')) {

                $house_student = $request->file('house_student')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $house_student);
                $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic1);

                $pic1 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "house_student" => $compPic1,
                ]);
                $pic1->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

                $datastatus->save();
            } elseif ($request->hasFile('student_submit')) {

                $student_submit = $request->file('student_submit')->getClientOriginalExtension();
                $compPic1 = str_replace(' ', '_', $request->id_number . '.' . $student_submit);
                $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic1);

                $pic1 = new photostudentModel([
                    "student_idcard" => $request->get('id_number'),
                    "student_submit" => $compPic1,
                ]);
                $pic1->save();

                $datastatus  = new statuspicModel([
                    "student_idcard" => $request->get('id_number'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

                $datastatus->save();
            }

            
            $date = date("d-m-y");

            $post = new newstudentm4Model([
                "prename" => $request->get('prename'),
                "fname" => $request->get('fname'),
                "surname" => $request->get('surname'),
                "sex" => $request->get('sex'),
                "id_number" => $request->get('id_number'),
                "day" => $request->get('day'),
                "mounth" => $request->get('mounth'),
                "year" => $request->get('year'),
                "religion" => $request->get('religion'),
                "nationality" => $request->get('nationality'),
                "origin" => $request->get('origin'),
                "father_name" => $request->get('father_name'),
                "father_id" => $request->get('father_id'),
                "father_job" => $request->get('father_job'),
                "father_tel" => $request->get('father_tel'),
                "mother_name" => $request->get('mother_name'),
                "mother_id" => $request->get('mother_id'),
                "mother_job" => $request->get('mother_job'),
                "mother_tel" => $request->get('mother_tel'),
                "parent" => $request->get('parent'),
                "parent_status" => $request->get('parent_status'),
                "parent_name" => $request->get('parent_name'),
                "parent_id" => $request->get('parent_id'),
                "parent_job" => $request->get('parent_job'),
                "parent_tel" => $request->get('parent_tel'),
                "house_number" => $request->get('house_number'),
                "bloc" => $request->get('bloc'),
                "street" => $request->get('street'),
                "road" => $request->get('road'),
                "sub_district" => $request->get('sub_district'),
                "district" => $request->get('district'),
                "province" => $request->get('province'),
                "post" => $request->get('post'),
                "final_school" => $request->get('final_school'),
                "final_school_sub_district" => $request->get('final_school_sub_district'),
                "final_school_district" => $request->get('final_school_district'),
                "final_school_province" => $request->get('final_school_province'),
                "disabled" => $request->get('disabled'),
                "poor_person" => $request->get('poor_person'),
                "etc" => $request->get('etc'),
                "tel" => $request->get('tel'),
                "major_name1" => $request->get('major_name1'),
                "major_name2" => $request->get('major_name2'),
                "major_name3" => $request->get('major_name3'),
                "major_name4" => $request->get('major_name4'),
                "major_name5" => $request->get('major_name5'),
                "major_name6" => $request->get('major_name6'),
                "major_name7" => $request->get('major_name7'),
                "major_name8" => $request->get('major_name8'),
                "major_name9" => $request->get('major_name9'),
                "email" => $request->get('email'),
                "father_namecen" => $request->get('father_namecen'),
                "mother_namecen" => $request->get('mother_namecen'),
                "parent_namecen" => $request->get('parent_namecen'),
                "father_surname" => $request->get('father_surname'),
                "mother_surname" => $request->get('mother_surname'),
                "parent_surname" => $request->get('parent_surname'),
                "father_prename" => $request->get('father_prename'),
                "mother_prename" => $request->get('mother_prename'),
                "parent_prename" => $request->get('parent_prename'),
                "name_cen" => $request->get('name_cen'),
                "student_id" => $request->get('student_id'),
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
                "student_year" => $register_year->register_year,
                "date" => $date
            ]);
            $post->save();

            RegisterloginM4::create([
                'prename' => $request->get('prename'),
                'fname' => $request->get('fname'),
                'surname' => $request->get('surname'),
                'username' => $request->get('id_number'),
                'password' => bcrypt($request->get('day').$request->get('mounth').$request->get('year')),
            ]);

            statuspicModel::create([
                "student_idcard" => $request->get('id_number'),
            ]);

            photostudentModel::create([
                "student_idcard" => $request->get('id_number'),
            ]);
            
            return redirect('/Success/RegisterM1');
        } else {
            return redirect('/Unsuccess/RegisterM1');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = newstudentm4Model::findOrFail($id);
        $school_year = DB::table('school_year')
            ->first();

        $m4major1 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name1)
            ->first();
        
        $m4major2 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name2)
            ->first();

        $m4major3 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name3)
            ->first();

        $m4major4 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name4)
            ->first();

        $m4major5 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name5)
            ->first();

        $m4major6 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name6)
            ->first();

        $m4major7 = DB::table('class_major_m4')
            ->where('class_id', '=', $data->major_name7)
            ->first();
            
        return view('Newstudent.newstudentm4byID', [
            'data' => $data,
            'school_year' => $school_year,
            'm4major1' => $m4major1,
            'm4major2' => $m4major2,
            'm4major3' => $m4major3,
            'm4major4' => $m4major4,
            'm4major5' => $m4major5,
            'm4major6' => $m4major6,
            'm4major7' => $m4major7,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newstudentm4Model = newstudentm4Model::find($id);
        $newstudentm4Model->update($request->all());
        return redirect('SortNewstudentM4')
            ->with('success', 'Update successfully');
    }

    public function updatestudent(Request $request, $id)
    {
        $newstudentm4Model = newstudentm4Model::find($id);
        $findID = $newstudentm4Model->id_number;

        $data1 = DB::table('photo_student')
            ->where('student_idcard', '=', $findID)
            ->update([
                'student_idcard' => $request->get('id_number')
            ]);

        $data2 = DB::table('status_pic')
            ->where('student_idcard', '=', $findID)
            ->update([
                'student_idcard' => $request->get('id_number')
            ]);

        $newstudentm4Model->update($request->all());

        return redirect('/check/status');
    }

    //แก้ไขหลักฐานการสมัคร
    public function editOblect($id)
    {
        $data = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Edit-object.edit-object-m4', [
            'data' => $data,
        ]);
    }

    public function upObjectM4(Request $request, $id)
    {
        $data = newstudentm4Model::find($id);
        $student_idcard = $data->id_number;

        if (
            $request->hasFile('profile_img') && $request->hasFile('id_card_student')
            && $request->hasFile('house_student') && $request->hasFile('student_submit')
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif (
            $request->hasFile('profile_img') && $request->hasFile('id_card_student')
            && $request->hasFile('house_student')
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif (
            $request->hasFile('id_card_student') && $request->hasFile('house_student')
            && $request->hasFile('student_submit')
        ) {

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif (
            $request->hasFile('id_card_student') && $request->hasFile('house_student')
        ) {

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif (
            $request->hasFile('house_student') && $request->hasFile('student_submit')
        ) {

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('id_number') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_house_student" => $request->get('status_house_student'),
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('profile_img') && $request->hasFile('id_card_student')) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_profile" => $request->get('status_profile'),
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('profile_img')) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "profile_img" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_profile" => $request->get('status_profile'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('id_card_student')) {

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "id_card_student" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('house_student')) {

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "house_student" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('student_submit')) {

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('id_number') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "student_submit" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('id_number'))
                ->update([
                    "status_submit_student" => $request->get('status_submit_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        }

        return redirect('/check/status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $newstudentm4 = newstudentm4Model::find($id);

        $findIdCard = $newstudentm4->id_number;

        $status_pic = DB::table('status_pic')
            ->where('student_idcard', '=', $findIdCard);
        
        $photo_student = DB::table('photo_student')
            ->where('student_idcard', '=', $findIdCard);

        $newstudentm4->delete();
        $status_pic->delete();
        $photo_student->delete();

        return redirect('SortNewstudentM4');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('new_student_register_m4')
            ->where('fname', 'like', '%' . $search . '%')
            ->orWhere('surname', 'like', '%' . $search . '%')
            ->orWhere('status_rigis', 'like', '%' . $search . '%')
            ->orWhere('final_school', 'like', '%' . $search . '%')->paginate(10);
        return view('Newstudent.sortnewstudentm4', ['data' => $data]);
    }

    public function searchstatus(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m4')
            ->where('id_number', 'like', '%' . $search . '%')->paginate(10);

        $status = DB::table('status_pic')
            ->where('student_idcard', 'like', '%' . $search . '%')
            ->first();
        
        if($datas !== NULL && $status !== NULL){
                
            return view('Newstudent.success-statuscheck.check-statusM4-onsubmit', [
                'datas' => $datas,
                'status' => $status
            ]);

        } else {
            return view('Newstudent.success-statuscheck.check-statusM4-notsubmit');
        }
        
    }

    public function checkstatusM4($id)
    {
        $findID = RegisterloginM4::find($id);
        $data = DB::table('new_student_register_m4')
            ->where('id_number', '=', $findID->username)
            ->first();

        $status = DB::table('status_pic')
            ->where('student_idcard', '=', $findID->username)
            ->first();

        return view('Newstudent.success-statuscheck.check-statusM4-onsubmit', [
             'data' => $data,
             'status' => $status
        ]);
    }

    //ส่งเอกสารรายงานตัว
    public function checkdocument($id)
    {
        $findID = RegisterloginM4::find($id);
        $data = DB::table('new_student_register_m4')
            ->where('id_number', '=', $findID->username)
            ->first();

        $status = DB::table('status_pic')
            ->where('student_idcard', '=', $findID->username)
            ->first();
        return view('Newstudent.Newstudent-document.document-statusM4-onsubmit', [
            'data' => $data,
            'status' => $status
        ]);
    }

    //ส่งเอกสารรายงานตัว
    public function searchdocument(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m4')
            ->where('id_number', 'like', '%' . $search . '%')->paginate(10);

        $status = DB::table('status_pic')
            ->where('student_idcard', 'like', '%' . $search . '%')
            ->first();
        return view('Newstudent.Newstudent-document.document-statusM4-onsubmit', [
            'datas' => $datas,
            'status' => $status
        ]);
    }

    //Report
    public function reportExel(Request $request)
    {
        $register_year = DB::table('register_year')
            ->first();

        //โรงเรียนในเขต
        $search = $request->get('search');

        $partition = DB::table('new_student_register_m4')
            ->where('date', 'like', '%' . $search . '%')
            ->where('final_school', '=', 'โรงเรียนพร้าววิทยาคม')
            ->where('student_year', '=', $register_year->register_year)
            ->get();
        $partitionCount = $partition->count();

        $dateM4 = DB::table('new_student_register_m4')
            ->where('date', 'like', '%' . $search . '%')
            ->where('student_year', '=', $register_year->register_year)
            ->first();


        //โรงเรียนทั้งหมด
        $dataAll = DB::table('new_student_register_m4')
            ->where('date', 'like', '%' . $search . '%')
            ->where('student_year', '=', $register_year->register_year)
            ->get();
        $dataCountAll = $dataAll->count();

        //โรงเรียนนอกเขต
        $sum = $dataCountAll - $partitionCount;

        //โรงเรียนทั้งหมดโดยไม่ต้องกดค้นหา


        $partitionAll = DB::table('new_student_register_m4')
            ->where('final_school', '=', 'โรงเรียนพร้าววิทยาคม')
            ->orWhereNotNull('student_id')
            ->where('student_year', '=', $register_year->register_year)
            ->get();
        $partitionAllCount = $partitionAll->count();


        //โรงเรียนทั้งหมด
        $dataAlls = DB::table('new_student_register_m4')
            ->where('student_year', '=', $register_year->register_year)
            ->get();
        $dataCountAlls = $dataAlls->count();

        //โรงเรียนนอกเขต
        $sumAll = $dataCountAlls - $partitionAllCount;

        return view(
            'Newstudent.Newstudent-report.Newstudentm4-report',
            [

                'sum' => $sum,
                'partitionCount' => $partitionCount,
                'dataCountAll' => $dataCountAll,
                'sumAll' => $sumAll,
                'partitionAllCount' => $partitionAllCount,
                'dataCountAlls' => $dataCountAlls,
                'dateM4' => $dateM4,
                'register_year' => $register_year
            ]
        );
    }

    //รูปภาพทั้งหมด
    public function profileStudent($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.profile-student', ['data' => $data]);
    }

    public function IdCardStudent($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.id-card-student', ['data' => $data]);
    }

    public function HouseStudent($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-student', ['data' => $data]);
    }

    public function SubmitStudent($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.student-submit', ['data' => $data]);
    }

    public function IdCardFather($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.id-card-father', ['data' => $data]);
    }

    public function IdCardMother($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.id-card-mother', ['data' => $data]);
    }

    public function IdCardParent($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.id-card-parent', ['data' => $data]);
    }

    public function HouseFather($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-father', ['data' => $data]);
    }

    public function HouseMother($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-mother', ['data' => $data]);
    }

    public function HouseParent($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.house-parent', ['data' => $data]);
    }

    public function FrontGrade($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.front-grade', ['data' => $data]);
    }

    public function BackGrade($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.back-grade', ['data' => $data]);
    }

    public function BirthCertificate($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.birth-certificate', ['data' => $data]);
    }

    public function DisabilityCertificate($id)
    {
        $data1 = newstudentm4Model::find($id);

        $pic = $data1->id_number;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM4.disability-certificate', ['data' => $data]);
    }
}
