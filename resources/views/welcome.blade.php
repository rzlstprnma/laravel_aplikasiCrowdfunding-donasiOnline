@extends('layouts.front-layouts')
@section('title')
    Halaman Utama
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('front-assets/css/index.css')}}">
@endsection

@section('content') 

        <div class="jumbotron-fluid"></div>

        <div class="aksi">
            <p>Galang Dana untuk Hal yang Anda Perjuangkan</p>
            <a href="/program" class="btn btn-galang">Galang Dana Sekarang</a>
        </div>

        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <span>100000</span>
                        <p>Donatur</p>
                    </div>

                    <div class="col-4">
                        <span>100000</span>
                        <p>Donatur</p>
                    </div>

                    <div class="col-4">
                         <span>100000</span>
                        <p>Donatur</p>
                    </div>
                </div>
            </div>
        </div>


    <section class="section-2">
        <div class="header mt-4">
            <span>
                Program Pilihan
            </span>
            <hr>
        </div>

        <div class="content">
                <div class="row">
                    @foreach ($programs as $program)
                    <div class="col-lg-4 col-md-6 pl-4">
                        <a href="/donasi/{{$program->id}}">
                        <div class="card">
                            <img src="{{$program->getFoto()}}" alt="Program Image">

                            <div class="container mt-3">
                                    <p class="title">{{$program->title}}</p><span>
                                    <div class="brief">
                                        <p>{{$program->brief_explanation}}</p>
                                    </div>
                            </div>
                                    <div class="programs-info">
                                    <div class="waktu">
                                        <div class="container">
                                        <span>Kategori</span><p>Kemanusiaan</p>
                                        <span>Berakhir Pada</span><p>{{$program->time_is_up}}</p>
                                        </div>
                                    </div>

                                    <div class="dana">
                                        <div class="container">
                                        <span>Terkumpul</span><p class="collected">@if ($program->donation_collected == 0)
                                            0
                                        @else
                                        {{$program->donation_collected}}
                                        @endif</p>
                                        <span>Target</span><p>{{$program->donation_target}}</p>
                                        </div>
                                    </div>
                                    </div>
                            

                            </div>
                    </div></a>
                    @endforeach
                </div>
            </div>

        <div class="foot">
            <button class="btn btn-more">Program Lainnya</button>
        </div>
    </section>

    <section class="section-2">
            <div class="header mt-4">
                <span>
                    Program Terbaru
                </span>
                <hr>
            </div>
    
            <div class="content">
                    <div class="row">
                        @foreach ($programs as $program)
                        <div class="col-lg-4 pl-4">
                            <a href="/donasi/{{$program->id}}">
                            <div class="card">
                                <img src="{{$program->getFoto()}}" alt="Program Image">
    
                                <div class="container mt-3">
                                        <p class="title">{{$program->title}}</p><span>
                                        <div class="brief">
                                            <p>{{$program->brief_explanation}}</p>
                                        </div>
                                </div>
                                <div class="programs-info">
                                        <div class="waktu">
                                            <div class="container">
                                            <span>Kategori</span><p>Kemanusiaan</p>
                                            <span>Berakhir Pada</span><p>{{$program->time_is_up}}</p>
                                            </div>
                                        </div>
    
                                        <div class="dana">
                                            <div class="container">
                                            <span>Terkumpul</span><p>@if ($program->donation_collected == 0)
                                                0
                                            @else
                                            {{$program->donation_collected}}
                                            @endif</p>
                                            <span>Target</span><p>{{$program->donation_target}}</p>
                                            </div>
                                        </div>
                                        </div>

                                </div></a>
                            </div>
                        @endforeach
                    </div>
                </div>
    
            <div class="foot">
                <button class="btn btn-more">Program Lainnya</button>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <span>Media Sosial</span><hr>
                        <ul>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 mt-4">
                        <span>Daftar Menu</span><hr>
                        <ul>
                            <li><a href="">Daftar Program</a></li>
                            <li><a href="">Program Pilihan</a></li>
                            <li><a href="">Program Terbaru</a></li>
                            <li><a href="">Galang Dana</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <p>Download Aplikasi ini di <span><a href="https://github.com/rzlstprnma/crowdfunding">https://github.com/rzlstprnma/crowdfunding</a></span></p>
                </div>
            </div>
        </footer>

@endsection 
