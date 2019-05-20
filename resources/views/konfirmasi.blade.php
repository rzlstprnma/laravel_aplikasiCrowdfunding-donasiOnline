@extends('layouts.front-layouts')
@section('title')
    Konfirmasi Pendonasian
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/konfirmasi.css')}}">
    <style>
        

        .search{
            border-radius: 0;
            width: 85%;
            height: 50px;
        }

        .btn-search{
            background: #0af;
            width: 75px;
            height: 50px;
            border-top-right-radius: 3px !important;
            border-bottom-right-radius: 3px !important;
            color: #fff !important;
            border-radius: 0;
        }

        .btn-send{
            background: #0af;
            color: #fff !important;
            border-radius: 2px;
            box-shadow: 0 3px 4px #4444;
        }

        .alert-cek{
            border: 1px solid #0af;
            color: #0af;
            font-weight: bold;
        }

        .alert-inpo{
            background: rgba(113, 206, 252, 0.4);
            color: rgb(009, 109, 300);
            border: 1px solid #0af;
        }
    </style>
@endsection

@section('content')
    <div class="row m-5">
        <div class="col-md-6">
                <div class="container">
                    <div class="alert alert-cek">
                    <p>Cek ID Transaksi Milik Anda</p>
                    <form action="" method="get">
                        <div class="form-group">
                            <input class="search form-control float-left" type="text" name="search">
                        </div>
                        <button class="btn btn-search" type="submit">Cek</button>
                    </form>
                </div>
            </div>
        </div>

            @foreach ($donaturs as $donatur)
            <div class="col-md-6">
                <form action="/konfirmasi/store/{{$donatur->id_transaksi}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="card alert alert-inpo">
                            <span class="pb-2">ID Transaksi : <strong>{{$donatur->id_transaksi}}</strong></span>
                            <span class="pb-2">Nama Lengkap : <strong>{{$donatur->nama_donatur}}</strong></span>
                            <span class="pb-2">Nominal Donasi : <strong>{{$donatur->nominal_donasi}}</strong></span><br>
                        <div class="pb-5 text-dark">
                            <label for="file">Masukan Bukti Pembayaran : </label>
                            <input id="file" type="file" class="d-block" name="bukti_pembayaran">
                        </div>
                        <button type="submit" class="btn btn-send">Kirim</button>
                    </div>
                    </div>
                    @endforeach
                    
                </form>
                
            </div>
        </div>
@endsection