<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Program;

class backController extends Controller
{
    public function index(){
        return view('back.index');
    }

    public function program(){
        $programs = Program::all();
        return view('back.program');
    }
}
