<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('front-assets/css/bootstrap.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('front-assets/css/layouts.css')}}">

  @yield('style')
</head>

<body>
  
    <header>
      <div class="nav-bar">
        <a href="/" class="logo">BE HUMAN</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a class="nav-link" href="/daftarprogram">Donasi</a></li>
          <li><a class="nav-link" href="/konfirmasi">Konfirmasi Pendonasian</a></li>
          <li><a class="nav-link" href="/login">Login</a></li>
          <li><a class="nav-link" href="/register">Daftar</a></li>
        </ul>
      </div>
    </header>

  @yield('content')



  <script src="{{asset('front-assets/js/jquery.js')}}"></script>
  <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
 @yield('script')
<script>
    $(window).on('scroll',function(){
    if($(window).scrollTop()){
      $('.nav-bar').addClass('black');
      $('.nav-link').addClass('gelap')
      $('.logo').addClass('dark')
    }else {
      $('.nav-bar').removeClass('black');
      $('.nav-link').removeClass('gelap');
      $('.logo').removeClass('dark')
    }
  })


</script> 


</body>
</html>
