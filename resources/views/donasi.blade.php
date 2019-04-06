@extends('layouts.front-layouts')

@section('title')
    Donasi
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/donasi.css')}}">
@endsection

@section('content')
    
    <section class="section-1">
        <div class="row m-4">
            <div class="col-md-8">
               <div class="card">
                   <img src="{{$program->getFoto()}}" alt="Program Image">

                   <div class="container mt-3">
                        <p class="title">{{$program->title}}</p><span class="area-name">{{$program->area_name}}</span><hr>  
                        <div class="brief">
                            <p>{{$program->brief_explanation}}</p>
                        </div>
                </div>
                        <table class="table table-bordered">
                          <tbody>
            
                            <tr>
                              <td>Berakhir</td>
                              <td>{{$program->time_is_up}}</td>
                            </tr>
            
                            <tr>
                              <td>Target Donasi</td>
                              <td>{{$program->donation_target}}</td>
                            </tr>
            
                            <tr>
                              <td>Donasi Terkumpul</td>
                              <td>{{$program->donation_collected}}</td>
                            </tr>
                          </tbody>
                        </table>
               </div>
            </div>

            <div class="col-md-4">
                <p class="mt-3">{{$program->brief_explanation}}</p>

                <form action="/donasi/store/{{$program->id}}" class="fixed" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="program_id" value="{{$program->id}}">
                <div class="form-group">
                    <label>Masukan Nominal Donasi</label>
                    <input type="number" class="form-control" min="10000" name="nominal_donasi">
                </div>

                <button class="btn btn-donasi">Donasi Sekarang</button>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        $('.fixed').on('click', function(){
            addClass
        })
    </script>
@endsection