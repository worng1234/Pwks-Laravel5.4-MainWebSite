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
   function agreementNewstudentm1(){
       return view('Newstudent.agreement-newstudentm1');
   }

   function agreementNewstudentm4(){
        return view('Newstudent.agreement-newstudentm4');
    }

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

        if($request->hasFile('pic')){
            //pic
            $completeFileName = $request->file('pic')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $ext = $request->file('pic')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly).'.'. $ext;
            $path = $request->file('pic')->storeAs('public/newstudentm1PIC', $compPic);
            //id_number_pic
            $completeFileNameIDNUMBER = $request->file('id_number_pic')->getClientOriginalName();
            $fileNameIDNUMBEROnly = pathinfo($completeFileNameIDNUMBER, PATHINFO_FILENAME);
            $IDNUMBERext = $request->file('id_number_pic')->getClientOriginalExtension();
            $compIDNUMBER = str_replace(' ', '_', $fileNameIDNUMBEROnly). '.'. $IDNUMBERext;
            $pathPDF = $request->file('id_number_pic')->storeAs('public/newstudentm1IDNUMBER', $compIDNUMBER);
            //house_pic
            $completeFileNameHOUSE = $request->file('house_pic')->getClientOriginalName();
            $fileNameHOUSEOnly = pathinfo($completeFileNameHOUSE, PATHINFO_FILENAME);
            $HOUSEext = $request->file('house_pic')->getClientOriginalExtension();
            $compHOUSE = str_replace(' ', '_', $fileNameHOUSEOnly). '.'. $HOUSEext;
            $pathPDF = $request->file('house_pic')->storeAs('public/newstudentm1HOUSE', $compHOUSE);
            //information
            $post->pic = $compPic;
            $post->id_number_pic = $compIDNUMBER;
            $post->house_pic = $compHOUSE;
            $post->idNumber = $request['idNumber'];
            $post->day = $request['day'];
            $post->mounth = $request['mounth'];
            $post->year = $request['year'];
            $post->fname = $request['fname'];
            $post->prename = $request['prename'];
            $post->surname = $request['surname'];
            $post->sex = $request['sex'];
            $post->religion = $request['religion'];
            $post->nationality = $request['nationality'];
            $post->origin = $request['origin'];
            $post->disabled = $request['disabled'];
            $post->poorPerson = $request['poorPerson'];
            $post->etc = $request['etc'];
            $post->tel = $request['tel'];
            $post->email = $request['email'];
            $post->nameCen = $request['nameCen'];
            $post->father_prename = $request['father_prename'];
            $post->fatherName = $request['fatherName'];
            $post->fatherNamecen = $request['fatherNamecen'];
            $post->fatherSurname = $request['fatherSurname'];
            $post->fatherId = $request['fatherId'];
            $post->fatherJob = $request['fatherJob'];
            $post->fatherTel = $request['fatherTel'];
            $post->mother_prename = $request['mother_prename'];
            $post->motherName = $request['motherName'];
            $post->motherNamecen = $request['motherNamecen'];
            $post->motherSurname = $request['motherSurname'];
            $post->motherId = $request['motherId'];
            $post->motherJob = $request['motherJob'];
            $post->motherTel = $request['motherTel'];
            $post->parent = $request['parent'];
            $post->parent_prename = $request['parent_prename'];
            $post->parentName = $request['parentName'];
            $post->parentNamecen = $request['parentNamecen'];
            $post->parentSurname = $request['parentSurname'];
            $post->parentId = $request['parentId'];
            $post->parentJob = $request['parentJob'];
            $post->parentTel = $request['parentTel'];
            $post->houseNumber = $request['houseNumber'];
            $post->street = $request['street'];
            $post->bloc = $request['bloc'];
            $post->road = $request['road'];
            $post->subDistrict = $request['subDistrict'];
            $post->district = $request['district'];
            $post->province = $request['province'];
            $post->post = $request['post'];
            $post->finalSchool = $request['finalSchool'];
            $post->finalSchoolSubDistrict = $request['finalSchoolSubDistrict'];
            $post->finalSchoolDistrict = $request['finalSchoolDistrict'];
            $post->finalSchoolProvince = $request['finalSchoolProvince'];
        }
        if($post->save()){
            return response()->json([
                'message' => "Successfully created",
                'success' => true,
                'data' => $post
            ], 200);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
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
