<?php $__env->startSection('content'); ?>
    <section class="section my-4 my-sm-2 my-md-2 my-lg-4 my-xl-5">
        <div class="container border border-2 rounded">
            <form action="<?php echo e(route('payment_check_result')); ?>" method="post" name="super-form" class="register-form"
                  id="register-form">
                <?php echo e(@csrf_field()); ?>


                <div class="col-12 d-flex">
                    <div class="container-fluid">
                        <div class="row g-2 py-2">

                            <div class="col-md-8">
                                <div class="text-center">
                                    <h1 class="colorSix fw-bold fs-4">Talabalar uchun to'lovlar tarixini ko`rish</h1>
                                    <span class="text-danger">
                                        <?php if(session()->has('error')): ?>
                                            <?php echo e(session()->get('error')); ?>

                                        <?php endif; ?>
                                    </span>
                                </div>

                                <div class="col-12">
                                    <label for="validationDefaultUsername" class="form-label">Talaba ID raqami</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><b>ID</b></span>
                                        <input type="text" class="form-control" id="studentID" name="id_code"
                                               value="<?php echo e(old('id_code')); ?>"
                                               aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>


                                <div class="col-12 my-4">
                                    <button class="btn btn-primary text-center w-25" type="submit">Tekshirish</button>
                                </div>
                            </div>

                            <div class="col-md-4 paymentBG">
                                <img src="<?php echo e(asset('marketing2021/img/icons/undraw_wallet_aym5.svg')); ?>"
                                     class="img-fluid d-sm-block" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>

    <script>
        $("#studentID").inputmask({"mask": "002-009999999"});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>