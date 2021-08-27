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
                    <h2 class="form-title"> Akademik litsey uchun to'lov shartnomasini olish </h2><br>
                   <?php if(session('info_error')): ?>
                    <p class="error">
                        <?php echo e(session('info_error')); ?>

                    </p>
                   <?php endif; ?>
                    <form action="<?php echo e(route('shartnoma.lyceum_info')); ?>" method="post" name="super-form" class="register-form" id="register-form">
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
                                <input type="text" class="number-inputmask" name="id_code" id="id_code" autocomplete="off" value="<?php echo e(old('id_code')); ?>" placeholder=" O'quvchi ID raqami"/>
                            
                        </div>
                        <div class="form-group">
                            <span class="error" style="">
                                <?php if($errors->has('parent_pass_seria')): ?>
                                        <?php echo e($errors->first('parent_pass_seria')); ?>

                                    <?php endif; ?>
                            </span>
                            <label for="parent_pass_seria">
                                <i class="zmdi zmdi-account-box-mail"></i></label>
                            <input type="text" name="parent_pass_seria" id="passport_seria" value="<?php echo e(old('parent_pass_seria')); ?>" placeholder="Vasiy pasport seriyasi"/>
                        </div>
                        <div class="form-group">
                             <span class="error" style="">
                                <?php if($errors->has('parent_pass_number')): ?>
                                        <?php echo e($errors->first('parent_pass_number')); ?>

                                    <?php endif; ?>
                            </span>
                            <label for="parent_pass_number"><i class="zmdi zmdi-confirmation-number"></i></label>
                            <input type="text" name="parent_pass_number" id="passport_number" value="<?php echo e(old('parent_pass_number')); ?>" placeholder="Vasiy pasport raqami"/>
                        </div>

                        <div class="form-group">
                             <span class="error" style="">
                                <?php if($errors->has('birthday')): ?>
                                        <?php echo e($errors->first('birthday')); ?>

                                    <?php endif; ?>
                            </span>
                            <label for="birthday"><i class="zmdi zmdi-calendar"></i></label>
                            <input type="text" onfocus="(this.type='date')" name="birthday" value="<?php echo e(old('birthday')); ?>" id="birthday" placeholder="O'quvchi tug'ilgan sanasi"/>


                        </div>
                       
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>
                                Shaxsiy ma'lumotlarimdan foydalanishlariga roziman.
                            </label>
                        </div>
                        <div class="form-group">
                            <?php if($errors->has('g-recaptcha-response')): ?>
                                <span class="text-danger">
                                    <?php echo e($errors->first('g-recaptcha-response')); ?>

                                </span>
                            <?php endif; ?>

                            <?php echo NoCaptcha::display(); ?>

                            

                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Jo'natish"/>
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