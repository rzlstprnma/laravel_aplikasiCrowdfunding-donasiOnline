@extends('layouts.front-layouts')

@section('title')
    Register
@endsection

@section('style')
<link href="back-assets/dist/css/style.min.css" rel="stylesheet">   
<style>
        .head-title h5{
            font-weight: bold;
            font-size: 16px; 
        }
        .main-wrapper{
            margin-top: -150px;
        }
        .nav-bar{
            display: none;
        }
        
        .auth-box{
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.30) !important;
        }
        
        </style>    
@endsection

@section('content')

<div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" >
            <div class="auth-box">
                <div>
                    <div class="head-title">
                        <h5 class="font-medium mb-3">Daftar</h5>
                    </div>
                    <form action="{{route('register')}}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" action="index.html">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control-lg form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{old('name')}}" name="name" type="text" required autofocus placeholder="Name">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Mohon Masukan Nama yang Valid</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-12">
                                        <input class="form-control-lg form-control {{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ old('no_hp') }}" type="number" required placeholder="Nomor Handphone">
                                        @if ($errors->has('no_hp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Mohon Masukan Nomor Handphone yang Valid</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control-lg form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="email" required=" " placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Email ini Sudah Terdaftar</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control-lg form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" required=" " placeholder="Password">
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Password Tidak Boleh Kurang Dari 8 Karakter</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control-lg form-control" type="password" name="password_confirmation" required=" " placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12 pb-3 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">Daftar</button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 ">
                                    <div class="col-sm-12 text-center ">
                                        Sudah Punya Akun? <a href="/login" class="text-info ml-1 "><b>LogIn</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>


@endsection
