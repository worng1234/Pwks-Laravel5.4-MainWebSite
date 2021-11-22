<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Livewire\NewstudnetM1;
use App\Models\newstudentm1Model;
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
        $newstudentm1Model = newstudentm1Model::findOrFail($id);
        return view('Newstudent.StatusPic.status-picM1', compact('newstudentm1Model'));
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

        //student picture
        $pic = $request->file('pic')->getClientOriginalName();
        $compPic1 = str_replace(' ', '_', $pic);
        $path = $request->file('pic')->storeAs('newstudentm1AllPic/newstudentm1PIC', $compPic1);
        //ID card student picture
        $id_number_pic = $request->file('id_number_pic')->getClientOriginalName();
        $compPic2 = str_replace(' ', '_', $id_number_pic);
        $path = $request->file('id_number_pic')->storeAs('newstudentm1AllPic/newstudentm1IDNUMBER', $compPic2);
        //House student picture
        $house_pic = $request->file('house_pic')->getClientOriginalName();
        $compPic3 = str_replace(' ', '_', $house_pic);
        $path = $request->file('house_pic')->storeAs('newstudentm1AllPic/newstudentm1HOUSE', $compPic3);
        //Grade student picture
        $grade_pic = $request->file('grade_pic')->getClientOriginalName();
        $compPic4 = str_replace(' ', '_', $grade_pic);
        $path = $request->file('grade_pic')->storeAs('newstudentm1AllPic/newstudentm1GRADE', $compPic4);

        $post = new newstudentm1Model([
            "pic" => $compPic1,
            "id_number_pic" => $compPic2,
            "house_pic" => $compPic3,
            "grade_pic" => $compPic4,
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
        ]);
        $post->save();
        return redirect('/success/rigisM1');
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

        if ($pic = $request->hasFile('pic')) {
            
            $file = $request->file('pic');
            $compic1 = $file->getClientOriginalName();
            $path = $request->file('pic')->storeAs('newstudentm1AllPic/newstudentm1PIC', $compic1);

            $file2 = $request->file('id_number_pic');
            $compic2 = $file2->getClientOriginalName();
            $path = $request->file('id_number_pic')->storeAs('newstudentm1AllPic/newstudentm1IDNUMBER', $compic2);

            $file3 = $request->file('house_pic');
            $compic3 = $file3->getClientOriginalName();
            $path = $request->file('house_pic')->storeAs('newstudentm1AllPic/newstudentm1HOUSE', $compic3);

            $file3 = $request->file('grade_pic');
            $compic4 = $file3->getClientOriginalName();
            $path = $request->file('grade_pic')->storeAs('newstudentm1AllPic/newstudentm1GRADE', $compic4);

            $newstudentm1Model->pic = $compic1;
            $newstudentm1Model->id_number_pic = $compic2;
            $newstudentm1Model->house_pic = $compic3;
            $newstudentm1Model->grade_pic = $compic4;

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
        }

        $newstudentm1Model->save();
        return redirect('/check/statusM1')
            ->with('success', 'Update successfully');
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
}
