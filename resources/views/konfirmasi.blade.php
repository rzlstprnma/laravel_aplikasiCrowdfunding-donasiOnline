@extends('layouts.front-layouts')
@section('title')
    Konfirmasi Pendonasian
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/konfirmasi.css')}}">
@endsection

@section('content')
    <div class="container m-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="" method="get">

                        <div class="form-group">
                            <label>Cek Kode Transaksi</label>
                            <input type="text" name="search" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </div>
                    </form>
                </div>

                <div class="card">
                        
                    <p></p>
                
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    @foreach ($programs as $program)
                       <p>{{ $program->nama_donatur }}</p>    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection