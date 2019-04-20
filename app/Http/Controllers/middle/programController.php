<?php

namespace App\Http\Controllers\middle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Category;
use App\Program;
use App\Development;
use App\DonationConfirmation;

class programController extends Controller
{
    public function verify($id){
        $verify = DonationConfirmation::find($id);
        $verify->update(['isVerified' => 1]);

        return redirect()->back();
    }

    public function createlaporanperkembangan($id){
        $program = Program::find($id);
        return view('middle.createdevelopment', ['program' => $program]);
    }
    
    public function storelaporanperkembangan(Request $request){
        $dev = Development::create($request->all());
        return redirect()->route('detail', ['id' => $dev->program_id]);
    }

    public function detailprogram($id){
        $program = Program::find($id);
        $devs = Development::all()->where('program_id', $program->id);

        return view('middle.detailprogram', ['program' => $program], ['devs' => $devs]);
    }

    public function middle(){
        return view('middle.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all()->where('users_id', Auth::user()->id);
       return view('middle.program', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('middle.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate( request() , [
        //     'title' => 'max:100',
        //     'donation_target' => 'numeric',
        // ]);

       $program = Program::create($request->all());
       if($request->hasFile('photo'))
       {
           $request->file('photo')->move('images/program-images/', $request->file('photo')->getClientOriginalName());
           $program->photo = $request->file('photo')->getClientOriginalName();
           $program->save();
       }
        return redirect('/program');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('middle.edit', ['program' => $program]);
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
        $program = Program::find($id);
        $program->update($request->all());
        if($request->hasFile('photo'))
        {
            $request->file('photo')->move('images/program-images/', $request->file('photo')->getClientOriginalName());
            $program->photo = $request->file('photo')->getClientOriginalName();
            $program->update();
        }

        return redirect('/program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Program::destroy($id);
        return redirect()->back();
    }
}
