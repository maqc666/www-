<?php $__env->startSection('content'); ?>
    <header class="Hui-header cl" style="background-color: #00B83F;"><a class="Hui-logo" title="" href="<?php echo e(url('/admin/index')); ?>">基于Laravel的微商城后台管理系统</a>
        <ul class="Hui-userbar">
            <li><?php echo e($admin->username); ?></li>
            <li><a href="<?php echo e(url('/admin/exit')); ?>">退出</a></li>
        </ul>
        <a href="javascript:;" class="Hui-nav-toggle Hui-iconfont" aria-hidden="false">&#xe667;</a>
    </header>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\laravel-wx-shop\resources\views/admin/index.blade.php ENDPATH**/ ?>