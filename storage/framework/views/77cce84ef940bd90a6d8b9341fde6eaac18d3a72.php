<header class="p-3 text-black" style="background-color: #008b8b;">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="<?php echo e(asset('images\image-removebg-preview.png')); ?>" style="width:50px; height:50px">
      </a>
      
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-5 text-white fs-5">Dashboard</a></li>
        <li><a href="#" class="nav-link px-5 text-white fs-5">Inventory</a></li>
        <li><a href="#" class="nav-link px-5 text-white fs-5">Profile</a></li>
        <!-- <li><a href="#" class="nav-link px-2 text-white">About</a></li> -->
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 px-2">
        <input type="search" class="form-control form-control-light" placeholder="Search" aria-label="Search">
      </form>

      <?php if(auth()->guard()->check()): ?>
        <?php echo e(auth()->user()->name); ?>

        <div class="text-end">
          <a href="<?php echo e(route('logout.perform')); ?>" class="btn btn-outline-light me-2">Logout</a>
        </div>
      <?php endif; ?>

      <?php if(auth()->guard()->guest()): ?>
        <div class="text-end">
          <a href="<?php echo e(route('login.perform')); ?>" class="btn btn-outline-light me-2 px-4 me-3">Login</a>
          <a href="<?php echo e(route('register.perform')); ?>" class="btn btn-outline-info px-3 ">Sign up</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header><?php /**PATH C:\Users\Win10\Desktop\Intern\ALaravel\system-inventory\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>