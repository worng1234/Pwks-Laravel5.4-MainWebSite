<?php

namespace App\Http\Controllers;

use App\Models\newstudentm4Model;
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

    public function editnewstudentm4($id)
    {
        $newstudentm4Model = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.editprofilenewstudentm4', compact('newstudentm4Model'));
    }

    public function shownewstudentm4($id)
    {
        $data = newstudentm4Model::findOrFail($id);
        return view('Newstudent.Edit-Newstudent.show-newstudentm4byID', compact('data'));
    }

    //statusPic
    public function showStatusPic($id)
    {
        $newstudentm4Model = newstudentm4Model::findOrFail($id);
        return view('Newstudent.StatusPic.status-picM4', compact('newstudentm4Model'));
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
        //Grade student picture
        $grade_pic = $request->file('grade_pic')->getClientOriginalName();
        $compPic4 = str_replace(' ', '_', $grade_pic);
        $path = $request->file('grade_pic')->storeAs('newstudentm4AllPic/newstudentm4GRADE', $compPic4);

        $post = new newstudentm4Model([
            "pic" => $compPic1,
            "id_number_pic" => $compPic2,
            "house_pic" => $compPic3,
            "grade_pic" => $compPic4,
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
        return redirect('/success/rigisM4');
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

        if ($pic = $request->hasFile('pic')) {
            
            $file = $request->file('pic');
            $compic1 = $file->getClientOriginalName();
            $path = $request->file('pic')->storeAs('newstudentm4AllPic/newstudentm4PIC', $compic1);

            $file2 = $request->file('id_number_pic');
            $compic2 = $file2->getClientOriginalName();
            $path = $request->file('id_number_pic')->storeAs('newstudentm4AllPic/newstudentm4IDNUMBER', $compic2);

            $file3 = $request->file('house_pic');
            $compic3 = $file3->getClientOriginalName();
            $path = $request->file('house_pic')->storeAs('newstudentm4AllPic/newstudentm4HOUSE', $compic3);

            $file3 = $request->file('grade_pic');
            $compic4 = $file3->getClientOriginalName();
            $path = $request->file('grade_pic')->storeAs('newstudentm4AllPic/newstudentm4GRADE', $compic4);

            $newstudentm4Model->pic = $compic1;
            $newstudentm4Model->id_number_pic = $compic2;
            $newstudentm4Model->house_pic = $compic3;
            $newstudentm4Model->grade_pic = $compic4;
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
            $newstudentm4Model->onet_sci = $request->onet_sci;
            $newstudentm4Model->onet_math = $request->onet_math;
            $newstudentm4Model->onet_thai = $request->onet_thai;
            $newstudentm4Model->onet_eng = $request->onet_eng;
            $newstudentm4Model->name_cen = $request->name_cen;
            $newstudentm4Model->student_id = $request->student_id;
            $newstudentm4Model->status_rigis = $request->status_rigis;
            $newstudentm4Model->status_pic = $request->status_pic;
            $newstudentm4Model->status_picall = $request->status_picall;
            $newstudentm4Model->status_idnumber_pic = $request->status_idnumber_pic;
            $newstudentm4Model->status_house_pic = $request->status_house_pic;
            $newstudentm4Model->status_grade_pic = $request->status_grade_pic;
        

        $newstudentm4Model->save();
        return redirect('/success/checkM4')
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
}
