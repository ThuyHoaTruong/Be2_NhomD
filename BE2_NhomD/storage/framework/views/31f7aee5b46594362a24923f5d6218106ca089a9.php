<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('user.loginIndex')); ?>">Home |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('user.loginIndex')); ?>">Đăng nhập |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('user.createUserIndex')); ?>">Đăng ký</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('user.listUserIndex')); ?>">Home |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('favoritie.listfavoritie')); ?>">FavoritieList |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('post.listpost')); ?>">PostList |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('signout')); ?>">Đăng xuất</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
    <footer>
        Lập trình web @01/2024
    </footer>
</body>

</html><?php /**PATH C:\Users\ACER\Desktop\GiuaKyBE2NhomK\resources\views/dashboard.blade.php ENDPATH**/ ?>