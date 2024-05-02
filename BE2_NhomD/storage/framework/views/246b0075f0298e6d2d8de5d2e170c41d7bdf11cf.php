

<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($user->id); ?></th>
                        <th><?php echo e($user->name); ?></th>
                        <th><?php echo e($user->email); ?></th>
                        <th><?php echo e($user->phone); ?></th>
                        <td><img src="<?php echo e(asset('uploads/userimage/' . $user->image)); ?>" alt="Phone Image"></td>
                        <th>
                            <a href="<?php echo e(route('users.detail', ['id' => $user->user_id])); ?>">View</a> |
                            <a href="<?php echo e(route('user.UpdatetUser', ['id' => $user->user_id])); ?>">Edit</a> |
                            <a href="<?php echo e(route('user.deleteUser',['id' => $user->user_id])); ?>">Delete</a>

                        </th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2"><?php echo e($users->links()); ?></div>
            <div class="col-md-5"></div>
        </div>

    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GiuaKyBE2NhomK\resources\views/crud_user/list.blade.php ENDPATH**/ ?>