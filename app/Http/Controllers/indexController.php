<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\newstudentm1Model;
use App\Models\newstudentm4Model;

class indexController extends Controller
{
    public function index()
    {

        return view('index-eim');
    }
}
