<?php

namespace App\Http\Controllers;

use App\Models\newstudentm4Model;
use Illuminate\Http\Request;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //student picture
        $pic = $request->file('pic')->getClientOriginalName();
        $compPic1 = str_replace(' ', '_', $pic);
        $path = $request->file('pic')->storeAs('newstudentm4AllPic/newstudentm4PIC', $compPic1);
        //ID card student picture
        $id_number_pic = $request->file('id_number_pic')->getClientOriginalName();
        $compPic2 = str_replace(' ', '_', $id_number_pic);
        $path = $request->file('id_number_pic')->storeAs('newstudentm4AllPic/newstudentm4IDNUMBER', $compPic2);
        //House student picture
        $house_pic = $request->file('house_pic')->getClientOriginalName();
        $compPic3 = str_replace(' ', '_', $house_pic);
        $path = $request->file('house_pic')->storeAs('newstudentm4AllPic/newstudentm4HOUSE', $compPic3);

        $post = new newstudentm4Model([
            "pic" => $compPic1,
            "id_number_pic" => $compPic2,
            "house_pic" => $compPic3,
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
        ]);
        $post->save();
        return redirect('/SortNewstudentM4');
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
        // return $newstudentm4Model;
        return redirect()->route('SortNewstudentM4.index')
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
        $newstudentm4 = newstudentm4Model::find($id);
        $newstudentm4->delete();
        return response()->json(null, 204);
    }
}
