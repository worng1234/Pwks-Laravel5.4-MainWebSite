<?php

namespace App\Http\Controllers;

use App\Models\newstudentm4Model;
use App\Models\photostudentModel;
use App\Models\classmajorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newstudentm4Controller extends Controller
{
    public function edit($id)
    {
        $newstudentm4Model = newstudentm4Model::findOrFail($id);
        return view('Newstudent.fixprofilenewstudentm4', compact('newstudentm4Model'));
    }

    public function index(){
        $data = newstudentm4Model::all();
        return view('Newstudent.sortnewstudentm4', compact('data'));
    }

    public function create()
    {
        $data = classmajorModel::all();
        return view('Newstudent.newstudentm4', ['data' => $data]);
    }

    public function editnewstudentm4($id)
    {
        $newstudentm4Model = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.editprofilenewstudentm4', compact('newstudentm4Model'));
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
        $photo = photostudentModel::find($id);

        if (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalName();
            $compPic4 = str_replace(' ', '_', $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalName();
            $compPic5 = str_replace(' ', '_', $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalName();
            $compPic6 = str_replace(' ', '_', $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalName();
            $compPic7 = str_replace(' ', '_', $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);


            $photo->id_card_father = $compPic1;
            $photo->id_card_mother = $compPic2;
            $photo->house_father = $compPic3;
            $photo->house_mother = $compPic4;
            $photo->front_grade = $compPic5;
            $photo->back_grade = $compPic6;
            $photo->birth_certificate = $compPic7;

            $photo->save();
        } elseif (
            $request->hasFile('id_card_father')  && $request->hasFile('id_card_mother')
            && $request->hasFile('house_father')  && $request->hasFile('house_mother')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
        ) {

            $id_card_father = $request->file('id_card_father')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $id_card_father);
            $path = $request->file('id_card_father')->storeAs('ImgAll/id_card/id_card_father', $compPic1);

            $id_card_mother = $request->file('id_card_mother')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_mother);
            $path = $request->file('id_card_mother')->storeAs('ImgAll/id_card/id_card_mother', $compPic2);

            $house_father = $request->file('house_father')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $house_father);
            $path = $request->file('house_father')->storeAs('ImgAll/house_regis/house_father', $compPic3);

            $house_mother = $request->file('house_mother')->getClientOriginalName();
            $compPic4 = str_replace(' ', '_', $house_mother);
            $path = $request->file('house_mother')->storeAs('ImgAll/house_regis/house_mother', $compPic4);

            $front_grade = $request->file('front_grade')->getClientOriginalName();
            $compPic5 = str_replace(' ', '_', $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic5);

            $back_grade = $request->file('back_grade')->getClientOriginalName();
            $compPic6 = str_replace(' ', '_', $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic6);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalName();
            $compPic7 = str_replace(' ', '_', $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic7);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalName();
            $compPic8 = str_replace(' ', '_', $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic8);


            $photo->id_card_father = $compPic1;
            $photo->id_card_mother = $compPic2;
            $photo->house_father = $compPic3;
            $photo->house_mother = $compPic4;
            $photo->front_grade = $compPic5;
            $photo->back_grade = $compPic6;
            $photo->birth_certificate = $compPic7;
            $photo->disability_certificate = $compPic8;

            $photo->save();
        } elseif (
            $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
            && $request->hasFile('front_grade')  && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')
        ) {

            $id_card_parent = $request->file('id_card_parent')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalName();
            $compPic4 = str_replace(' ', '_', $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalName();
            $compPic5 = str_replace(' ', '_', $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $photo->id_card_parent = $compPic1;
            $photo->house_parent = $compPic2;
            $photo->front_grade = $compPic3;
            $photo->back_grade = $compPic4;
            $photo->birth_certificate = $compPic5;

            $photo->save();
        } elseif (
            $request->hasFile('id_card_parent')  && $request->hasFile('house_parent')
            && $request->hasFile('front_grade') && $request->hasFile('back_grade')
            && $request->hasFile('birth_certificate')  && $request->hasFile('disability_certificate')
        ) {
            
            $id_card_parent = $request->file('id_card_parent')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $id_card_parent);
            $path = $request->file('id_card_parent')->storeAs('ImgAll/id_card/id_card_parent', $compPic1);

            $house_parent = $request->file('house_parent')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $house_parent);
            $path = $request->file('house_parent')->storeAs('ImgAll/house_rigis/house_parent', $compPic2);

            $front_grade = $request->file('front_grade')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $front_grade);
            $path = $request->file('front_grade')->storeAs('ImgAll/front_grade', $compPic3);

            $back_grade = $request->file('back_grade')->getClientOriginalName();
            $compPic4 = str_replace(' ', '_', $back_grade);
            $path = $request->file('back_grade')->storeAs('ImgAll/back_grade', $compPic4);

            $birth_certificate = $request->file('birth_certificate')->getClientOriginalName();
            $compPic5 = str_replace(' ', '_', $birth_certificate);
            $path = $request->file('birth_certificate')->storeAs('ImgAll/birth_certificate', $compPic5);

            $disability_certificate = $request->file('disability_certificate')->getClientOriginalName();
            $compPic6 = str_replace(' ', '_', $disability_certificate);
            $path = $request->file('disability_certificate')->storeAs('ImgAll/disability_certificate', $compPic6);

            $photo->id_card_parent = $compPic1;
            $photo->house_parent = $compPic2;
            $photo->front_grade = $compPic3;
            $photo->back_grade = $compPic4;
            $photo->birth_certificate = $compPic5;
            $photo->disability_certificate = $compPic6;

            $photo->save();
        }

        $data->status_report = $request->status_report;
        $data->status_tranfer = $request->status_tranfer;

        $data->save();
        return redirect('/Newstudent/documentM4');
    }

    public function shownewstudentm4($id)
    {
        $data = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.show-newstudentm4byID', compact('data'));
    }

    //statusPic
    public function showStatusPic($id)
    {
        $data1 = newstudentm4Model::findOrFail($id);

        $pic = $data1->id_number;
        $data2 = DB::table('photo_student')
        ->where('student_idcard', '=', $pic)
        ->first();
        return view('Newstudent.StatusPic.status-picM4', [
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    public function updatePic(Request $request, $id)
    {
        $newstudentm1Model = newstudentm4Model::find($id);
        $newstudentm1Model->update([
            'status_pic' => $request->get('status_pic'),
            'status_idnumber_pic' => $request->get('status_idnumber_pic'),
            'status_house_pic' => $request->get('status_house_pic'),
            'status_grade_pic' => $request->get('status_grade_pic'),
            'status_rigis' => $request->get('status_rigis'),
            'status_picall' => $request->get('status_picall'),
            'status_report' => $request->get('status_report'),
        ]);

        return redirect('/SortNewstudentM1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        if (
            $request->hasFile('profile_img') !== null && $request->hasFile('id_card_student') !== null
            && $request->hasFile('house_student') !== null && $request->hasFile('student_submit') !== null
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalName();
            $compPic4 = str_replace(' ', '_', $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('id_number'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
                "house_student" => $compPic3,
                "student_submit" => $compPic4,
            ]);
            $pic2->save();

        } elseif (
            $request->hasFile('profile_img') !== null && $request->hasFile('id_card_student') !== null
            && $request->hasFile('house_student') !== null
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('id_number'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
                "house_student" => $compPic3,
            ]);
            $pic2->save();

        } elseif ($request->hasFile('profile_img') !== null && $request->hasFile('id_card_student') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $pic2 = new photostudentModel([
                "student_idcard" => $request->get('id_number'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
            ]);
            $pic2->save();

        } elseif ($request->hasFile('profile_img') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $pic1 = new photostudentModel([
                "student_idcard" => $request->get('id_number'),
                "profile_img" => $compPic1,
            ]);
            $pic1->save();
        }

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
            "onet_sci" => $request->get('onet_sci'),
            "onet_math" => $request->get('onet_math'),
            "onet_thai" => $request->get('onet_thai'),
            "onet_eng" => $request->get('onet_eng'),
            "name_cen" => $request->get('name_cen'),
            "student_id" => $request->get('student_id'),
            "status_rigis" => $request->get('status_rigis'),
            "status_pic" => $request->get('status_pic'),
            "status_picall" => $request->get('status_picall'),
            "status_idnumber_pic" => $request->get('status_idnumber_pic'),
            "status_house_pic" => $request->get('status_house_pic'),
            "status_grade_pic" => $request->get('status_grade_pic'),
            "date" => $date,
        ]);
        $post->save();
        return redirect('/check/status');
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
        return view('Newstudent.newstudentm4byID', compact('data'));
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
        $photo = photostudentModel::find($id);

        if (
            $request->get('profile_img') !== null && $request->get('id_card_student') !== null
            && $request->get('house_student') !== null && $request->get('student_submit') !== null
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $student_submit = $request->file('student_submit')->getClientOriginalName();
            $compPic4 = str_replace(' ', '_', $student_submit);
            $path = $request->file('student_submit')->storeAs('ImgAll/student_submit', $compPic4);

            $photo->student_idcard = $request->id_number;
            $photo->profile_img = $compPic1;
            $photo->id_card_student = $compPic2;
            $photo->house_student = $compPic3;
            $photo->student_submit = $compPic4;

            $photo->save();

        } elseif (
            $request->get('profile_img') !== null && $request->get('id_card_student') !== null
            && $request->get('house_student') !== null
        ) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $house_student = $request->file('house_student')->getClientOriginalName();
            $compPic3 = str_replace(' ', '_', $house_student);
            $path = $request->file('house_student')->storeAs('ImgAll/house_regis/house_student', $compPic3);

            $photo->student_idcard = $request->id_number;
            $photo->profile_img = $compPic1;
            $photo->id_card_student = $compPic2;
            $photo->house_student = $compPic3;

            $photo->save();

        } elseif ($request->get('profile_img') !== null && $request->get('id_card_student') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $photo->student_idcard = $request->id_number;
            $photo->profile_img = $compPic1;
            $photo->id_card_student = $compPic2;

            $photo->save();

        } elseif ($request->get('profile_img') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $photo->student_idcard = $request->id_number;
            $photo->profile_img = $compPic1;

            $photo->save();
        }


            $newstudentm4Model->prename = $request->prename;
            $newstudentm4Model->fname = $request->fname;
            $newstudentm4Model->surname = $request->surname ;
            $newstudentm4Model->sex = $request->sex;
            $newstudentm4Model->id_number = $request->id_number;
            $newstudentm4Model->day = $request->day;
            $newstudentm4Model->mounth = $request->mounth;
            $newstudentm4Model->year = $request->year;
            $newstudentm4Model->religion = $request->religion;
            $newstudentm4Model->nationality = $request->nationality;
            $newstudentm4Model->origin = $request->origin;
            $newstudentm4Model->father_name = $request->father_name;
            $newstudentm4Model->father_id = $request->father_id;
            $newstudentm4Model->father_job = $request->father_job;
            $newstudentm4Model->father_tel = $request->father_tel;
            $newstudentm4Model->mother_name = $request->mother_name;
            $newstudentm4Model->mother_id = $request->mother_id;
            $newstudentm4Model->mother_job = $request->mother_job;
            $newstudentm4Model->mother_tel = $request->mother_tel;
            $newstudentm4Model->parent = $request->parent;
            $newstudentm4Model->parent_status = $request->parent_status;
            $newstudentm4Model->parent_name = $request->parent_name;
            $newstudentm4Model->parent_id = $request->parent_id;
            $newstudentm4Model->parent_job = $request->parent_job;
            $newstudentm4Model->parent_tel = $request->parent_tel;
            $newstudentm4Model->house_number = $request->house_number;
            $newstudentm4Model->bloc = $request->bloc;
            $newstudentm4Model->street = $request->street;
            $newstudentm4Model->road = $request->road;
            $newstudentm4Model->sub_district = $request->sub_district;
            $newstudentm4Model->district = $request->district;
            $newstudentm4Model->province = $request->province;
            $newstudentm4Model->post = $request->post;
            $newstudentm4Model->final_school = $request->final_school;
            $newstudentm4Model->final_school_sub_district = $request->final_school_sub_district;
            $newstudentm4Model->final_school_district = $request->final_school_district;
            $newstudentm4Model->final_school_province = $request->final_school_province;
            $newstudentm4Model->disabled = $request->disabled;
            $newstudentm4Model->poor_person = $request->poor_person;
            $newstudentm4Model->etc = $request->etc;
            $newstudentm4Model->tel = $request->tel;
            $newstudentm4Model->major_name1 = $request->major_name1;
            $newstudentm4Model->major_name2 = $request->major_name2;
            $newstudentm4Model->major_name3 = $request->major_name3;
            $newstudentm4Model->major_name4 = $request->major_name4;
            $newstudentm4Model->major_name5 = $request->major_name5;
            $newstudentm4Model->major_name6 = $request->major_name6;
            $newstudentm4Model->major_name7 = $request->major_name7;
            $newstudentm4Model->major_name8 = $request->major_name8;
            $newstudentm4Model->major_name9 = $request->major_name9;
            $newstudentm4Model->email = $request->email;
            $newstudentm4Model->father_namecen = $request->father_namecen;
            $newstudentm4Model->mother_namecen = $request->mother_namecen;
            $newstudentm4Model->parent_namecen = $request->parent_namecen;
            $newstudentm4Model->father_surname = $request->father_surname;
            $newstudentm4Model->mother_surname = $request->mother_surname;
            $newstudentm4Model->parent_surname = $request->parent_surname;
            $newstudentm4Model->father_prename = $request->father_prename;
            $newstudentm4Model->mother_prename = $request->mother_prename;
            $newstudentm4Model->parent_prename = $request->parent_prename;
            $newstudentm4Model->name_cen = $request->name_cen;
            $newstudentm4Model->student_id = $request->student_id;
            $newstudentm4Model->status_rigis = $request->status_rigis;
            $newstudentm4Model->status_pic = $request->status_pic;
            $newstudentm4Model->status_picall = $request->status_picall;
            $newstudentm4Model->status_idnumber_pic = $request->status_idnumber_pic;
            $newstudentm4Model->status_house_pic = $request->status_house_pic;
            $newstudentm4Model->status_grade_pic = $request->status_grade_pic;
        

        $newstudentm4Model->save();
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
        $newstudentm4->delete();
        return redirect('SortNewstudentM4');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('new_student_register_m4')
        ->where('fname','like', '%' .$search. '%')
        ->orWhere('surname','like', '%' .$search. '%')
        ->orWhere('status_rigis','like', '%' .$search. '%')
        ->orWhere('final_school','like', '%' .$search. '%')->paginate(10);
        return view('Newstudent.sortnewstudentm4', ['data' => $data]);
    }

    public function searchstatus(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m4')
        ->where('id_number','like', '%' .$search. '%')->paginate(10);
        return view('Newstudent.success-statuscheck.check-statusM4-onsubmit', ['datas' => $datas]);

    }

    //ส่งเอกสารรายงานตัว
    public function searchdocument(Request $request)
    {
        $search = $request->get('search');
        $datas = DB::table('new_student_register_m4')
            ->where('id_number', 'like', '%' . $search . '%')->paginate(10);
        return view('Newstudent.Newstudent-document.document-statusM4-onsubmit', ['datas' => $datas]);
    }

    //Report
    public function reportExel(Request $request)
    {
        //โรงเรียนในเขต
        $search = $request->get('search');
        
        $partition = DB::table('new_student_register_m4')
            ->where('date', 'like', '%' . $search . '%')
            ->where('final_school', '=', 'โรงเรียนพร้าววิทยาคม')
            ->get();
        $partitionCount = $partition->count();

        $dateM1 = DB::table('new_student_register_m4')
        ->where('date', 'like', '%' . $search . '%')
        ->first();
        

        //โรงเรียนทั้งหมด
        $dataAll = DB::table('new_student_register_m4')
            ->where('date', 'like', '%' . $search . '%')
            ->get();
        $dataCountAll = $dataAll->count();

        //โรงเรียนนอกเขต
        $sum = $dataCountAll - $partitionCount;

        //ดรงเรียนทั้งหมดโดยไม่ต้องกดค้นหา
       

        $partitionAll = DB::table('new_student_register_m4')
            ->where('final_school', '=', 'โรงเรียนพร้าววิทยาคม')
            ->get();
        $partitionAllCount = $partitionAll->count();


        //โรงเรียนทั้งหมด
        $dataAlls = DB::table('new_student_register_m4')
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
                'dateM1' => $dateM1
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
}
