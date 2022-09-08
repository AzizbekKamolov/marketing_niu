<?php $__env->startSection('content'); ?>
    <section class="section my-4 my-sm-2 my-md-2 my-lg-4 my-xl-5">
        <div class="container border border-2 rounded">

                <div class="col-12 d-flex">
                    <div class="container-fluid">
                        <div class="row g-2">

                            <div class="col-md-8">
                                <div class="text-center">
                                    <h1 class="colorSix fw-bold fs-4">Talabalar uchun to'lov shartnomasini olish</h1>
                                    <span class="text-danger">
                                            <?php if(session()->has('error')): ?>
                                                <div class="alert alert-danger">
                                                            <?php echo e(session()->get('error')); ?>

                                                        </div>
                                            <?php endif; ?>
                                        </span>
                                </div>
                                <form action="<?php echo e(route('student.agreement.get_data')); ?>" method="post" name="super-form"
                                      class="register-form" id="register-form">
                                    <?php echo e(@csrf_field()); ?>

                                    <?php echo e(method_field('POST')); ?>

                                    <div class="col-12">
                                        <label for="validationDefaultUsername" class="form-label">Talaba ID
                                            raqami</label>
                                        <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><b>ID</b></span>
                                            <input type="text" class="form-control" id="studentID" name="id_code"
                                                   aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="validationDefaultUsername" class="form-label">Passport
                                            seriyasi</label>
                                        <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><i class="fas fa-audio-description"></i></span>
                                            <input style="text-transform:uppercase" type="text" maxlength="2"
                                                   name="passport_seria"
                                                   class="form-control" id="passportSeria"
                                                   aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="validationDefaultUsername" class="form-label">Passport
                                            raqami</label>
                                        <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><i class="fas fa-id-card"></i></span>
                                            <input type="text" class="form-control" id="pasportNumber"
                                                   name="passport_number"
                                                   aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="validationDefaultUsername" class="form-label">Tug'ulgan
                                            sanasi</label>
                                        <div class="input-group">
                                        <span class="input-group-text bg-white border-0 iconSpan"
                                              id="inputGroupPrepend2"><i class="far fa-user"></i></span>
                                            <input type="date" class="form-control" id="validationDefaultUsername"
                                                   name="birthday"
                                                   aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="dataBirth" required>
                                            <label class="form-check-label" style="font-size: small;"
                                                   for="invalidCheck2">
                                                Shaxsiy ma'lumotlarimdan foydalanishlariga roziman.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-12 my-4">
                                        <button class="btn btn-primary text-center w-100" type="submit">Shartnomalarni ko'rish</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-4 paymentBG">
                                <img src="<?php echo e(asset('marketing2021/img/icons/undraw_Contract_re_ves9.svg')); ?>"
                                     class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('marketing2021/css/bootstrap-5.0.2-dist/js/bootstrap.min.js')); ?>"></script>

    <!-- FontAwesome -->
    <script src="<?php echo e(asset('marketing2021/css/fontawesome-free-5.15.3-web/js/all.min.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>

    <script>
        $("#studentID").inputmask({"mask": "002-009999999"});
        $("#passportSeria").inputmask({"mask": "AA"});
        $("#pasportNumber").inputmask({"mask": "9999999"});
        $("#pasportJshirNumber").inputmask({"mask": "99999999999999"});
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>