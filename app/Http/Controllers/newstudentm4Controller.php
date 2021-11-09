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
        $post = new newstudentm4Model();

        if($request->hasFile('pic')){
            //pic
            $completeFileName = $request->file('pic')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $ext = $request->file('pic')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly). '-'. rand(). '_'. time(). '.'. $ext;
            $path = $request->file('pic')->storeAs('public/newstudentm4PIC', $compPic);
            //id_number_pic
            $completeFileNameIDNUMBER = $request->file('id_number_pic')->getClientOriginalName();
            $fileNameIDNUMBEROnly = pathinfo($completeFileNameIDNUMBER, PATHINFO_FILENAME);
            $IDNUMBERext = $request->file('id_number_pic')->getClientOriginalExtension();
            $compIDNUMBER = str_replace(' ', '_', $fileNameIDNUMBEROnly). '.'. $IDNUMBERext;
            $pathPDF = $request->file('id_number_pic')->storeAs('public/newstudentm4IDNUMBER', $compIDNUMBER);
            //house_pic
            $completeFileNameHOUSE = $request->file('house_pic')->getClientOriginalName();
            $fileNameHOUSEOnly = pathinfo($completeFileNameHOUSE, PATHINFO_FILENAME);
            $HOUSEext = $request->file('house_pic')->getClientOriginalExtension();
            $compHOUSE = str_replace(' ', '_', $fileNameHOUSEOnly). '.'. $HOUSEext;
            $pathPDF = $request->file('house_pic')->storeAs('public/newstudentm4HOUSE', $compHOUSE);
            //information
            $post->pic = $compPic;
            $post->id_number_pic = $compHOUSE;
            $post->house_pic = $compIDNUMBER;
            $post->id_number = $request['id_number'];
            $post->day = $request['day'];
            $post->mounth = $request['mounth'];
            $post->year = $request['year'];
            $post->fname = $request['fname'];
            $post->name_cen = $request['name_cen'];
            $post->prename = $request['prename'];
            $post->surname = $request['surname'];
            $post->sex = $request['sex'];
            $post->religion = $request['religion'];
            $post->nationality = $request['nationality'];
            $post->origin = $request['origin'];
            $post->disabled = $request['disabled'];
            $post->poor_person = $request['poor_person'];
            $post->etc = $request['etc'];
            $post->tel = $request['tel'];
            $post->email = $request['email'];
            $post->father_prename = $request['father_prename'];
            $post->father_name = $request['father_name'];
            $post->father_namecen = $request['father_namecen'];
            $post->father_surname = $request['father_surname'];
            $post->father_id = $request['father_id'];
            $post->father_job = $request['father_job'];
            $post->father_tel = $request['father_tel'];
            $post->mother_prename = $request['mother_prename'];
            $post->mother_name = $request['mother_name'];
            $post->mother_namecen = $request['mother_namecen'];
            $post->mother_surname = $request['mother_surname'];
            $post->mother_id = $request['mother_id'];
            $post->mother_job = $request['mother_job'];
            $post->mother_tel = $request['mother_tel'];
            $post->parent = $request['parent'];
            $post->parent_prename = $request['parent_prename'];
            $post->parent_name = $request['parent_name'];
            $post->parent_namecen = $request['parent_namecen'];
            $post->parent_surname = $request['parent_surname'];
            $post->parent_id = $request['parent_id'];
            $post->parent_job = $request['parent_job'];
            $post->parent_tel = $request['parent_tel'];
            $post->house_number = $request['house_number'];
            $post->street = $request['street'];
            $post->bloc = $request['bloc'];
            $post->road = $request['road'];
            $post->sub_district = $request['sub_district'];
            $post->district = $request['district'];
            $post->province = $request['province'];
            $post->post = $request['post'];
            $post->final_school = $request['final_school'];
            $post->final_school_sub_district = $request['final_school_sub_district'];
            $post->final_school_district = $request['final_school_district'];
            $post->final_school_province = $request['final_school_province'];
            $post->major_name1 = $request['major_name1'];
            $post->major_name2 = $request['major_name2'];
            $post->major_name3 = $request['major_name3'];
            $post->major_name4 = $request['major_name4'];
            $post->major_name5 = $request['major_name5'];
            $post->major_name6 = $request['major_name6'];
            $post->major_name7 = $request['major_name7'];
            $post->major_name8 = $request['major_name8'];
            $post->major_name9 = $request['major_name9'];
            $post->major_name10 = $request['major_name10'];
            $post->onet_sci = $request['onet_sci'];
            $post->onet_math = $request['onet_math'];
            $post->onet_thai = $request['onet_thai'];
            $post->onet_eng = $request['onet_eng'];
            $post->student_id = $request['student_id'];
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
