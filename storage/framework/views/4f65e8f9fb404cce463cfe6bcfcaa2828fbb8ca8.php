

<?php $__env->startSection('content'); ?>
    <div class="A" style="margin-top: 10rem;">
        <?php if(auth()->guard()->check()): ?>
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <div class="float-xl-end me-5">
        <img src="images\inven.png" alt="centered image" style="width: 35rem; height: 20rem;">
        </div>
        <h1 class="ms-5">Welcome</h1>
        <p class="mt-xxl-auto ms-5" style="font-size: 20px;">Bla bla bla bla</p>
        <div class="text-start">
        <a href="<?php echo e(route('register.perform')); ?>" class="btn btn-outline-dark me-2 px-5 me-3 fw-bolder ms-5 mt-4">Get Start Here</a>
        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Win10\Desktop\Intern\ALaravel\system-inventory\resources\views/home/index.blade.php ENDPATH**/ ?>