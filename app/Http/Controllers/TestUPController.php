<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\test2;
use App\Models\test;

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
        return view('testall.index', compact('data'));
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



        $data2 = new test2([
            "id_number2" => $request->get('id_number2'),
            "address" => $request->get('address')
        ]);
        $data2->save();

        return $data2;
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
        $test = test2::find($id);
        return view('testall.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tttt = test2::findOrFail($id);
        return view('testall.edit', compact('tttt'));
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

        $data = test2::find($id);

        if($pic = $request->hasFile('pic')){
            $file = $request->file('pic');
            $fileName = $file->getClientOriginalName();
            $path = $request->file('pic')->storeAs('test', $fileName);

            $file2 = $request->file('pic2');
            $fileName2 = $file2->getClientOriginalName();
            $path = $request->file('pic2')->storeAs('test', $fileName2);

            $data->pic = $fileName;
            $data->pic2 = $fileName2;
            $data->address = $request->address;
            $data->id_number2 = $request->id_number2;
        }
        $data->save();

        //$data->update($request->all());
        return redirect()->route('testall.index')
            ->with('success', 'Test updated successfully');
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
