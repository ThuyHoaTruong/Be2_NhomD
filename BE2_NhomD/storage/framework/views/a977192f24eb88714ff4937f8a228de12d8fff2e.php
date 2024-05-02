

<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID User</th>
                        <th>Post Name</th>
                        <th>Post Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($item->post_id); ?></th>
                        <th><?php echo e($item->user_id); ?></th>
                        <th><?php echo e($item->post_name); ?></th>
                        <th><?php echo e($item->post_description); ?></th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2"></div>
            <div class="col-md-5"></div>
        </div>

    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GiuaKyBE2NhomK\resources\views/crud_user/post.blade.php ENDPATH**/ ?>