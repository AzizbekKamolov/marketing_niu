<style>
    .unselectable {
        margin: 20px auto;
    }

    .error {
        color: red;
    }
</style>

<?php $__env->startSection('content'); ?>
    <div class="unselectable">
        <main id="main">
            <section id="featured-services" class="featured-services">
                <div class="container">

                    <div class="row">
                        <?php
                            $status_pet = $data->status_petition();
                        ?>
                        <div class="col-md-12 text-center">
                            <div
                                    class="alert <?php if($status_pet['status'] == 1): ?> alert-primary <?php endif; ?> <?php if($status_pet['status'] == 2): ?> alert-info <?php endif; ?> <?php if($status_pet['status'] == 3): ?> alert-success <?php endif; ?>">
                                <?php if($status_pet['status'] == 0): ?> Ariza berilmagan <?php endif; ?>
                                <?php if($status_pet['status'] == 1): ?> Ariza ko`rib chiqilmoqda (Ariza tasdiqlansa siz bilan
                                bog'lanishadi) <?php endif; ?>
                                <?php if($status_pet['status'] == 2): ?> Ariza ko`rildi (Siz bilan bog'lanishlarini
                                kuting) <?php endif; ?>
                                <?php if($status_pet['status'] == 3): ?> Ariza tasdiqlandi. (Marketing bo'limi bilan bog'lanib
                                o'zingizga tegishli id-kodni olishingiz va u orqali shartnoma yuklab olishingiz
                                mumkin) <?php endif; ?>
                            </div>
                            <?php if($status_pet['status'] >= 1): ?>
                                <div class="">
                                    <p>Ariza ma'lumotlari:</p>
                                    <form action="<?php echo e(route('lyceum.super.store_application')); ?>" method="post"
                                      class="super-user-form" id="user_form_sub">
                                        <?php echo e(csrf_field()); ?>

                                    <p><button  type="submit" class="btn btn-success">arizani yuklab olish <i class="fa fa-download"></i> </button></p>
                                        <input type="text" readonly="true" hidden="true" name="super_id"
                                               value="<?php echo e($data->id); ?>">
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>


                        <div class="col-lg-3 col-md-3"></div>
                        <div class="col-lg-6 col-md-6">
                            <div class="icon-box" style="border-top: 3px solid #16df7e;">
                                <div class="icon">Shaxsiy ma'lumotlar</div>
                                <?php if(session()->has('error')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo e(session()->get('error')); ?>

                                    </div>
                                <?php endif; ?>

                                <div>
                                    <span class="title"><a>Ismi:</a></span>
                                    <span class="title"><a><?php echo e($data->first_name); ?></a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Familiyasi:</a></span>
                                    <span class="title"><a><?php echo e($data->last_name); ?></a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Otasini ismi:</a></span>
                                    <span class="title"><a><?php echo e($data->middle_name); ?></a></span>
                                </div>
                                <div>
                                    <span class="title"><a>Manzil:</a></span>
                                    <span class="title"><a><?php echo e($data->viloyat); ?>, <?php echo e($data->tuman); ?>, <?php echo e($data->address); ?></a></span>
                                </div>

                            </div>

                            <div class="icon-box" style="border-top: 3px solid #16df7e;">
                                <div class="icon">Qo'shimcha ma'lumotlar</div>
                                <div>
                                    <span class="title"><a>Telefon raqam:</a></span>
                                    <span class="title"><a><?php echo e($data->phone); ?></a></span>
                                </div>
                                <div>
                                    <span class="title"><a>To'plangan ball:</a></span>
                                    <span class="title"><a><?php echo e($data->ball); ?></a></span>
                                </div>
                            </div>
                            <?php if($status_pet['status'] == 0): ?>

                                <form action="<?php echo e(route('lyceum.super.store_application')); ?>" method="post"
                                      class="super-user-form" id="user_form_sub">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="icon-box" style="height: 100%; border-top: 3px solid #16df7e;">
                                        
                                        <span>So'ralgan ma'lumotlarni kiriting</span>
                                        <div class="border p-1">
                                            <span>Qo'shimcha telefon raqamlar <span class="error tel1_error">  <?php if($errors->has('tel1')): ?>
                                                        | <?php echo e($errors->first('tel1')); ?><?php endif; ?></span> </span>
                                            <input type="text" class="form-control telefon-inputmask" required
                                                   name="tel1"
                                                   placeholder="Qo'shimcha telefon raqam" value="<?php echo e(old('tel1')); ?>">
                                            <span class="error tel2_error">  <?php if($errors->has('tel2')): ?>
                                                    | <?php echo e($errors->first('tel2')); ?><?php endif; ?></span>
                                            <input type="text " class="form-control telefon-inputmask" required
                                                   name="tel2"
                                                   placeholder="Qo'shimcha telefon raqam" value="<?php echo e(old('tel2')); ?>">
                                        </div>
                                        <h4 class="title"><a>Diqqat bilan tekshiring!</a></h4>
                                        <p class="description">Barcha ma'lumotlarim to'g'ri ekanligini tasdiqlayman </p>

                                        <input type="text" readonly="true" hidden="true" name="super_id"
                                               value="<?php echo e($data->id); ?>">


                                        <div style="">


                                            <a class="btn btn-success tasdiqlash">Tasdiqlash <i
                                                        class="icofont-check-circled"></i> </a>
                                        </div>
                                    </div>
                                </form>
                            <?php endif; ?>

                        </div>
                        <div class="col-lg-3 col-md-3"></div>


                    </div>

                </div>

            </section>

        </main>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript">
        $('.telefon-inputmask').inputmask({
            'mask': '+\\9\\98999999999'
        })
        $('.tasdiqlash').click(function () {
            if (confirm('Tasdiqlaysizmi?')) {
                var tel1 = $('input[name="tel1"]').val();
                var tel2 = $('input[name="tel2"]').val();
                if (tel1 != '' && tel2 != '') {
                    $('.super-user-form').submit();
                } else {
                    if (tel1 == '') {
                        $('.tel1_error').html('Telefon raqam kiriting')
                    }
                    if (tel2 == '') {
                        $('.tel2_error').html('Telefon raqam kiriting')
                    }
                }
            }
        })
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.marketing2021', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>