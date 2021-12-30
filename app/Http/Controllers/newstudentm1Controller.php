<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Livewire\NewstudnetM1;
use App\Models\newstudentm1Model;
use App\Models\photostudentModel;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\DB;

class newstudentm1Controller extends Controller
{

    public function index()
    {
        $datas = newstudentm1Model::all();
        return view('Newstudent.sortnewstudentm1', compact('datas'));
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
        return view('Newstudent.StatusPic.status-picM1', [
            'data1' => $data1,
            'data2' => $data2
        ]);
    }

    public function updatePic(Request $request, $id)
    {
        $newstudentm1Model = newstudentm1Model::find($id);
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

    public function editnewstudentm1($id)
    {
        $newstudentm1Model = newstudentm1Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.editprofilenewstudentm1', compact('newstudentm1Model'));
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
                "student_idcard" => $request->get('idNumber'),
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
                "student_idcard" => $request->get('idNumber'),
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
                "student_idcard" => $request->get('idNumber'),
                "profile_img" => $compPic1,
                "id_card_student" => $compPic2,
            ]);
            $pic2->save();

        } elseif ($request->hasFile('profile_img') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $pic1 = new photostudentModel([
                "student_idcard" => $request->get('idNumber'),
                "profile_img" => $compPic1,
            ]);
            $pic1->save();
        }

        $post = new newstudentm1Model([
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
            "status_pic" => $request->get('status_pic'),
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
        $photo = photostudentModel::find($id);

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

            $photo->student_idcard = $request->idNumber;
            $photo->profile_img = $compPic1;
            $photo->id_card_student = $compPic2;
            $photo->house_student = $compPic3;
            $photo->student_submit = $compPic4;

            $photo->save();

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

            $photo->student_idcard = $request->idNumber;
            $photo->profile_img = $compPic1;
            $photo->id_card_student = $compPic2;
            $photo->house_student = $compPic3;

            $photo->save();

        } elseif ($request->hasFile('profile_img') !== null && $request->hasFile('id_card_student') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $id_card_student = $request->file('id_card_student')->getClientOriginalName();
            $compPic2 = str_replace(' ', '_', $id_card_student);
            $path = $request->file('id_card_student')->storeAs('ImgAll/id_card/id_card_student', $compPic2);

            $photo->student_idcard = $request->idNumber;
            $photo->profile_img = $compPic1;
            $photo->id_card_student = $compPic2;

            $photo->save();

        } elseif ($request->hasFile('profile_img') !== null) {

            $profile_img = $request->file('profile_img')->getClientOriginalName();
            $compPic1 = str_replace(' ', '_', $profile_img);
            $path = $request->file('profile_img')->storeAs('ImgAll/profile_img', $compPic1);

            $photo->student_idcard = $request->idNumber;
            $photo->profile_img = $compPic1;

            $photo->save();
        }


        $newstudentm1Model->prename = $request->prename;
        $newstudentm1Model->fname = $request->fname;
        $newstudentm1Model->surname = $request->surname;
        $newstudentm1Model->sex = $request->sex;
        $newstudentm1Model->idNumber = $request->idNumber;
        $newstudentm1Model->day = $request->day;
        $newstudentm1Model->mounth = $request->mounth;
        $newstudentm1Model->year = $request->year;
        $newstudentm1Model->religion = $request->religion;
        $newstudentm1Model->nationality = $request->nationality;
        $newstudentm1Model->origin = $request->origin;
        $newstudentm1Model->disabled = $request->disabled;
        $newstudentm1Model->poorPerson = $request->poorPerson;
        $newstudentm1Model->etc = $request->etc;
        $newstudentm1Model->tel = $request->tel;
        $newstudentm1Model->email = $request->email;
        $newstudentm1Model->nameCen = $request->nameCen;
        $newstudentm1Model->fatherName = $request->fatherName;
        $newstudentm1Model->fatherNamecen = $request->fatherNamecen;
        $newstudentm1Model->fatherSurname = $request->fatherSurname;
        $newstudentm1Model->fatherId = $request->fatherId;
        $newstudentm1Model->fatherJob = $request->fatherJob;
        $newstudentm1Model->fatherTel = $request->fatherTel;
        $newstudentm1Model->motherName = $request->motherName;
        $newstudentm1Model->motherNamecen = $request->motherNamecen;
        $newstudentm1Model->motherSurname = $request->motherSurname;
        $newstudentm1Model->motherId = $request->motherId;
        $newstudentm1Model->motherJob = $request->motherJob;
        $newstudentm1Model->motherTel = $request->motherTel;
        $newstudentm1Model->parent = $request->parent;
        $newstudentm1Model->parent_status = $request->parent_status;
        $newstudentm1Model->parentName = $request->parentName;
        $newstudentm1Model->parentNamecen = $request->parentNamecen;
        $newstudentm1Model->parentSurname = $request->parentSurname;
        $newstudentm1Model->parentId = $request->parentId;
        $newstudentm1Model->parentJob = $request->parentJob;
        $newstudentm1Model->parentTel = $request->parentTel;
        $newstudentm1Model->father_prename = $request->father_prename;
        $newstudentm1Model->mother_prename = $request->mother_prename;
        $newstudentm1Model->parent_prename = $request->parent_prename;
        $newstudentm1Model->houseNumber = $request->houseNumber;
        $newstudentm1Model->street = $request->street;
        $newstudentm1Model->bloc = $request->bloc;
        $newstudentm1Model->road = $request->road;
        $newstudentm1Model->subDistrict = $request->subDistrict;
        $newstudentm1Model->district = $request->district;
        $newstudentm1Model->province = $request->province;
        $newstudentm1Model->post = $request->post;
        $newstudentm1Model->finalSchool = $request->finalSchool;
        $newstudentm1Model->finalSchoolSubDistrict = $request->finalSchoolSubDistrict;
        $newstudentm1Model->finalSchoolDistrict = $request->finalSchoolDistrict;
        $newstudentm1Model->finalSchoolProvince = $request->finalSchoolProvince;


        $newstudentm1Model->save();
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
        return view('Newstudent.success-statuscheck.check-statusM1-onsubmit', ['datas' => $datas]);
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

}
