<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <form action="/color/add" method="post">
        <label for="">colors</label>
        <input name="name" type="text">
        <button type="submit" class="btn">them</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/views/color/add.blade.php ENDPATH**/ ?>