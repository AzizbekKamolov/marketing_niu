<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="no-js">

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
    <link href="<?php echo e(asset('assetsloader/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assetsloader/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assetsloader/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assetsloader/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assetsloader/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assetsloader/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assetsloader/vendor/aos/aos.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('assetsloader/css/style.css')); ?>" rel="stylesheet">

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

    <?php echo $__env->make('site.includes.marketingheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- End Header -->

<!-- ======= Hero Section ======= -->



<section id="hero" class="d-flex align-items-center">

<?php echo $__env->yieldContent('content'); ?>


</section>

<!-- End #main -->

<!-- ======= Footer ======= -->


<footer id="footer">
    <?php echo $__env->make('site.includes.marketingfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo e(asset('assetsloader/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/venobox/venobox.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assetsloader/vendor/aos/aos.js')); ?>"></script>

<!-- Template Main JS File -->
<script src="assetsloader/js/main.js"></script>



</body>

</html>
