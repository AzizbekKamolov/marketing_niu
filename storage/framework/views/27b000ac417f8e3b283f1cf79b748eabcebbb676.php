<?php $__env->startSection('content'); ?>

    <?php if(\Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" style="position: absolute;
    float: right;
    top: 12%;
    right: 5%;
    z-index: 333;" role="alert">

        <strong><?php echo \Session::get('success'); ?></strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>
    <?php if(\Session::has('danger')): ?>
    <div class="alert alert-danger alert-dismissible fade show" style="position: absolute;
    float: right;
    top: 12%;
    right: 5%;
    z-index: 333;" role="alert">

        <strong><?php echo \Session::get('danger'); ?></strong>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h2><a href="<?php echo e(route('student.agreement.form')); ?>" class="link_button">Talabalar uchun to'lov shartnomasini olish</a></h2>
                <h2><a href="<?php echo e(route('super.super')); ?>" class="link_button">Tabaqalashtirilgan to'lov kontrakt asosida ta`lim olish uchun ariza qoldirish (magistratura bakalavr)</a></h2>
                <h2><a href="<?php echo e(route('shartnoma.lyceum_form')); ?>" class="link_button">Akademik litsey o`quvchilari uchun shartnoma olish</a></h2>
                <h2><a href="<?php echo e(route('payment_check')); ?>" class="link_button">Talabalar uchun to`lovlar tarixi</a></h2>

             
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="assetsloader/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.marketing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>