@extends('layouts.front-layouts')
@section('title')
    Login
@endsection
@section('style')    
<link href="back-assets/dist/css/style.min.css" rel="stylesheet">
<style>
.head-title h5{
    font-weight: bold;
}
.main-wrapper{
    margin-top: -80px;
}
.nav-bar{
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.logo{
    color: #fff;
    background-color: #000;
}

.nav-bar li a{
    color: #333;
}

</style>
@endsection

@section('content')
<div class="main-wrapper">

    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('back-assets/assets/images/big/auth-bg.jpg')}}) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="head-title">
                        <h5 class="font-medium mb-3">Login</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3" id="loginform" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Adrress" aria-label="Email" aria-describedby="basic-addon1">

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                                </div>


                                <div class="input-group mb-3 container">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group row container">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            <a href="{{ route('password.request') }}" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> Forgot pwd?</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group text-center container">
                                    <div class="col-xs-12 pb-3">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                    </div>
                                </div>

                                <div class="form-group mt-2">
                                    <div class="col-sm-12 text-center">
                                        Don't have an account? <a href="authentication-register1.html" class="text-info ml-1"><b>Sign Up</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




    
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    @section('script')
    <script src="{{asset('back-assets/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('back-assets/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('back-assets/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
    @endsection
