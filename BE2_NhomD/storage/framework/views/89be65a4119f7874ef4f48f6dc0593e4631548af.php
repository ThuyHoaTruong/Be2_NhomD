

<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">

            <div class="card">
                <h3 class="card-header text-center">Màn hình chi tiết</h3>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"><span>ID</span></div>
                            <div class="col-md-3"><?php echo e($user->user_id); ?></div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"><span>Username</span></div>
                            <div class="col-md-3"><?php echo e($user->name); ?></div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"><span>Email</span></div>
                            <div class="col-md-3"><?php echo e($user->email); ?></div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"><span>Name Image</span></div>
                            <div class="col-md-3"><?php echo e($user->image); ?></div>
                            <div class="col-md-3"></div>
                        </div>

                        <h3>Hiển thị thông tin user được trích xuất từ user_profile:</h3>
                        <?php $__currentLoopData = $userProfile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($item->first_name); ?> <br>
                        <?php echo e($item->last_name); ?> <br>
                        <?php if($item->sex == 0): ?>
                        Nam <br>
                        <?php elseif($item->sex == 1): ?>
                        Nữ <br>
                        <?php else: ?>
                        Khác <br>
                        <?php endif; ?>
                        <?php echo e($item->phone); ?> <br>
                        <?php echo e($item->address); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <h3>Hiển thị thông tin bài viết được đăng bởi user</h3>
                        <?php $__currentLoopData = $userPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><b>ID bài viết:</b></span> <?php echo e($item->post_id); ?> <br>
                        <span><b>Tên bài viết:</b></span> <?php echo e($item->post_name); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <h3>Hiển thị thông tin sở thích của user</h3>
                        <?php $__currentLoopData = $userFavoritie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span><b>ID sở thích:</b></span> <?php echo e($item->favorite_id); ?> <br>
                        <span><b>Tên sở thích:</b></span> <?php echo e($item->favorite_name); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="row btn_edit">
                            <div class="col-md-8"></div>
                            <div class="col-md-2">
                                <div class="d-grid mx-auto">
                                    <a href="<?php echo e(route('user.UpdatetUser', ['id' => $user->id])); ?>"
                                        class="btn btn-primary btn-block">Chỉnh sửa</a>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\GiuaKyBE2NhomK\resources\views/crud_user/read.blade.php ENDPATH**/ ?>