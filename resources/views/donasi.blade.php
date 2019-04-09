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
                        <p class="title">{{$program->title}}</p>
                        <div class="brief">
                            <p>{{$program->brief_explanation}}</p>
                        </div>
                    </div>
                    <div class="program-info">
                        <div class="waktu">
                            <div class="container">
                            <span>Kategori</span><p>Kemanusiaan</p>
                            <span>Berakhir Pada</span><p>{{$program->time_is_up}}</p>
                            </div>
                        </div>

                        <div class="dana">
                            <div class="container">
                            <span>Terkumpul</span><p class="collected">@if ($program->donation_collected == 0)
                                0
                            @else
                            {{$program->donation_collected}}
                            @endif</p>
                            <span>Target</span><p>{{$program->donation_target}}</p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>

            <div class="col-md-4 donate">
                <p class="mt-3">{{$program->brief_explanation}}</p>

                <form action="/donasi/store/{{$program->id}}" class="fixed" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="program_id" value="{{$program->id}}">
                <div class="form-group">
                    <label>Masukan Nominal Donasi</label>
                    <input type="number" class="form-control" min="10000" step="1000" name="nominal_donasi">
                </div>

                <button class="btn btn-donasi">Donasi Sekarang</button>
                </form>
            </div>
        </div>
    </section>

@endsection
