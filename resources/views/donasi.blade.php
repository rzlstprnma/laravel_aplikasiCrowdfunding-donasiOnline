@extends('layouts.front-layouts')

@section('title')
    Donasi
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/donasi.css')}}">
    <style>
      .rounded-circle{
        width: 35px !important;
        height: 35px;
      }
      .fyi{
        height: auto;
        background: rgba(244, 244, 244, 0.7);
        color: #4513f3;
      }
    </style>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-7">  
      <h2>{{$program->title}}</h2>
      <div class="card mt-4">
        <img src="{{$program->getFoto()}}" alt="Program Image">
      </div>

      
      <div class="m-4">
        <span>{{$program->brief_explanation}}</span>
      </div>
        <div class="p-3 fyi">
          @if ($program->donation_collected >= $program->donation_target)
           <div class="badge badge-success">Terdanai <i class="fa fa-check"></i></div>
          @endif
          <p>Dibuat Oleh : {{$program->user->name}}</p>
        </div>
    </div>
    <div class="col-md-5 container">
      <div class="card-donasi">
        <span>{{$program->brief_explanation}}</span><br>
        <a href="/donasi/{{$program->id}}/donasi" class="btn btn-donasi mt-4">Donasi Sekarang</a>
      </div><br>
      <h4 class="text-center">Donatur</h4><hr>
      <table class="table table-bordered">
        <tbody>
          @foreach ($program->donatur as $donatur)
          <tr>
            <th style="font-weight: 200;">{{$donatur->nama_donatur}}</th>
            <th>{{$donatur->nominal_donasi}}</th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
{{-- ========== --}}

  <div class="row pb-4">
    <div class="col-md-7 col-12">
      <div class="main">
        <input id="tab1" class="input" type="radio" name="tabs" checked>
        <label class="label" for="tab1">Deskripsi Program</label>
      
        <input id="tab2" class="input" type="radio" name="tabs">
        <label class="label" for="tab2">Laporan Perkembangan</label>
      
        <section id="content1">
          {!! $program->description !!}
          <div class="mt-4"><hr>
            <span id="span">Programnya Mencurigakan ? <button class="btn btn-sm btn-info" id="report">Laporkan</button></span>
            <form id="show" class="mt-2 d-none" action="/report/{{$program->id}}" method="post">
              @csrf
              <input type="hidden" name="program_id" value="{{$program->id}}">
              <div class="form-group">
                <textarea name="report" required class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-sm btn-info">Submit</button>
            </form>
          </div>
        </section>
      
        <section id="content2">
          <div id="accordion">
            @php
                $i = 1;
            @endphp
            @foreach ($devs as $dev)
            <div class="card mt-2">
              <div class="card-header" id="heading-3">
                    <h5 class="mb-0">
                      <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-{{$dev->id}}" aria-expanded="false" aria-controls="collapse-{{$dev->id}}">
                          <span>UPDATE #{{$i++}}</span>
                      </a>
                    </h5>
                  </div>
                  <div id="collapse-{{$dev->id}}" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
                    <div class="card-body">
                      <h2>{{$dev->title}}</h2>
                      <p>{{$dev->created_at->toDateString()}}</p>
                      <br><br>
                      {!! $dev->description !!}
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
        </section>
      </div>


    </div>

    <div class="col-md-5 col-12">
      
    </div>
  </div>


@endsection

@section('script')
    <script>
    $('#report').on('click', function(){
      $('#show').removeClass('d-none')
      $('#span').html('Tuliskan Kecurigaan Anda');
    })

    $(window).on('scroll',function(){
      if($(window).scrollTop()){
        $('.card-donasi').addClass('card-fixed');
      }else {
        $('.card-donasi').removeClass('card-fixed');
      }
    })
    </script>
@endsection
