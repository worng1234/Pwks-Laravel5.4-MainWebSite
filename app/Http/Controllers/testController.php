<?php

namespace App\Http\Controllers;

use App\Models\test;
use App\Models\test2;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function store(Request $request){
        $data['name'] = $request['name'];
        $data['surname'] = $request['surname'];
        test::create($data);
      return response()->json([
          'message' => "Successfully created",
          'success' => true
      ], 200);
    }

    public function imageUp(Request $request){
        $post = new test();

        if($request->hasFile('image')){
            $completeFileName = $request->file('image')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly). '-'. rand(). '_'. time(). '.'. $ext;
            $path = $request->file('image')->storeAs('public/newstudentm1PIC', $compPic);
            $post->image = $compPic;
            //PDF
            $completeFileNamePDF = $request->file('file_pdf')->getClientOriginalName();
            $fileNamePDFOnly = pathinfo($completeFileNamePDF, PATHINFO_FILENAME);
            $PDFext = $request->file('file_pdf')->getClientOriginalExtension();
            $compPDF = str_replace(' ', '_', $fileNamePDFOnly). '.'. $PDFext;
            $pathPDF = $request->file('file_pdf')->storeAs('public/newstudentm1PDF', $compPDF);
            $post->file_pdf = $compPDF;
            $post->name = $request['name'];
            $post->surname = $request['surname'];
        }
        if($post->save()){
            return response()->json([
                'message' => "Successfully created",
                'success' => true
            ], 200);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }
    }

    public function index(){
        $data = test::all();
        return $data;
    }

    public function testID($id){
        return test::find($id);
    }

    public function testpost1(Request $request){
        $post = new test();
        $post->id_number1 = $request['id_number1'];
        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }

    }

    public function testpost2(Request $request){
        $post = new test2();
        $post->id_number2 = $request['id_number2'];
        if($post->save()){
            return response($post);
        }else {
            return ['status' => false, 'message' => 'Post Somthing Wented Wrong'];
        }

    }
}
