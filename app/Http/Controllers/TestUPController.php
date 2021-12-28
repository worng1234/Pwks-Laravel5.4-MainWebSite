<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\test2;
use App\Models\test;
use Illuminate\Support\Facades\DB;

class TestUPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = test2::all();
        return view('testall.index', ['data' => $data]);
    }
    public function testmultiup(Request $request){

        
        //$data1[] = $request->id_number2;
        
        for ($i=0; $i < count($request->id_number2); $i++) { 
            $data1[$i] = $request->id_number2[$i];
            $data2[$i] = $request->score[$i];
            $id = $i+1;
            $data = test2::find($id);
            $data->update([
                'id_number2' => $data1[$i],
                'score' => $data2[$i],
            ]);
        }
        return redirect('/testall');
        // return redirect('/testall');
        // $test1 = test2::all();
        // $c1 = count($request->id_number2);
        // // return json_encode(gettype($c1));

        // for ($i=1; $i <= $c1; $i++) { 
        //     //$id = $i;
        //     //$data = test2::find($id);
        //     echo $i;
        // }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createview()
    {
        return view('test');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            "student_id" => "max:8192"
        ]);

        $pic = $request->file('student_id')->getClientOriginalName();
        $compPic1 = str_replace(' ', '_' ,$pic);
        $path = $request->file('student_id')->storeAs('test', $compPic1);

        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $data = new test([
            "name" => $request->get('name'),
            "student_id" => $compPic1,
            "score" => $score = (int)$request->get('score')
        ]);
        $data->save();

        return redirect('/testall');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compic1 = $request->file('file')->getClientOriginalName();
        $compPic = str_replace(' ', '_', $compic1);
        $path = $request->file('file')->storeAs('test', $compPic);

        $compic2 = $request->file('file2')->getClientOriginalName();
        $compPic2 = str_replace(' ', '_', $compic2);
        $path = $request->file('file2')->storeAs('test2', $compPic2);

        $data = new test2([
            "id_number2" => $request->get('id_number2'),
            "address" => $compPic
        ]);
        $data->save();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = test::find($id);
        $sum = test::find($id);
        $sumscore = $sum->score;

        $sum1 = $sumscore - 10;
        return view('testall.show', ['test' => $test, 'sumscore' => $sumscore, 'sum1' => $sum1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student_id = test::find($id);
        return view('testall.edit', compact('student_id'));
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

        $day = date('d');
        $mounth = date('m');
        $year = date('y');
        $date = ($year . '/' . $mounth . '/' . $day);

        $data2 = new test2([
            "id_number2" => $request->get('id_number2'),
            "name" => $request->get('name'),
            "student_id" => $request->get('student_id'),
            "date" => $date,
            "score" => $request->get('score'),
        ]);
        $data2->save();

        $data1 = test::find($id);
        $sumscore = $data1->score;
        $sum = (int)$sumscore - (int)$request->score;
        $data1->score = $sum;
        $data1->save();

        return redirect('/testall');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
