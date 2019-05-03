<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terima Kasih</title>
    <link href="{{asset('front-assets/css/bootstrap.css')}}" rel="stylesheet">
    <style>

    .contain-card{
        margin: 30px 300px;
    }

    .info-program{
        background: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .card-thx{
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        margin-top: 20px; 
        padding: 20px; 
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.2);
    }

    .caption{
        border: 1px solid #eaeaea;
        padding: 5px;
        text-align: justify;
    }

    img{
        width: 90%;
        margin-top: 25px;
    }

    .btn-back{
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        background: #f0f0f0;
    }

    @media(max-width: 720px){
        .contain-card{
            margin: 20px 20px;
        }
    }


    </style>
</head>
<body>
    
    <div class="contain-card">
        <div class="card-thx">
            <div class="card-title container">
                <h2>Terima Kasih <i class="fa fa-heart"></i></h2>
            </div>
            <div class="card-body">
                    <div class="info-program">
                        <div class="container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{$program->getFoto()}}" alt="ProgramImages">
                                    </div>
            
                                    <div class="col-9 mt-4">
                                        <span>Anda telah berdonasi sebesar <strong>{{$donatur->nominal_donasi}}</strong> untuk :</span>
                                        <p  class="text-uppercase"><strong>{{$program->title}}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="caption mt-2">
                        <div class="container">
                        <p>Berapapun uang yang Anda berikan, itu akan sangat membantu bagi mereka yang membutuhkan. Terima Kasih telah berdonasi, semoga amal ibadah Anda diterima disisi Allah SWT.</p>
                        </div>
                    </div>

                    <a href="/" class="btn btn-back mt-3">Kembali</a>
            </div>
        </div>        
    </div>
    
    <script src="{{asset('front-assets/js/jquery.js')}}"></script>
  <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
</body>
</html>