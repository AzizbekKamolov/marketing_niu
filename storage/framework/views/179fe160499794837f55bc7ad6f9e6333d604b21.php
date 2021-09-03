<!DOCTYPE html>
<html lang="en">
<head>
    <title>Marketing TSUL</title>

    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/styles.css')); ?>">
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<!-- APP WRAPPER -->
<div class="app app-fh">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<!-- END APP WRAPPER -->

<!-- IMPORTANT SCRIPTS -->
<script type="text/javascript" src="<?php echo e(asset('admin/js/vendor/jquery/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/vendor/jquery/jquery-ui.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/vendor/bootstrap/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/vendor/moment/moment.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js')); ?>"></script>
<!-- END IMPORTANT SCRIPTS -->
<!-- APP SCRIPTS -->
<script type="text/javascript" src="<?php echo e(asset('admin/js/app.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/app_plugins.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('admin/js/app_demo.js')); ?>"></script>
<!-- END APP SCRIPTS -->
</body>
</html>