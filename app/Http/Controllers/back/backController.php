<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Program;
use App\Category;

class backController extends Controller
{
    public function index(){
        return view('back.index');
    }

    public function program(){
        $programs = Program::all();
        return view('back.program', ['programs' => $programs]);
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
}
