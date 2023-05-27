<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
      <h4>Add Categories</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(url('insert-category')); ?>" enctype="multipart/form-data"> 
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border border-dark" name="name">
                </div>    
                  
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </div>    
        </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/Admin/category/add.blade.php ENDPATH**/ ?>