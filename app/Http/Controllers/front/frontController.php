<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Program;
use App\DonationConfirmation;

class frontController extends Controller
{
    public function index(){
        $programs = Program::all();
        return view('welcome', ['programs' => $programs]);
    }

    public function donasi($id){
        $program = Program::find($id);
        return view('donasi', ['program' => $program]);
    }

    public function store(Request $request){
        DonationConfirmation::create($request->all());
        return redirect('/');
    }

    public function daftarprogram(){
        $programs = Program::all();
        return view('daftarprogram', ['programs' => $programs]);
    }

    public function konfirmasi(){
        $programs = Program::all();
        return view('konfirmasi', ['programs' => $programs]);
    }
}
