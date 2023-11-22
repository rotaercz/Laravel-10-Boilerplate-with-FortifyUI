<?php $__env->startSection('content'); ?>
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

    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>

        <div>
            <label><?php echo e(__('Name')); ?></label>
            <input type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name" />
        </div>

        <div>
            <label><?php echo e(__('Email')); ?></label>
            <input type="email" name="email" value="<?php echo e(old('email')); ?>" required />
        </div>

        <div>
            <label><?php echo e(__('Password')); ?></label>
            <input type="password" name="password" required autocomplete="new-password" />
        </div>

        <div>
            <label><?php echo e(__('Confirm Password')); ?></label>
            <input type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <a href="<?php echo e(route('login')); ?>">
            <?php echo e(__('Already registered?')); ?>

        </a>

        <div>
            <button type="submit">
                <?php echo e(__('Register')); ?>

            </button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/register.blade.php ENDPATH**/ ?>