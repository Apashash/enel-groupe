<script src="<?php echo e(asset('public/assets/toas.js')); ?>"></script>
<script>
    <?php if(session()->has('success')): ?>
        message('<?php echo e(session()->get('success')); ?>')
    <?php endif; ?>

    <?php if(session()->has('error')): ?>
        message('<?php echo e(session()->get('error')); ?>')
    <?php endif; ?>

    <?php if(session()->has('message')): ?>
        message('<?php echo e(session()->get('message')); ?>')
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            message('<?php echo e(session()->get($error)); ?>')
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</script>
<?php /**PATH /home/demoyes1/g1.yesuntech.xyz/resources/views/alert-message.blade.php ENDPATH**/ ?>