<nav class="navbar navbar-expand-lg navbar-default navbar-dark fixed-top">
  <div class="container-fluid  navbar-default ">
     <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Pain &  Gain</a>
   
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
           <a class="nav-link px-3 active" aria-current="page" href="/">Home</a>
          
        </div>
        <div class="navbar-nav ms-auto justify-content-center">
         

           <?php if(auth()->guard()->guest()): ?>
           <?php if(Route::has('login')): ?>
           <li class="nav-item">
              <a class="nav-link cartblack" id="loginblack" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
            <?php endif; ?>
            <?php if(Route::has('register')): ?>
            <li class="nav-item">
               <a class="nav-link cartblack" id="loginblack"  href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            </li>
            <?php endif; ?>
            <?php else: ?>

            <div class="input-group hello">
               <form class="d-flex bg-transparent w-100" action="<?php echo e(url('searchProduct')); ?>" class="form-control" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="input-group">
                     <input name="product_name" required type="search" id="search_product" class="form-control bg-dark rounded-pill outline-none shadow-none border-0 "  placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                     <button class="btn" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
               </form>
             </div>
            <a class="cartblack nav-link" href="<?php echo e(url('cart')); ?>"><i class="fa-solid fa-cart-shopping"></i></a>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <img
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
            class="rounded-circle"
            height="22"
            alt="Portrait of a Woman"
            loading="lazy"
          />
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

               <a class="dropdown-item"> <?php echo e(Auth::user()->name); ?></a>
              
                  <a class="dropdown-item" href="<?php echo e(url('my-order')); ?>">
                     My Orders
                  </a>
                
                 <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                 <?php echo e(__('Logout')); ?>

                 </a>
               
                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                 </form>
              </div>
           </li>
          
           <?php endif; ?>
        </div>
     </div>
  </div>
</nav><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/layouts/inc/frontNavBar.blade.php ENDPATH**/ ?>