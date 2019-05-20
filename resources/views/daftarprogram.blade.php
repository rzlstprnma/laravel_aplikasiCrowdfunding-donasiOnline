@extends('layouts.front-layouts')
@section('title')
    Daftar Program
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/program.css')}}">
@endsection

@section('content')

    <section class="section-1">
        <div class="container">
            <span><strong>Daftar Program</strong></span>
        </div>
    </section>

   <section class="section-2">
       <div class="row m-2">
           <div class="col-lg-3 col-md-6">
               <form action="" method="get">
                   {{ csrf_field() }}
                   <div class="container">
                   <div class="search-contain">
                        <img class="img" src="{{asset('/images/search.svg')}}" id="search-btn">
                        <input class="input" name="search" type="text" id="search" placeholder="">
                        <p class="tip" id="tip">Tekan Enter untuk mencari</p>
                    </div>
                   </div>
               </form> 
               <div class="mr-5">
               <span><strong>Pilih Kategori</strong></span>
                <ul>
                    <a href="/daftarprogram"><li>Tampilkan Semua</li></a>
                    @foreach ($categories as $category)
                    <a href="/program/category/{{$category->id}}"><li>{{$category->category_name}}</li></a>
                    @endforeach
                </ul>
               </div>
           </div>

           <div class="col-lg-9 col-md-6">
                <div class="">
                    <div class="row">
                    @foreach ($programs as $program)

                    <div class="col-lg-6 col-12">
                        <div class="card mt-4">
                            <a href="/donasi/{{$program->id}}">
                            <img src="{{$program->getFoto()}}" alt="Program Images">
                            
                            <div class="container mt-3">
                                    @if ($program->donation_collected >= $program->donation_target)
                                    <div class="badge badge-success">Terdanai <i class="fa fa-check"></i></div>
                            @endif
                                <p class="title">{{$program->title}}</p>
                                <div class="brief">
                                    <p>{{$program->brief_explanation}}</p>
                                </div>
                            </div>

                            <div class="programs-info">
                                <div class="waktu">
                                    <div class="container mt-2">
                                    <span>Kategori</span><p>{{$program->category->category_name}}</p>
                                    <span>Berakhir Pada</span><p>{{$program->time_is_up}}</p>
                                    </div>
                                </div>

                                <div class="dana">
                                    <div class="container mt-2">
                                    <span>Terkumpul</span><p class="collected">
                                    @if($program->donation_collected == 0)
                                        0
                                    @else
                                    {{$program->donation_collected}}
                                    @endif</p>
                                    <span>Target</span><p>{{$program->donation_target}}</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    @endforeach
                </div>
                </div>
           </div>
       </div>
   </section>
@endsection

@section('script')
<script>
    
        let searchBtn = document.getElementById('search-btn');
        let search = document.getElementById('search');
        let tip = document.getElementById('tip');

        let i = 0;
        let message = 'Cari Program berdasar judul';
        let speed = 100;

        searchBtn.addEventListener('click', function(){
            search.style.width = '100%';
            search.style.paddingLeft = '50px';
            search.focus();

            typeWritter();
        });

        function typeWritter(){
            if(i < message.length){
                msg = search.getAttribute('placeholder') + message.charAt(i);
                search.setAttribute('placeholder', msg);
                i++;
                setTimeout(typeWritter, speed);
            }
        }

        search.addEventListener('keydown', function(){
            tip.style.visibility = 'visible';
            tip.style.opacity = '1';
        });
    
    </script>
@endsection