<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DonationConfirmation;
use App\Program;
use App\Category;
use App\User;
use App\Development;
use App\Report;

class backController extends Controller
{
    public function index(){
        $program = Program::count();
        $programPublished = Program::where('isPublished', 1)->count();
        $programSelected = Program::where('isSelected', 1)->count();
        $user = User::where('role', 0)->count();
        $category = Category::count();
    
        return view('back.index', compact('program', 'programPublished', 'user', 'category', 'programSelected'));
    }

    public function program(){
        $programs = Program::with('report')->get();
        return view('back.program', compact('programs'));
    }

    public function categories(){
        $categories = Category::all();
        return view('back.categories', ['categories' => $categories]);
    }

    public function categoriescreate(Request $request){
        Category::create($request->all());
        return redirect()->back();
    }

    public function published($id){
        $program = Program::find($id);
        if($program->isPublished == 0){
            $program->update(['isPublished' => 1]);
        }else{
            $program->update(['isPublished' => 0]);
        }

        return redirect()->back();
    }

    public function selected($id){
        $program = Program::find($id);
        if($program->isSelected == 0){
            $program->update(['isSelected' => 1]);
        }else{
            $program->update(['isSelected' => 0]);
        }

        return redirect()->back();
    }

    public function destroy($id){
        Category::destroy($id);
        return redirect()->back();
    }

    public function detail($id){
        $program = Program::find($id);
        $donaturCount = DonationConfirmation::where('program_id', $id)->count();
        $devs = Development::where('program_id', $program->id)->get();
        $reports = Report::where('program_id', $program->id)->get();
        return view('back.detail', compact('program', 'donaturCount', 'devs', 'reports'));
    }

    public function hapusProgram($id){
        Program::destroy($id);
        return redirect()->back();
    }

}
