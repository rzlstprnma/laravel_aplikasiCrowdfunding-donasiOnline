@extends('layouts.back-layouts')
@section('title')
    Dashboard
@endsection
@section('preloader')
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
        <div class="col-md-12 col-lg-4">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Program Dibuat</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-people text-info"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$program}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Program Dipublish</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-folder text-primary"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$programPublished}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Program Pilihan</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-folder-alt text-danger"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$programSelected}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-6">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Kategori Dibuat</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="ti-wallet text-success"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$category}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-md-6">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">User Terdaftar</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="ti-wallet text-success"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">{{$user}}</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

