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

  .data{
    margin-top: -20px;
  }

</style>

@section('content')

  <section class="section-1">
    <p class="create"><a href="{{route('program.create')}}">Buat Program Baru</a></p>
    <div class="row data">
      @foreach ($programs as $program)
      <div class="col-lg-4">
        <div class="card">
            <img src="{{$program->getFoto()}}">

            <div class="container mt-3">
            <p>{{$program->title}}</p><hr>  

            <p>Kategori : <span class="badge badge-warning">
              {{$program->category->category_name}}
            </span></p>
            
            <br>
            <table class="table table--bordered">
              <tbody>
                <tr>
                  <td>Mulai Pada</td>
                  <td>{{$program->start_time}}</td>
                </tr>

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
          <div class="container">
            <table class="table--bordered">
              <tbody>
                <tr>
                  <th><a href="/detailprogram/{{$program->id}}">Detail Program</a></th>
                  <th><a href="/detailpendonasian">Detail Pendonasian</a></th>
                </tr>
                <tr>
                  <th>
                    <form action="{{route('program.destroy', $program->id)}}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-c-danger">Hapus</button>
                    </form>
                  </th>
                  <th><a href="{{route('program.edit', $program->id)}}" >Edit Program</a></th>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
        @endforeach
      </div>

@endsection