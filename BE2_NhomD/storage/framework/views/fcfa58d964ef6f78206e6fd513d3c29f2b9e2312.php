

<?php $__env->startSection('content'); ?>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Màn hình cập nhật</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('user.PostUpdatetUser')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input name="id" type="hidden" value="<?php echo e($user->user_id); ?>">
                            <div class="form-group mb-3">

                                <div class="row">
                                    <div class="col-md-3"><span>Username</span></div>
                                    <div class="col-md-9"><input type="text" id="name" class="form-control" name="name"
                                            value="<?php echo e($user->name); ?>" required autofocus></div>
                                </div>

                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                            <div class="row">
                                    <div class="col-md-3"><span>Email</span></div>
                                    <div class="col-md-9"><input type="text" id="email_address" class="form-control"
                                    name="email" value="<?php echo e($user->email); ?>" required autofocus></div>
                                </div>

                                
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">

                            <div class="row">
                                    <div class="col-md-3"><span>Password</span></div>
                                    <div class="col-md-9"><input type="password" id="password" class="form-control"
                                    name="password" required></div>
                                </div>

                                <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                            <div class="row">
                                    <div class="col-md-3"><span>Phone</span></div>
                                    <div class="col-md-9"><input type="number" id="phone" class="form-control" name="phone"
                                    value="<?php echo e($user->phone); ?>" required autofocus></div>
                                </div>

                                
                                <?php if($errors->has('phone')): ?>
                                <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                            <div class="row">
                                    <div class="col-md-3"><span>FileToUpload</span></div>
                                    <div class="col-md-9"><input type="file" id="fileToUpload" class="form-control"
                                    name="image" i></div>
                                </div>

                                
                            </div>

                            <div class="row btn_login">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-grid mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GiuaKyBE2NhomK\resources\views/crud_user/update.blade.php ENDPATH**/ ?>