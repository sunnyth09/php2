<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <a href="/color/create" class="btn btn-primary">Add Size</a>
    <table class="table">
        <tr>
            <th> id </th>
            <th> name </th>
            <th>action</th>
        </tr>
        <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item['id']); ?></td>
                <td><?php echo e($item['name']); ?></td>
                <td>
                    <a href="/color/delete/<?php echo e($item['id']); ?>" class="btn btn-sm btn-light border text-danger">Delete
                    </a>
                </td>
                <td>
                    <a href="/color/update/<?php echo e($item['id']); ?>" class="btn btn-sm btn-light border text-danger">Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php2_mvc/app/views/color/index.blade.php ENDPATH**/ ?>