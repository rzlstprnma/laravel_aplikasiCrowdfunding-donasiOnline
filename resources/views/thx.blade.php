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

    body{
        background-color: #f2f2f2;
    }

    .info-program{
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
        background: #fff;
        min-height: 110px;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        margin-top: 20px;  
    }

    .info-program .col-3{
        line-height: 120px !important; 
    }

    img{
        width: 90%;
    }

    .card-thx{
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        margin-top: 20px; 
        padding: 20px; 
    }

    .alert-success{
        border: 1px solid #689b74;
        border-style: dashed;
    }

    .btn-success{
        border-radius: 2px;
        box-shadow: 0px 2px 8px rgba(3, 3, 3, 0.5) !important;
    }

    @media(max-width: 720px){
        .contain-card{
            margin: 20px 20px;
        }

        img{
            transition: .3s ease;
        }

        img:hover{
            transform: scale(1.8);
        }
    }


    </style>
</head>
<body>
    
    <div class="contain-card">
                <div class="info-program">
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{$program->getFoto()}}" alt="ProgramImages">
                                </div>
        
                                <div class="col-9 mt-4">
                                    <span>Terima Kasih Atas Rencana Pendonasian Anda Untuk :</span>
                                    <p  class="text-uppercase"><strong>{{$program->title}}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-thx">
                    <h5>Anda akan berdonasi dengan data sebagai berikut : </h5>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Nama Donatur</td>
                                <th>{{$donatur->nama_donatur}}</th>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <th>{{$donatur->email}}</th>
                            </tr>
                            <tr>
                                <td>Nominal Donasi</td>
                                <th>{{$donatur->nominal_donasi}}</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="alert alert-success">
                        <span>ID Transaksi : <strong>{{$donatur->id_transaksi}}</strong></span><br>
                        <span>Nomor Rekening Tujuan : <strong>{{$program->shelter_account_number}}</strong></span>
                    </div>

                    <p class="text-justify alert alert-success">Silahkan melakukan pembayaran sesuai nominal donasi yang anda berikan ke nomor rekening tujuan juga melakukan konfirmasi pembayaran setelah melakukan pembayaran menggunakan ID transaksi, maka dari itu Anda perlu mengingat ID transaksi yang diberikan. Jika perlu, Anda bisa <i>screenshoot</i> halaman ini</p> 

                    <a href="/" class="btn btn-success">Kembali Kehalaman Utama</a>
                </div>

        </div>
         <script src="{{asset('front-assets/js/jquery.js')}}"></script>
  <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
</body>
</html>