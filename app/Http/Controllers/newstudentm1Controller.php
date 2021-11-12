<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Livewire\NewstudnetM1;
use App\Models\newstudentm1Model;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class newstudentm1Controller extends Controller
{
  
    public function index(){
        $datas = newstudentm1Model::all();
        return view('Newstudent.sortnewstudentm1', compact('datas'));
    }

    public function edit($id)
    {
        $newstudentm1Model = newstudentm1Model::findOrFail($id);
        return view('Newstudent.fixprofilenewstudentm1', compact('newstudentm1Model'));
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
            
        $post = new newstudentm1Model([
            "pic" => $compPic1,
            "id_number_pic" => $compPic2,
            "house_pic" => $compPic3,
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
        ]);
        $post->save();
        return redirect('/SortNewstudentM1');
            
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
    public function update(Request $request,$id)
    {
        $newstudentm1Model = newstudentm1Model::find($id);
        $newstudentm1Model->update($request->all());
        return redirect('SortNewstudentM1')
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
}
