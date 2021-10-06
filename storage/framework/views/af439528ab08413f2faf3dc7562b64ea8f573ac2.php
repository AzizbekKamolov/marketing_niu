<?php $__env->startSection('content'); ?>
    <section class="section my-4 my-sm-2 my-md-2 my-lg-4 my-xl-5">
        <div class="container border border-2 rounded">
            <form action="<?php echo e(route('lyceum.super.get_data')); ?>" method="post" name="super-form" class="register-form" id="register-form">
                        <?php echo e(@csrf_field()); ?>

                <div class="col-12 d-flex">
                    <div class="container-fluid">
                        <div class="row g-2">
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h1 class="colorSix fw-bold fs-4">Akademik litsey uchun tabaqalashtirilgan to'lov kontraktga ariza
                                        </h1>
                                    <?php if(session('error')): ?>
                                        <p class="text-danger">
                                            <?php echo e(session('error')); ?>

                                        </p>
                                    <?php endif; ?>
                                </div>

                                <div class="col-12">
                                    <label for="validationDefaultUsername" class="form-label">O'quvchi ID raqami</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><b>ID</b></span>
                                        <input type="text" class="form-control" id="studentID" name="id_code"
                                               aria-describedby="inputGroupPrepend2" required value="<?php echo e(old('id_code')); ?>">
                                    </div>
                                </div>



































                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="dataBirth" required>
                                        <label class="form-check-label" style="font-size: small;" for="invalidCheck2">
                                            Shaxsiy ma'lumotlarimdan foydalanishlariga roziman.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 my-4">
                                    <button class="btn btn-primary text-center w-25" type="submit">Kirish</button>
                                </div>
                            </div>

                            <div class="col-md-4 paymentBG">
                                <img src="<?php echo e(asset('marketing2021/img/icons/undraw_Contract_re_ves9.svg')); ?>"
                                     class="img-fluid" alt="">
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
        $("#passportSeria").inputmask({"mask": "AA"});
        $("#pasportNumber").inputmask({"mask": "9999999"});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>