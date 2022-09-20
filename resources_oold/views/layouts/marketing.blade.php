<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Marketing TSUL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assetsloader/img/favicon.png" rel="icon">
    <link href="assetsloader/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsloader/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsloader/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsloader/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsloader/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsloader/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsloader/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsloader/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsloader/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v2.2.0
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style type="text/css">
        .link_button{
            color: white;
        }
    </style>
</head>

<body>

<!-- ======= Header ======= -->
<div style="width: 100%; z-index: 500; position: fixed; padding-top: 3px; padding-bottom: 3px;">
    <marquee direction="left" class="fiolet-link-time" style="color: white; font-weight: bold">Hozirda sayt sinov rejimida ishlamoqda.</marquee>
</div>

    @include('site.includes.marketingheader')

<!-- End Header -->

<!-- ======= Hero Section ======= -->



<section id="hero" class="d-flex align-items-center">

@yield('content')


</section>

<!-- End #main -->

<!-- ======= Footer ======= -->


<footer id="footer">
    @include('site.includes.marketingfooter')
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assetsloader/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assetsloader/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="assetsloader/js/main.js"></script>

{{-- <script>
window.replainSettings = { id: '04121925-88c7-4603-9f3b-833d3689ca7e' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script> --}}

</body>

</html>
