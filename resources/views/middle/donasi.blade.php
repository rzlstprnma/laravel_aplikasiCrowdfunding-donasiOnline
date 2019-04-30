@extends('layouts.middle-layouts')

@section('title')
    Donasi
@endsection
    <style>
        .contain-card{
        }
    </style>

@section('content')
@if ($info == 0)
    <h2>Anda Belum Pernah Mendonasi</h2>
    <a href="/daftarprogram">Mulai Berdonasi</a>
@else
<div class="container">
        <div class="contain-card">
        @if ($konfirCount == 0)
        <span class="alert alert--warning">Semua Telah Dikonfirmasi</span>
        @else    
        <h3>Butuh Konfirmasi</h3>
        <div class="row">
            @foreach ($konfir as $show)
            <div class="col-lg-4 col-md-6">
                <div class="alert alert--warning alert--invert">
                    <div class="container">
                        <p>{{$show->program->title}}</p>
                        <span>ID Transaksi : <strong>{{$show->id_transaksi}}</strong></span><br>
                        <span>Nominal Donasi : <strong>{{$show->nominal_donasi}}</strong></span>
                        <form class="mt-3" action="/donasi/konfir/{{$show->id}}" method="post" enctype="multipart/form-data">
                            <span>Tambahkan Bukti Pembayaran</span>
                            @csrf
                                <input type="file" name="bukti_pembayaran">

                                <button class="btn btn-secondary mt-3" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        @endif

    <div class="contain-card">
    @if ($donasiCount == 0)
        Belum Ada yang Dikonfirmasi
    @else    
    <h3>Sudah Konfirmasi</h3>
    <div class="row">
        @foreach ($donasi as $showDonasi)
        <div class="col-lg-4 col-md-6">
            <div class="alert alert--success alert--invert">
                <div class="container">
                    <p>{{$showDonasi->program->title}}</p>
                    <span>ID Transaksi : <strong>{{$showDonasi->id}}</strong></span><br>
                    <span>Nominal Donasi : <strong>{{$showDonasi->nominal_donasi}}</strong></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    @endif
</div>
@endif
@endsection
