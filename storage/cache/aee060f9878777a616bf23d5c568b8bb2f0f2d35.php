<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <form action="/color/update/<?php echo e($color['id']); ?>" method="POST">
        <label for="">colors</label>
        <input name="name" value="<?php echo e($color['name']); ?>" type="text">
        <button type="submit" class="btn">sua</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php2_mvc/app/views/color/edit.blade.php ENDPATH**/ ?>