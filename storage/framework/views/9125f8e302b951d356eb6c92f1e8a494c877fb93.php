<?php $__env->startSection('content'); ?>
<style type="text/css">
     *{
      box-sizing: content-box !important;
    }
    .error{
        color: red;
    }
    input {
        width: 80% !important;
    }
</style>
    <div class="containerform">
        <div class="row">
            <div class="signup-content" style="margin: auto;">
                <div class="signup-form">
                    <p>
                        <span class="error">
                            <?php if(session()->has('error')): ?>
                                    <?php echo e(session()->get('error')); ?>

                            <?php endif; ?>
                        </span>
                    </p>
                    <h2 class="form-title"> Talabalar uchun to'lovlar tarixini ko`rish </h2><br>
                   <?php if(session('info_error')): ?>
                    <p class="error">
                        <?php echo e(session('info_error')); ?>

                    </p>
                   <?php endif; ?>
                    <form action="<?php echo e(route('payment_check_result')); ?>" method="post" name="super-form" class="register-form" id="register-form">
                        <?php echo e(@csrf_field()); ?>


                        <div class="form-group" style="display: flex; flex-wrap: wrap;">

                             <span class="error" style="">
                                    <?php if($errors->has('id_code')): ?>
                                        <?php echo e($errors->first('id_code')); ?>

                                    <?php endif; ?>
                            </span>
                                <label for="id_code">
                                    <i class="zmdi zmdi-assignment-check"></i>
                                </label>
                                <input type="text" class="number-inputmask id-code-inputmask" name="id_code" id="id_code" autocomplete="off" value="<?php echo e(old('id_code')); ?>" placeholder=" Talaba ID raqami"/>

                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Tekshirish"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?php echo e(asset('assetsform/images/signin-image.jpg')); ?>" alt="sing up image"></figure>
                </div>

            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript">
    $('.form-submit').click(function(){

            alert("khg");
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.marketing_enno', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>