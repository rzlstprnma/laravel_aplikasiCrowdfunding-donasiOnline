@extends('layouts.front-layouts')
@section('title')
    Daftar Program
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/program.css')}}">
@endsection

@section('content')
    <div class="section section-1">
        <div class="row m-3">
            <div class="col-md-3">
                <strong>List Kategori Program</strong>
                <ul>
                    <li>kemanusaiaan</li>
                    <li>Pendidikan</li>
                </ul>
            </div>

            <div class="col-md-9">
                <strong>Daftar Program</strong><br>
                <button class="btn btn-warning"></button>
                <button class="btn btn-warning"></button>
                <button class="btn btn-warning"></button>
                <button class="btn btn-warning"></button>
                <button class="btn btn-warning"></button>
                <button class="btn btn-warning"></button>
            </div>
        </div>
    </div>
@endsection