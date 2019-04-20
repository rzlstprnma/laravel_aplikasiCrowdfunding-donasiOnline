@extends('layouts.front-layouts')
@section('title')
    {{$program->title}}
@endsection

@section('style')
<style>
body{
    background: #f2f3f4 !important;
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
    text-decoration: none;
    color: #333;
}

.info-program{
    background: #fff;
    min-height: 110px;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    margin-top: 20px;  
}

.info-program .col-3{
    line-height: 110px; 
}

img{
    width: 90%;
}

.form-donatur{
    border-radius: 8px;
    margin-top: 25px;
    background: #fff;
    border: 1px solid #eaeaea;
}

.btn-donasi{
    width: 100%;
    height: 50px;
    background: #0af;
    color: #fff;
    font-size: 20px;
    font-weight: 200;
}

</style>    
@endsection

@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="info-program">
                <div class="container">
                    <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{$program->getFoto()}}" alt="ProgramImages">
                        </div>

                        <div class="col-9 mt-4">
                            <span>Anda akan berdonasi untuk :</span>  
                            <p><strong>{{$program->title}}</strong></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        <form action="/donasi/{{$program->id}}/donasi/store" method="post">
                {{ csrf_field() }}
            <div class="form-donatur">
                <div class="container mt-4">
                    <div class="container">
                    
                        <label class="sr-only" for="nominal">Nominal donasi</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" name="nominal_donasi" min="1000" class="form-control" id="nominal" placeholder="Nominal Donasi">
                        </div>
                        <input type="hidden" name="program_id" value="{{$program->id}}">
                        <span><a href="/login">Masuk</a> atau lengkapi data dibawah ini</span>
                        <div class="form-group">
                            <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Lengkap">

                            <div class="form-check">
                                <input id="check" type="checkbox" name="nama_donatur" class="form-check-input" value="Hamba Allah">
                                <label for="check" class="form-check-label">Sembunyikan Nama Saya (Hamba Allah)</label>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <textarea name="dukungan" rows="6" class="form-control" placeholder="Tulis Dukungan atau Do'a untuk Penggalangan Dana ini. Contoh: Cepet Sembuh, ya!"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <button class="btn btn-donasi mt-4" type="submit">Donasi Sekarang</button>

        </form>

        </div>
    </div>
</div>
@endsection