<?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <div>
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div>
            <div><?php echo e(__('Whoops! Something went wrong.')); ?></div>

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div>
            <label><?php echo e(__('Email')); ?></label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus />
        </div>

        <div>
            <label><?php echo e(__('Password')); ?></label>
            <input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div>
            <label><?php echo e(__('Remember me')); ?></label>
            <input type="checkbox" name="remember">
        </div>

        <?php if(Route::has('password.request')): ?>
            <a href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot your password?')); ?>

            </a>
        <?php endif; ?>

        <div>
            <button type="submit">
               <?php echo e(__('Login')); ?>

            </button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>