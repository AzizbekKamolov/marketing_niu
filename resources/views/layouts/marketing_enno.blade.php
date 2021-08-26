<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Marketing TSUL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Font Icon -->
  <link rel="stylesheet" href="{{ asset('assetsform/fonts/material-icon/css/material-design-iconic-font.min.css')  }}">

  <!-- Main css -->
  <link rel="stylesheet" href="{{ asset('assetsform/css/style.css')  }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v2.1.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
    #hero{
    height: auto;
   }
    .link_button{
      color: black;
    }
    .link_button:hover {
      color: #16DF7E;
    }
    @media screen and (max-width: 770px) {
      #hero{
        /*padding-top: 240px !important;*/
      }
    }


  </style>
  @if(Request::is('shartnoma/info') || Request::is('lyceum-info'))
  <style type="text/css">
   #hero{
    height: auto;
   }
   @media screen and (max-width: 770px) {
     .row{
      margin-right: 10px !important;
      margin-left: 10px !important;
     }
     #hero{
      padding-top: 82px !important;
     }
   }
    @media screen and (max-width: 980px) {
     .row{
      margin-right: 30px !important;
      margin-left: 30px !important;
     }
    }
   .row{
    margin-right: 100px !important;
    margin-left: 100px !important;
   }
  </style>
  @endif
  @if(Request::is('check/*'))
  <style type="text/css">
   #hero{
    height: auto;
   }
   @media screen and (max-width: 770px) {
     .row{
      margin-right: 0px !important;
      margin-left: 0px !important;
     }
     #hero{
      padding-top: 82px !important;
     }
   }
    @media screen and (max-width: 980px) {
     .row{
      margin-right: 10px !important;
      margin-left: 10px !important;
     }
     .container{
      padding-right: 0px !important;
      padding-left: 0px !important;
     }
    }
   .row{
    margin-right: 100px;
    margin-left: 100px;
   }
  </style>
  @endif
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">
            TSUL MARKETING
        </a></h1>

      <nav class="nav-menu d-none d-lg-block" >
        <ul>
          <li class="@if( Request::is('shartnoma') ){{'active'}}@endif"><a href="{{ route('shartnoma.form') }}">To'lov shartnomasi</a></li>
          <li class="@if( Request::is('super') || Request::is('check/*') ){{'active'}}@endif"><a href="{{ route('super.super') }}">Tabaqalashtirilgan to'lov kontrakt</a></li>
            <li class="@if( Request::is('lyceum') || Request::is('lyceum') ){{'active'}}@endif"><a href="{{ route('shartnoma.lyceum_form') }}" class="link_button">Litsey shartnoma</a></li>
            <li class="@if( Request::is('payment_check')  ){{'active'}}@endif"><a href="{{ route('payment_check') }}" class="link_button">To'lovlar tarixi</a></li>




        </ul>
      </nav><!-- .nav-menu -->

    </div>

<div style="width: 100%; z-index: 500; padding-top: 3px; padding-bottom: 3px;">
    <marquee direction="left" class="fiolet-link-time" style="color: black; font-weight: bold">Hozirda sayt sinov rejimida ishlamoqda.</marquee>
</div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="margin: 57px auto;" class="d-flex align-items-center">
    @yield('content')

  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer" >
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>TSUL</span></strong>. All Rights Reserved
        <br>
        <strong>Tel:</strong> <span>(+998 71) 233-66-36  (ichki 1081)</span>
      </div>
      <div class="credits">

        Created by <a href="">TSUL Electron university</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Google reCaptcha -->

  <script src="https://www.google.com/recaptcha/api.js"></script>

  @yield('js')

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>


  <script src="{{ asset('inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>

  @yield('js_after')

  <script>

    $('#passport_seria').inputmask(
            "AA"
    );
    $('#passport_number').inputmask(
            "9999999"
    );

    $('.passport_seria_number').inputmask(
            "AA 9999999"
    );
    // $('.number-inputmask').inputmask({
    //   'regex' : '[0-9]*'
    // });
    $('.id-code-inputmask').inputmask({
      'mask' : '002-009999999'
    });
    $('.jshir-inputmask').inputmask({
      'mask' : '99999999999999'
    });
    $('.telefon-inputmask').inputmask({
      'mask' : '+\\9\\98999999999'
    });

     $('.tasdiq').click(function(){
        // alert("dlfdol");
        if(!confirm("Tasdiqlaysizmi ?")) {
            return false;
          }
          $('#hehe').submit();

    });

      $('.super-user-tasdiqlash').click(function(){
        // alert("dlfdol");
        if(!confirm("Tasdiqlaysizmi ?")) {
            return false;
          }
          $('.super-user-form').submit();

    });

  </script>


  <script src="{{ asset('assetsform/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assetsform/js/main.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>
