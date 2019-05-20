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
    public function donasikonfir(Request $request, $id){
        $konfirmasi = DonationConfirmation::find($id);
        $collected = DonationConfirmation::where('program_id', $konfirmasi->program_id)->sum('nominal_donasi');
        $program = Program::where('id', $konfirmasi->program_id)->first();
        if($request->file('bukti_pembayaran')){
            $file       = $request->file('bukti_pembayaran');
            $fileName   = $file->getClientOriginalName();
            $request->file('bukti_pembayaran')->move("images/bukti_pembayaran/", $fileName);
            $bukti = $konfirmasi->bukti_pembayaran = $fileName;
            $konfirmasi->update(['isVerified' => 1, 'bukti_pembayaran' => $bukti]);
        }
        $program->update(['donation_collected' => $collected]);

        return redirect()->back();
    }

    public function donasi(){
        $info = DonationConfirmation::where('users_id', Auth::user()->id)->count();
        $donasiCount = DonationConfirmation::where('users_id', Auth::user()->id)->where('isVerified', 1)->count(); 
        $konfirCount = DonationConfirmation::where('users_id', Auth::user()->id)->where('isVerified', 0)->count();
        $donasi = DonationConfirmation::where('users_id', Auth::user()->id)->where('isVerified', 1)->get(); 
        $konfir = DonationConfirmation::where('users_id', Auth::user()->id)->where('isVerified', 0)->get();
        return view('middle.donasi', compact('konfir', 'donasi', 'info', 'donasiCount', 'konfirCount'));
    }

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
        $donatur = DonationConfirmation::where('program_id', $id)->count();
        return view('middle.detailprogram', compact('program', 'devs', 'donatur'));
    }

    public function middle(){
        $program = Program::where('users_id', Auth::user()->id)->count();
        $programPublished = Program::where('users_id', Auth::user()->id)->where('isPublished', 1)->count();
        $programNotPublished = Program::where('users_id', Auth::user()->id)->where('isPublished', 0)->count();
        $donasi = DonationConfirmation::where('users_id', Auth::user()->id)->count();
        $konfir = DonationConfirmation::where('users_id', Auth::user()->id)->where('isVerified', 0)->count(); 
        
        return view('middle.index', compact('program', 'programPublished', 'programNotPublished', 'donasi', 'konfir'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Program::where('users_id', Auth::user()->id)->count();
        $programs = Program::where('users_id', Auth::user()->id)->orderBy('isPublished', 'DESC')->get();
        // if time is up, this destroy
       return view('middle.program', compact('programs', 'info'));
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
        $this->validate( request() , [
            'title' => ['required', 'max:100'],
            'donation_target' => ['required', 'numeric'],
            'brief_explanation' => ['required', 'max:200'],
            'donation_target' => ['required', 'min:7'],
            'description' => ['required'],
            'shelter_account_number' => ['required'],
        ]);

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
        $categories = Category::all();
        $program = Program::find($id);
        return view('middle.edit', compact('program', 'categories'));
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
