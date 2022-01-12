<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Livewire\NewstudnetM1;
use App\Models\newstudentm1Model;
use App\Models\photostudentModel;
use App\Models\statuspicModel;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\DB;

class newstudentm1Controller extends Controller
{

    public function index()
    {
        $datas = DB::table('new_student_register_m1')
            ->where('status_picall', '=', '02')
            ->get();
        return view('Newstudent.unsubmit-object.unsubmit-object-m1', compact('datas'));
    }

    public function submitObjectM1()
    {
        $datas = DB::table('new_student_register_m1')
            ->where('status_picall', '=', '01')
            ->get();
        return view('Newstudent.submit-object.submit-object-m1', compact('datas'));
    }

    public function creteStudent ()
    {
        return view('Newstudent.register-student.newstudentm1');
    }

    public function successRegiter()
    {
        return view('Newstudent.success-register.success-register-m1');
    }

    public function edit($id)
    {
        $newstudentm1Model = newstudentm1Model::findOrFail($id);
        return view('Newstudent.fixprofilenewstudentm1', compact('newstudentm1Model'));
    }

    //statusPic
    public function showStatusPic($id)
    {
        $data1 = newstudentm1Model::findOrFail($id);

        $pic = $data1->idNumber;

        $data2 = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();

        $data3 = DB::table('status_pic')
            ->where('student_idcard', '=', $pic)
            ->first();

        return view('Newstudent.StatusPic.status-picM1', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3
        ]);
    }

    public function updateStatusPic(Request $request, $id)
    {
        $data = newstudentm1Model::find($id);
        $student = $data->idNumber;

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


        return redirect('/SubmitObject/M1');
    }

    public function editnewstudentm1($id)
    {
        $newstudentm1Model = newstudentm1Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.editprofilenewstudentm1', compact('newstudentm1Model'));
    }

    public function editOblect($id)
    {
        $data = newstudentm1Model::findOrFail($id);
        return view('Newstudent.Edit-object.edit-object-m1', [
            'data' => $data,
        ]);
    }

    //ส่งเอกสารรายงานตัว
    public function documentM1($id)
    {
        $data = newstudentm1Model::findOrFail($id);
        return view('Newstudent.Newstudent-document.send-document.send-document-m1', ['data' => $data]);
    }

    public function editDocument(Request $request, $id)
    {
        $data = newstudentm1Model::find($id);
        $findID = $data->idNumber;

        if (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') && $request->hasFile('disability_certificate')
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic8);


            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic6);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_parent" => $compPic1,
                    "house_parent" => $compPic2,
                    "front_grade" => $compPic3,
                    "back_grade" => $compPic4,
                    "birth_certificate" => $compPic5,
                    "disability_certificate" => $compPic6,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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

        }elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('house_father')  
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent') 
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $request->hasFile('id_card_mother')&& $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('id_card_parent')
            && $request->hasFile('house_parent')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic8 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic8);

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic9 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic9);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic10,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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

        }elseif (
            $request->hasFile('id_card_mother') && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') && $request->hasFile('disability_certificate')
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic10 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic10);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                    "disability_certificate" => $compPic10,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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

        }elseif (
            $request->hasFile('id_card_father') && $request->hasFile('house_father')  
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') 
        ) {
            $id_card_father = $request->file('id_card_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_father" => $compPic1,
                    "house_father" => $compPic3,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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

        }elseif (
            $request->hasFile('id_card_mother')&& $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate') 
        ) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic5 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic6 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic7 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_mother" => $compPic2,
                    "house_mother" => $compPic4,
                    "front_grade" => $compPic5,
                    "back_grade" => $compPic6,
                    "birth_certificate" => $compPic7,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic1);

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic2);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "front_grade" => $compPic1,
                    "back_grade" => $compPic2,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_father" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_idcard_father" => $request->get('status_idcard_father'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('id_card_mother')) {

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_mother" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_idcard_mother" => $request->get('status_idcard_mother'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('house_father')) {

            $house_father = $request->file('house_father')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "house_father" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_house_father" => $request->get('status_house_father'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('house_mother')) {

            $house_mother = $request->file('house_mother')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "house_mother" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_house_mother" => $request->get('status_house_mother'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('front_grade')) {

            $front_grade = $request->file('front_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "front_grade" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_front_grade" => $request->get('status_front_grade'),
                    
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('back_grade')) {

            $back_grade = $request->file('back_grade')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "back_grade" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_back_grade" => $request->get('status_back_grade'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('birth_certificate')) {

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "birth_certificate" => $compPic1
                ]);

             $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_birth_certificate" => $request->get('status_birth_certificate'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('id_card_parent')) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "id_card_parent" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_idcard_parent" => $request->get('status_idcard_parent'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('house_parent')) {

            $house_parent = $request->file('house_parent')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $findID)
                ->update([
                    "house_parent" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_house_parent" => $request->get('status_house_parent'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);

        } elseif ($request->hasFile('disability_certificate')) {

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "disability_certificate" => $compPic1
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_disability_certificate" => $request->get('status_disability_certificate'),
            ]);

            $data->update([
                "status_report" => $request->get('status_report'),
                "status_tranfer" => $request->get('status_tranfer'),
            ]);
        }

        

        return redirect('/Newstudent/documentM1');
    }

    public function shownewstudentm1($id)
    {
        $data = newstudentm1Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.show-newstudentm1byID', compact('data'));
    }



    public function store(Request $request)
    {
        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $data = newstudentm1Model::all();

        if (
            $request->hasFile('profile_img') && $request->hasFile('id_card_student')
            && $request->hasFile('house_student')  && $request->hasFile('student_submit')
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->idNumber . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->idNumber . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->idNumber . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
                "house_student" => $compPic3,
                "student_submit" => $compPic4,
            ]);
            $pic2->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
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
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->idNumber . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->idNumber . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
                "house_student" => $compPic3,
            ]);
            $pic2->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
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
            $compPic2 = str_replace(' ', '_', $request->idNumber . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->idNumber . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->idNumber . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "id_card_student" => $compPic2,
                "house_student" => $compPic3,
                "student_submit" => $compPic4,
            ]);
            $pic2->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
                "status_idcard_student" => $request->get('status_idcard_student'),
                "status_house_student" => $request->get('status_house_student'),
                "status_submit_student" => $request->get('status_submit_student'),
            ]);
    
            $datastatus->save();

        } elseif (
            $request->hasFile('id_card_student') && $request->hasFile('house_student')
       ) {

           $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
           $compPic2 = str_replace(' ', '_', $request->idNumber . '.' . $id_card_student);
           $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

           $house_student = $request->file('house_student')->getClientOriginalExtension();
           $compPic3 = str_replace(' ', '_', $request->idNumber . '.' . $house_student);
           $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

           $pic2 = new photostudentModel([
               "student_idcard" => $request->get('idNumber'),
               "id_card_student" => $compPic2,
               "house_student" => $compPic3,
           ]);
           $pic2->save();

           $datastatus  = new statuspicModel([
               "student_idcard" => $request->get('idNumber'),
               "status_idcard_student" => $request->get('status_idcard_student'),
               "status_house_student" => $request->get('status_house_student'),
           ]);
   
           $datastatus->save();

       } elseif ($request->hasFile('profile_img')  && $request->hasFile('id_card_student')) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->idNumber . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
            ]);
            $pic2->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
                "status_profile" => $request->get('status_profile'),
                "status_idcard_student" => $request->get('status_idcard_student'),
            ]);
    
            $datastatus->save();

        } elseif ($request->hasFile('profile_img')) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $pic1 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "profile_img" => $compPic1,
            ]);
            $pic1->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
                "status_profile" => $request->get('status_profile'),
            ]);
    
            $datastatus->save();

        } elseif ($request->hasFile('id_card_student')) {

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic1);

            $pic1 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "id_card_student" => $compPic1,
            ]);
            $pic1->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
                "status_idcard_student" => $request->get('status_idcard_student'),
            ]);
    
            $datastatus->save();

        } elseif ($request->hasFile('house_student')) {

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic1);

            $pic1 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "house_student" => $compPic1,
            ]);
            $pic1->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
                "status_house_student" => $request->get('status_house_student'),
            ]);
    
            $datastatus->save();

        } elseif ($request->hasFile('student_submit')) {

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->idNumber . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic1);

            $pic1 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "student_submit" => $compPic1,
            ]);
            $pic1->save();

            $datastatus  = new statuspicModel([
                "student_idcard" => $request->get('idNumber'),
                "status_submit_student" => $request->get('status_submit_student'),
            ]);
    
            $datastatus->save();
        }

        newstudentm1Model::create([
            "prename" => $request->get('prename'),
            "fname" => $request->get('fname'),
            "surname" => $request->get('surname'),
            "sex" => $request->get('sex'),
            "idNumber" => $request->get('idNumber'),
            "day" => $request->get('day'),
            "mounth" => $request->get('mounth'),
            "year" => $request->get('year'),
            "religion" => $request->get('religion'),
            "nationality" => $request->get('nationality'),
            "origin" => $request->get('origin'),
            "disabled" => $request->get('disabled'),
            "poorPerson" => $request->get('poorPerson'),
            "etc" => $request->get('etc'),
            "tel" => $request->get('tel'),
            "email" => $request->get('email'),
            "nameCen" => $request->get('nameCen'),
            "fatherName" => $request->get('fatherName'),
            "fatherNamecen" => $request->get('fatherNamecen'),
            "fatherSurname" => $request->get('fatherSurname'),
            "fatherId" => $request->get('fatherId'),
            "fatherJob" => $request->get('fatherJob'),
            "fatherTel" => $request->get('fatherTel'),
            "motherName" => $request->get('motherName'),
            "motherNamecen" => $request->get('motherNamecen'),
            "motherSurname" => $request->get('motherSurname'),
            "motherId" => $request->get('motherId'),
            "motherJob" => $request->get('motherJob'),
            "motherTel" => $request->get('motherTel'),
            "parent" => $request->get('parent'),
            "parent_status" => $request->get('parent_status'),
            "parentName" => $request->get('parentName'),
            "parentNamecen" => $request->get('parentNamecen'),
            "parentSurname" => $request->get('parentSurname'),
            "parentId" => $request->get('parentId'),
            "parentJob" => $request->get('parentJob'),
            "parentTel" => $request->get('parentTel'),
            "father_prename" => $request->get('father_prename'),
            "mother_prename" => $request->get('mother_prename'),
            "parent_prename" => $request->get('parent_prename'),
            "houseNumber" => $request->get('houseNumber'),
            "street" => $request->get('street'),
            "bloc" => $request->get('bloc'),
            "road" => $request->get('road'),
            "subDistrict" => $request->get('subDistrict'),
            "district" => $request->get('district'),
            "province" => $request->get('province'),
            "post" => $request->get('post'),
            "finalSchool" => $request->get('finalSchool'),
            "finalSchoolSubDistrict" => $request->get('finalSchoolSubDistrict'),
            "finalSchoolDistrict" => $request->get('finalSchoolDistrict'),
            "finalSchoolProvince" => $request->get('finalSchoolProvince'),
            "status_rigis" => $request->get('status_rigis'),
            "status_picall" => $request->get('status_picall'),
            "date" => $date,
        ]);

        return redirect('/Success/RegisterM1');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = newstudentm1Model::findOrFail($id);
        return view('Newstudent.newstudentm1byID', compact('data'));
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
        $newstudentm1Model = newstudentm1Model::find($id);
        $newstudentm1Model->update($request->all());
        return redirect('SortNewstudentM1')
            ->with('success', 'Update successfully');
    }

    public function updatestudent(Request $request, $id)
    {
        $newstudentm1Model = newstudentm1Model::find($id);
        $findID = $newstudentm1Model->idNumber;

        $newstudentm1Model->update([
            "prename" => $request->get('prename'),
            "fname" => $request->get('fname'),
            "surname" => $request->get('surname'),
            "sex" => $request->get('sex'),
            "idNumber" => $request->get('idNumber'),
            "day" => $request->get('day'),
            "mounth" => $request->get('mounth'),
            "year" => $request->get('year'),
            "religion" => $request->get('religion'),
            "nationality" => $request->get('nationality'),
            "origin" => $request->get('origin'),
            "disabled" => $request->get('disabled'),
            "poorPerson" => $request->get('poorPerson'),
            "etc" => $request->get('etc'),
            "tel" => $request->get('tel'),
            "email" => $request->get('email'),
            "nameCen" => $request->get('nameCen'),
            "fatherName" => $request->get('fatherName'),
            "fatherNamecen" => $request->get('fatherNamecen'),
            "fatherSurname" => $request->get('fatherSurname'),
            "fatherId" => $request->get('fatherId'),
            "fatherJob" => $request->get('fatherJob'),
            "fatherTel" => $request->get('fatherTel'),
            "motherName" => $request->get('motherName'),
            "motherNamecen" => $request->get('motherNamecen'),
            "motherSurname" => $request->get('motherSurname'),
            "motherId" => $request->get('motherId'),
            "motherJob" => $request->get('motherJob'),
            "parent" => $request->get('parent'),
            "parent_status" => $request->get('parent_status'),
            "parentName" => $request->get('parentName'),
            "parentNamecen" => $request->get('parentNamecen'),
            "parentSurname" => $request->get('parentSurname'),
            "parentId" => $request->get('parentId'),
            "parentJob" => $request->get('parentJob'),
            "parentTel" => $request->get('parentTel'),
            "father_prename" => $request->get('father_prename'),
            "mother_prename" => $request->get('mother_prename'),
            "parent_prename" => $request->get('parent_prename'),
            "houseNumber" => $request->get('houseNumber'),
            "street" => $request->get('street'),
            "bloc" => $request->get('bloc'),
            "road" => $request->get('road'),
            "subDistrict" => $request->get('subDistrict'),
            "district" => $request->get('district'),
            "province" => $request->get('province'),
            "post" => $request->get('post'),
            "finalSchool" => $request->get('finalSchool'),
            "finalSchoolSubDistrict" => $request->get('finalSchoolSubDistrict'),
            "finalSchoolDistrict" => $request->get('finalSchoolDistrict'),
            "finalSchoolProvince" => $request->get('finalSchoolProvince'),
        ]);


        return redirect('/check/status');
    }

    //แก้ไขหลักฐานการสมัคร
    public function upObjectM1(Request $request, $id)
    {
        $data = newstudentm1Model::find($id);
        $student_idcard = $data->idNumber;

        if (
            $request->hasFile('profile_img') && $request->hasFile('id_card_student')
            && $request->hasFile('house_student') && $request->hasFile('student_submit')
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_student" => $compPic2,
                    "house_student" => $compPic3,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic3 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic4 = str_replace(' ', '_', $request->get('idNumber') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "house_student" => $compPic3,
                    "student_submit" => $compPic4,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic2 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "profile_img" => $compPic1,
                    "id_card_student" => $compPic2,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "profile_img" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_profile" => $request->get('status_profile'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('id_card_student')) {

            $id_card_student = $request->file('id_card_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "id_card_student" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_idcard_student" => $request->get('status_idcard_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('house_student')) {

            $house_student = $request->file('house_student')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "house_student" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "status_house_student" => $request->get('status_house_student'),
                ]);

            $data->update([
                "status_rigis" => $request->get('status_rigis'),
                "status_picall" => $request->get('status_picall'),
            ]);
        } elseif ($request->hasFile('student_submit')) {

            $student_submit = $request->file('student_submit')->getClientOriginalExtension();
            $compPic1 = str_replace(' ', '_', $request->get('idNumber') . '.' . $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic1);

            $photo = DB::table('photo_student')
                ->where('student_idcard', '=', $request->get('idNumber'))
                ->update([
                    "student_submit" => $compPic1,
                ]);

            $statusPic = DB::table('status_pic')
                ->where('student_idcard', '=', $request->get('idNumber'))
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
        $newstudentm1 = newstudentm1Model::find($id);
        $newstudentm1->delete();
        return redirect('SortNewstudentM1');
    }



    public function search(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m1')
            ->where('fname', 'like', '%' . $search . '%')
            ->orWhere('surname', 'like', '%' . $search . '%')
            ->orWhere('status_rigis', 'like', '%' . $search . '%')
            ->orWhere('finalSchool', 'like', '%' . $search . '%')->paginate(10);
        return view('Newstudent.sortnewstudentm1', ['datas' => $datas]);
    }

    public function searchstatus(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m1')
            ->where('idNumber', 'like', '%' . $search . '%')->paginate(10);

        $status = DB::table('status_pic')
            ->where('student_idcard', 'like', '%' . $search . '%')
            ->first();
        return view('Newstudent.success-statuscheck.check-statusM1-onsubmit', [
            'datas' => $datas,
            'status' => $status
        ]);
    }

    //ส่งเอกสารรายงานตัว
    public function searchdocument(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m1')
            ->where('idNumber', 'like', '%' . $search . '%')->paginate(10);

        $status = DB::table('status_pic')
            ->where('student_idcard', 'like', '%' . $search . '%')
            ->first();
        return view('Newstudent.Newstudent-document.document-statusM1-onsubmit', [
            'datas' => $datas,
            'status' => $status
        ]);
    }

    //Report
    public function reportExel(Request $request)
    {
        //โรงเรียนในเขต
        $search = $request->get('search');
        $partition1 = DB::table('new_student_register_m1')
            ->where('date', 'like', '%' . $search . '%')
            ->where('finalSchool', '=', 'โรงเรียนบ้านแจ่งกู่เรือง')
            ->get();
        $partitionCount1 = $partition1->count();

        $partition2 = DB::table('new_student_register_m1')
            ->where('date', 'like', '%' . $search . '%')
            ->where('finalSchool', '=', 'โรงเรียนบ้านป่าตุ้ม')
            ->get();
        $partitionCount2 = $partition2->count();

        $partition3 = DB::table('new_student_register_m1')
            ->where('date', 'like', '%' . $search . '%')
            ->where('finalSchool', '=', 'โรงเรียนชุมชนสหกรนิคมวิทยา')
            ->get();
        $partitionCount3 = $partition3->count();

        $partition4 = DB::table('new_student_register_m1')
            ->where('date', 'like', '%' . $search . '%')
            ->where('finalSchool', '=', 'โรงเรียนบ้านห้วยบง')
            ->get();
        $partitionCount4 = $partition4->count();

        $dateM1 = DB::table('new_student_register_m1')
            ->where('date', 'like', '%' . $search . '%')
            ->first();

        //โรงเรียนในเขตทั้งหมด
        $partitionAll = $partitionCount1 + $partitionCount2 + $partitionCount3 + $partitionCount4;

        //โรงเรียนทั้งหมด
        $dataAll = DB::table('new_student_register_m1')
            ->where('date', 'like', '%' . $search . '%')
            ->get();
        $dataCountAll = $dataAll->count();

        //โรงเรียนนอกเขต
        $sum = $dataCountAll - $partitionAll;

        //ดรงเรียนทั้งหมดโดยไม่ต้องกดค้นหา
        $partitionAll1 = DB::table('new_student_register_m1')
            ->where('finalSchool', '=', 'โรงเรียนบ้านแจ่งกู่เรือง')
            ->get();
        $partitionAllCount1 = $partitionAll1->count();

        $partitionAll2 = DB::table('new_student_register_m1')
            ->where('finalSchool', '=', 'โรงเรียนบ้านป่าตุ้ม')
            ->get();
        $partitionAllCount2 = $partitionAll2->count();

        $partitionAll3 = DB::table('new_student_register_m1')
            ->where('finalSchool', '=', 'โรงเรียนชุมชนสหกรนิคมวิทยา')
            ->get();
        $partitionAllCount3 = $partitionAll3->count();

        $partitionAll4 = DB::table('new_student_register_m1')
            ->where('finalSchool', '=', 'โรงเรียนบ้านห้วยบง')
            ->get();
        $partitionAllCount4 = $partitionAll4->count();

        //โรงเรียนในเขตทั้งหมด
        $partitionAlls = $partitionAllCount1 + $partitionAllCount2 + $partitionAllCount3 + $partitionAllCount4;

        //โรงเรียนทั้งหมด
        $dataAlls = DB::table('new_student_register_m1')
            ->get();
        $dataCountAlls = $dataAlls->count();

        //โรงเรียนนอกเขต
        $sumAll = $dataCountAlls - $partitionAlls;

        return view(
            'Newstudent.Newstudent-report.Newstudentm1-report',
            [
                'partitionAll' => $partitionAll,
                'sum' => $sum,
                'dataCountAll' => $dataCountAll,
                'partitionAlls' => $partitionAlls,
                'sumAll' => $sumAll,
                'dataCountAlls' => $dataCountAlls,
                'dateM1' => $dateM1
            ]
        );
    }

    //รูปภาพทั้งหมด
    public function profileStudent($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.profile-student', ['data' => $data]);
    }

    public function IdCardStudent($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.id-card-student', ['data' => $data]);
    }

    public function HouseStudent($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.house-student', ['data' => $data]);
    }

    public function SubmitStudent($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.student-submit', ['data' => $data]);
    }

    public function IdCardFather($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.id-card-father', ['data' => $data]);
    }

    public function IdCardMother($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.id-card-mother', ['data' => $data]);
    }

    public function IdCardParent($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.id-card-parent', ['data' => $data]);
    }

    public function HouseFather($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.house-father', ['data' => $data]);
    }

    public function HouseMother($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.house-mother', ['data' => $data]);
    }

    public function HouseParent($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.house-parent', ['data' => $data]);
    }

    public function FrontGrade($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.front-grade', ['data' => $data]);
    }

    public function BackGrade($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.back-grade', ['data' => $data]);
    }

    public function BirthCertificate($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.birth-certificate', ['data' => $data]);
    }

    public function DisabilityCertificate($id)
    {
        $data1 = newstudentm1Model::find($id);

        $pic = $data1->idNumber;
        $data = DB::table('photo_student')
            ->where('student_idcard', '=', $pic)
            ->first();
        return view('Newstudent.photo-student.photoM1.disability-certificate', ['data' => $data]);
    }
}
