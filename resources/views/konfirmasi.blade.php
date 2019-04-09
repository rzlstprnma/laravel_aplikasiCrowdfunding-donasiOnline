@extends('layouts.front-layouts')
@section('title')
    Konfirmasi Pendonasian
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/konfirmasi.css')}}">
@endsection

@section('content')
    <div class="card">

        <input type="text" placeholder="cari kode transaksi"><button class="btn btn-warning">Cek</button>

    </div>
@endsection