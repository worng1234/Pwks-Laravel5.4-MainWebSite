<?php

namespace App\Http\Controllers;

use App\Models\behaviorstudentModel;
use Illuminate\Http\Request;

class behaviorstudentController extends Controller
{
    public function store(Request $request){
        $behavior = behaviorstudentModel::create($request->all());
        return response($behavior, 201);
    }
}
