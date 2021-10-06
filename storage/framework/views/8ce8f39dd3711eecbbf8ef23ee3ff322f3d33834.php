<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing TSUL</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('marketing2021/img/main_logo.png')); ?>">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo e(asset('marketing2021/css/bootstrap-5.0.2-dist/css/bootstrap.min.css')); ?>">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo e(asset('marketing2021/css/fontawesome-free-5.15.3-web/css/all.min.css')); ?>">

    <!-- Custom css -->
    <link rel="stylesheet" href="<?php echo e(asset('marketing2021/css/style.css')); ?>">
    <?php echo $__env->yieldContent('links'); ?>
</head>

<body>
<?php echo $__env->make('site.includes.header2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('site.includes.footer2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Bootsrap js -->
<script src="<?php echo e(asset('marketing2021/css/bootstrap-5.0.2-dist/js/bootstrap.min.js')); ?>"></script>
<!-- FontAwesome -->
<script src="<?php echo e(asset('marketing2021/css/fontawesome-free-5.15.3-web/js/all.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php echo $__env->yieldContent('js'); ?>
</body>

</html>