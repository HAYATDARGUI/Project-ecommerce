<?php $__env->startSection('content'); ?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>
<section class="vh-100">
  <div class="container-fluid h-custom">
     <div class="row d-flex justify-content-center align-items-center h-100">
        
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
           <form action="<?php echo e(route('login')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="d-flex flex-row align-items-center justify-content-center">
                <h1 ><?php echo e(__('Login')); ?></h1>
              </div>
              <br>
              <!-- Email input -->
              <div class="form-outline mb-4">
                 <label class="form-label" for="form3Example3"><?php echo e(__('Email Address')); ?></label>
                 <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus/>
                 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <span class="invalid-feedback" role="alert">
                 <strong><?php echo e($message); ?></strong>
                 </span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-3">
                 <label class="form-label" for="form3Example4"><?php echo e(__('Password')); ?></label>
                 <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password"/>
                 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <span class="invalid-feedback" role="alert">
                 <strong><?php echo e($message); ?></strong>
                 </span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                 <!-- Checkbox -->
                 <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      <?php echo e(__('Remember Me')); ?>

                    </label>
                 </div>
                 <?php if(Route::has('password.request')): ?>
                 <a href="<?php echo e(route('password.request')); ?>" class="text-body">Forgot password?</a>
                  <?php endif; ?>
              </div>
              <div class="d-flex my-4 justify-content-center flex-column mx-4 mb-3 mb-lg-4">
               <button type="submit" class="btn btn-outline-primary btn-lg"><?php echo e(__('login')); ?></button>
               <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?php echo e(url('/register')); ?>"
                 class="link-danger">Register</a></p>
               </div>
           </form>
        </div>
     </div>
  </div>
  <div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/auth/login.blade.php ENDPATH**/ ?>