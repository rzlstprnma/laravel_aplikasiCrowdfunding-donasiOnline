@extends('layouts.middle-layouts')

@section('title')
    Daftar Program
@endsection  

<style>
    .box{
        background-color: #c0dee5 !important;
    }
    .card{
        box-shadow: 5px;
        height: 60px;
        word-wrap: break-word;
    }
    .card i{
        font-size: 25px !important;
        line-height: auto;
    }

    .card .container{
        padding: 40px 10px;
    }

</style>

@section('content')
    

    <div class="box">
        <div class="box-header">
            <h3>Daftar Program Dibuat</h3>
        </div>

        <div class="box-body">
            <div class="row">
                @foreach ($programs as $program)
                <div class="col-md-6">
                    <div class="card">
                        <div class="container">
                            {{$program->title}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    

@endsection

@section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


@endsection

