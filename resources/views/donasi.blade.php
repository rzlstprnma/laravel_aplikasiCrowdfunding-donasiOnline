@extends('layouts.front-layouts')

@section('title')
    Donasi
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/donasi.css')}}">
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
  </div>
  <div class="col-md-5 container">
    <div class="card-donasi">
      <span>{{$program->brief_explanation}}</span><br>
      <a href="/donasi/{{$program->id}}/donasi" class="btn btn-donasi mt-4">Donasi Sekarang</a>
    </div><br>
    <h4>Donatur</h4>
    <table class="table table-bordered">
      <tbody>
        @foreach ($program->donatur as $donatur)
        <tr>
          <th>{{$donatur->nama_donatur}}</th>
          <th>{{$donatur->nominal_donasi}}</th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

  <div class="row">
  <div class="col-md-7 col-12">
    <div class="main">
      <input id="tab1" class="input" type="radio" name="tabs" checked>
      <label class="label" for="tab1">Detail</label>
    
      <input id="tab2" class="input" type="radio" name="tabs">
      <label class="label" for="tab2">Laporan Perkembangan</label>
    
      <section id="content1">
        {!! $program->description !!}
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
  </div>
  <div class="col-md-7 col-12"></div>
</div>
</div>
@endsection

@section('script')
    <script>
    $(window).on('scroll',function(){
      if($(window).scrollTop()){
        $('.card-donasi').addClass('card-fixed');
      }else {
        $('.card-donasi').removeClass('card-fixed');
      }
  })
    </script>
@endsection
