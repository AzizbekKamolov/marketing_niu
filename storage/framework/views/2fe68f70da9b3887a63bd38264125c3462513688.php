<?php $__env->startSection('content'); ?>
    <section class="section my-4 my-sm-2 my-md-2 my-lg-4 my-xl-5">
        <div class="container-fluid vertical-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <span class="text-danger">
                                            <?php if(session()->has('error')): ?>
                                <div class="alert alert-danger">
                                                            <?php echo e(session()->get('error')); ?>

                                                        </div>
                            <?php endif; ?>
                                        </span>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="<?php echo e(route('student.agreement.form')); ?>">
                            <div
                                class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg"
                                         src="<?php echo e(asset('marketing2021/img/icons/Payment_agreement.png')); ?>" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">To'lov shartnomasi
                                        (talabalar uchun)</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="<?php echo e(route('student.agreement.form_ttj')); ?>">
                            <div
                                class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" class=""
                                         src="<?php echo e(asset('marketing2021/img/icons/Payment_agreement.png')); ?>" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour"> Talabalar turar joyi uchun
                                        shartnoma</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="<?php echo e(route('super.super')); ?>">
                            <div
                                class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" src="<?php echo e(asset('marketing2021/img/icons/contract.png')); ?>"
                                         width="85px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">Tabaqalashtirilgan to'lov shartnomaga ariza qoldirish  (magistratura bakalavr)</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="<?php echo e(route('lyceum.super.form')); ?>">
                            <div
                                class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" src="<?php echo e(asset('marketing2021/img/icons/contract.png')); ?>"
                                         width="85px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour text-center">Tabaqalashtirilgan to'lov shartnomaga ariza qoldirish (Akademik litsey)</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="<?php echo e(route('student.agreement.lyceum_form')); ?>">
                            <div
                                class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" class=""
                                         src="<?php echo e(asset('marketing2021/img/icons/Payment_agreement.png')); ?>" width="100px"
                                         alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour"> Litsey shartnoma</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card cardShadow  border mt-2 mt-sm-2 mt-xl-4">
                        <a class="text-decoration-none" href="<?php echo e(route('payment_check')); ?>">
                            <div
                                class="card-body align-items-center justify-content-center d-flex flex-column my-2 my-sm-0">
                                <div class="col">
                                    <img class="cardImg" src="<?php echo e(asset('marketing2021/img/icons/payment_history.png')); ?>"
                                         width="100px" alt="">
                                </div>
                                <div class="row">
                                    <h5 class="card-title fs-5 fw-bold colorFour">To`lovlar tarixi</h5>

                                </div>
                            </div>
                        </a>

                    </div>
                </div>


            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>