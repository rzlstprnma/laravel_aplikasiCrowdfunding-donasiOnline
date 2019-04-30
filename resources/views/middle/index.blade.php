@extends('layouts.middle-layouts')

@section('title')
    Dashboard
@endsection                 

@section('content')
    
<div class="row">
        <div class="col-md-4">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-user"></i>
              <div class="card-content">
                <h4>Program Dibuat</h4>
                <p>{{$program}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-newspaper-o"></i>
              <div class="card-content">
                <h4>Program Dipublish</h4>
                <p>{{$programPublished}}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-simple-1">
            <div class="card-body"><i class="la la-newspaper-o"></i>
              <div class="card-content">
                <h4>Berdonasi</h4>
                <p>{{$donasi}}</p>
              </div>
            </div>
          </div>
        </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card card-simple-1">
          <div class="card-body"><i class="la la-calendar"></i>
            <div class="card-content">
              <h4>Program Belum Dipublsih (Dalam Proses)</h4>
              <p>{{$programNotPublished}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-simple-1">
          <div class="card-body"><i class="la la-shopping-cart"></i>
            <div class="card-content">
              <h4>Belum Konfirmasi</h4>
              <p>{{$konfir}}</p>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection