<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
        <img src="<?php echo e(url('/frontend/images/logo.png')); ?>" alt="" />
      </a>
      <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="<?php echo e(route('home')); ?>">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbardrop"
              data-toggle="dropdown"
            >
              Services
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Testimonial</a>
          </li>
        </ul>

      <?php if(auth()->guard()->guest()): ?>
            <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='<?php echo e(url('login')); ?>';">
              Masuk
            </button>
          </form>
          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='<?php echo e(url('login')); ?>';">
              Masuk
            </button>
          </form>
      <?php endif; ?>

      <?php if(auth()->guard()->check()): ?>
              <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none" action="<?php echo e(url('logout')); ?>" method="POST">
            <button class="btn btn-login my-2 my-sm-0" type="submit">
                <?php echo csrf_field(); ?>
              Keluar
            </button>
          </form>
          <!-- Desktop Button -->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="<?php echo e(url('logout')); ?>" method="POST">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                <?php echo csrf_field(); ?>
              Keluar
            </button>
          </form>
      <?php endif; ?>
      </div>
    </nav>
  </div>
<?php /**PATH C:\Users\ACER\Documents\01 - sirel\nomads\resources\views/includes/navbar.blade.php ENDPATH**/ ?>