<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test2;

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
        return view('test.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show( test2 $test )
    {
        return view('test.show',compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = test2::find($id);
        return view('test.edit',compact('data'));
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
        $data->update($request->all());
        return redirect()->route('testup.index')
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
