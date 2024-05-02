

<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sở thích</th>
                        <th>Nội dung sở thích</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $favorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($item->favorite_id); ?></th>
                        <th><?php echo e($item->favorite_name); ?></th>
                        <th><?php echo e($item->favorite_description); ?></th>
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
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\GiuaKyBE2NhomK\resources\views/crud_user/favorities.blade.php ENDPATH**/ ?>