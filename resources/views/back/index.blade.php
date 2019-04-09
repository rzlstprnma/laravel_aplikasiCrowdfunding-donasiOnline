@extends('layouts.back-layouts')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">New Clients</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-people text-info"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">23</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">New Projects</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-folder text-primary"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">169</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Open Projects</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="icon-folder-alt text-danger"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">311</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card material-card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">New Invoices</h5>
                    <div class="d-flex align-items-center mb-2 mt-4">
                        <h2 class="mb-0 display-5"><i class="ti-wallet text-success"></i></h2>
                        <div class="ml-auto">
                            <h2 class="mb-0 display-6"><span class="font-normal">117</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection