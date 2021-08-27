<?php $__env->startSection('content'); ?>
    <!-- START APP CONTAINER -->
    <div class="app-container" style="background: url(<?php echo e(asset('extra/bg.jpg')); ?>) center center no-repeat fixed;-webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;">

        <div class="app-login-box">
            <div class="app-login-box-title padding-top-30">
                <div class="title">Tizimga kirish</div>
                <div class="subtitle">Login va parolingizni kiriting</div>
            </div>
            <div class="app-login-box-container margin-top-20">
                <form action="<?php echo e(route('login')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                        <input type="text" class="form-control" name="username" placeholder="Login" value="<?php echo e(old('username')); ?>" required autofocus>
                        <?php if($errors->has('username')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('username')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" class="form-control" name="password" placeholder="Parol">
                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Tizimga kirish</button>
                    </div>
                </form>
            </div>
            <div class="app-login-box-footer">
                &copy; TSUL <?php echo date('Y')?>.<br> Barcha huquqlar himoyalangan.
            </div>
        </div>

    </div>
    <!-- END APP CONTAINER -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>