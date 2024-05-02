

<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Màn hình đăng nhập</h3>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('user.login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Email</span></div>
                                    <div class="col-md-9"><input type="text" id="email" class="form-control"
                                            name="email" required autofocus></div>
                                </div>
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Mật khẩu</span></div>
                                    <div class="col-md-9"><input type="password" id="password" class="form-control"
                                            name="password" required></div>
                                </div>

                                <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row pagination">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row btn_login">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6"><a href="#">Quên mật khẩu</a></div>
                                        <div class="col-md-6">
                                            <div class="d-grid mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">Đăng
                                                    nhập</button>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Desktop\GiuaKyBE2NhomK\resources\views/crud_user/login.blade.php ENDPATH**/ ?>