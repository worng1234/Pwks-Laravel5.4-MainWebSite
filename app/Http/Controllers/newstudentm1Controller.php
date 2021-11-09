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
        $post = new newstudentm1Model();

            //pic
            // $completeFileName = $request->file('pic')->getClientOriginalName();
            // $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            // $ext = $request->file('pic')->getClientOriginalExtension();
            // $compPic = str_replace(' ', '_', $fileNameOnly).'.'. $ext;
            // $path = $request->file('pic')->move(public_path().'public/newstudentm1PIC', $compPic);
            // //id_number_pic
            // $completeFileNameIDNUMBER = $request->file('id_number_pic')->getClientOriginalName();
            // $fileNameIDNUMBEROnly = pathinfo($completeFileNameIDNUMBER, PATHINFO_FILENAME);
            // $IDNUMBERext = $request->file('id_number_pic')->getClientOriginalExtension();
            // $compIDNUMBER = str_replace(' ', '_', $fileNameIDNUMBEROnly). '.'. $IDNUMBERext;
            // $pathPDF = $request->file('id_number_pic')->storeAs('public/newstudentm1IDNUMBER', $compIDNUMBER);
            // //house_pic
            // $completeFileNameHOUSE = $request->file('house_pic')->getClientOriginalName();
            // $fileNameHOUSEOnly = pathinfo($completeFileNameHOUSE, PATHINFO_FILENAME);
            // $HOUSEext = $request->file('house_pic')->getClientOriginalExtension();
            // $compHOUSE = str_replace(' ', '_', $fileNameHOUSEOnly). '.'. $HOUSEext;
            // $pathPDF = $request->file('house_pic')->storeAs('public/newstudentm1HOUSE', $compHOUSE);
            //information
            // $post->pic = $request->input($compPic);
            // $post->id_number_pic = $request->input($compIDNUMBER);
            // $post->house_pic = $request->input($compHOUSE);
            $post->idNumber = $request->input('idNumber');
            $post->day = $request->input('day');
            $post->mounth = $request->input('mounth');
            $post->year = $request->input('year');
            $post->fname = $request->input('fname');
            $post->prename = $request->input('prename');
            $post->surname = $request->input('surname');
            $post->sex = $request->input('sex');
            $post->religion = $request->input('religion');
            $post->nationality = $request->input('nationality');
            $post->origin = $request->input('origin');
            $post->disabled = $request->input('disabled');
            $post->poorPerson = $request->input('poorPerson');
            $post->etc = $request->input('etc');
            $post->tel = $request->input('tel');
            $post->email = $request->input('email');
            $post->nameCen = $request->input('nameCen');
            $post->father_prename = $request->input('father_prename');
            $post->fatherName = $request->input('fatherName');
            $post->fatherNamecen = $request->input('fatherNamecen');
            $post->fatherSurname = $request->input('fatherSurname');
            $post->fatherId = $request->input('fatherId');
            $post->fatherJob = $request->input('fatherJob');
            $post->fatherTel = $request->input('fatherTel');
            $post->mother_prename = $request->input('mother_prename');
            $post->motherName = $request->input('motherName');
            $post->motherNamecen = $request->input('motherNamecen');
            $post->motherSurname = $request->input('motherSurname');
            $post->motherId = $request->input('motherId');
            $post->motherJob = $request->input('motherJob');
            $post->motherTel = $request->input('motherTel');
            $post->parent = $request->input('parent');
            $post->parent_prename = $request->input('parent_prename');
            $post->parentName = $request->input('parentName');
            $post->parentNamecen = $request->input('parentNamecen');
            $post->parentSurname = $request->input('parentSurname');
            $post->parentId = $request->input('parentId');
            $post->parentJob = $request->input('parentJob');
            $post->parentTel = $request->input('parentTel');
            $post->houseNumber = $request->input('houseNumber');
            $post->street = $request->input('street');
            $post->bloc = $request->input('bloc');
            $post->road = $request->input('road');
            $post->subDistrict = $request->input('subDistrict');
            $post->district = $request->input('district');
            $post->province = $request->input('province');
            $post->post = $request->input('post');
            $post->finalSchool = $request['finalSchool'];
            $post->finalSchoolSubDistrict = $request->input('finalSchoolSubDistrict');
            $post->finalSchoolDistrict = $request->input('finalSchoolDistrict');
            $post->finalSchoolProvince = $request->input('finalSchoolProvince');
        
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
        return redirect()->route('SortNewstudentM1.index')
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
        return response()->json(null, 204);
    }
}
