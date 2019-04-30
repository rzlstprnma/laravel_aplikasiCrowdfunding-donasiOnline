@extends('layouts.middle-layouts')

@section('title')
    Daftar Program
@endsection

<style>

 

  img{
    width: 100%;
  }

  .create{
    font-size: 25px;
    font-weight: bold;
  }

 p{
   font-weight: normal !important;
   font-size: 14px !important;
 }

 .btn{
   width: 100%;
 }

</style>

@section('content')
@if ($info == 0)
    <h2 class="alert alert-info">Anda Belum memiliki Program Apapun</h2>
    <a href="/program/create">Buat Program Baru</a>
@endif
<section class="section-1">
  <div class="row">
    @foreach ($programs as $program)
    <div class="col-lg-4">
      <div class="card">
            <img src="{{$program->getFoto()}}">

            <div class="container mt-3">
            @if ($program->isPublished == 1)
            <span class="badge badge-green">Published</span> 
            @else
            <span class="badge badge-red">Dalam Proses</span>             
            @endif
            @if ($program->donation_collected >= $program->donation_target)
                <span class="badge badge-green">Terdanai <i class="la la-check"></i></span>
            @endif
            <h4>{{$program->title}}</h4><br>
            <p>{{$program->brief_explanation}}</p> <hr>

            <p>Kategori : <span class="badge badge-warning">
              {{$program->category->category_name}}
            </span></p>
            <p>Mulai Pada : <span>{{$program->created_at->toDateString()}}</span></p>
            
            
            </div>
          <div class="container mt-4">
            <div class="row">
              <div class="col-6">
                <a class="btn" href="/detailprogram/{{$program->id}}">Detail Program</a>
              </div>
              <div class="col-6">
                <a class="btn" href="{{route('program.edit', $program->id)}}" >Edit Program</a>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <form action="{{route('program.destroy', $program->id)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-c-danger">Hapus</button>
                </form>
              </div>
            </div>
          </div>
          </div>
      </div>
        @endforeach
      </div>
</section>


@endsection