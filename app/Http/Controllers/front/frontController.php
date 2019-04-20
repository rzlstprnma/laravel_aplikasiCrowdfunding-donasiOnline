<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Program;
use App\Development;
use App\DonationConfirmation;

class frontController extends Controller
{
    public function index(){
        $programs = Program::all()->where('isPublished', 1)->where('isSelected', 1);
        $programsNew = Program::orderBy('id', 'DESC')->where('isPublished', 1)->paginate(6);  
        // dd($programsNew);
        return view('welcome', compact('programs', 'programsNew'));
    }

    public function donasi($id){
        $program = Program::find($id);
        $devs = Development::where('program_id', $program->id)->get();
        return view('donasi', ['program' => $program, 'devs' => $devs]);
    }

    public function donasicreate($id){
        $program = Program::find($id);
        return view('createdonasi', ['program' => $program]);
    }

    public function donasistore(Request $request){
        DonationConfirmation::create($request->all());
        return redirect()->back();
    }

    public function daftarprogram(Request $request){
        if($request->has('search')){
            $programs = Program::where('title', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $programs = Program::all();
        }
        $categories = Category::all();
        return view('daftarprogram', ['categories' => $categories], ['programs' => $programs]);
    }

    public function programcategory($id){
        $programCategory = Category::find($id);
        $categories = Category::all();
        $programs = Program::all();
        return view('daftarprogram', compact('programCategory', 'categories', 'programs'));
    }

    public function konfirmasi(Request $request){
        if($request->has('search')){
            DonationConfirmation::where('id', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $programs = DonationConfirmation::all()->where('isVerified', 1); 
        }
        return view('konfirmasi', ['programs' => $programs]);
    }

}
