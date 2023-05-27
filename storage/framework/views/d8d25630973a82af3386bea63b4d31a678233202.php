<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
      <h4>Add Products</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(url('insert-product')); ?>" enctype="multipart/form-data"> 
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select border border-dark p-2" name="cate_id">
                        <option value=''>Select a Category</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border border-dark p-2" name="name">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control border border-dark p-2" name="slug">
                </div> 
               
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description"  rows="3" class="form-control border border-dark"></textarea>   
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number"  class="border form-control border-dark p-2" name="original_price">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number"  class="border form-control border-dark p-2" name="selling_price">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number"  class="border form-control border-dark p-2" name="qty">
                </div>    
              
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  class="border border-dark p-2" name="status">
                </div>    
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox"  class="border border-dark p-2" name="trending">
                </div>    
              
                <div class="col-md-12 mb-3">
                   <input type="file" name="image"  class="form-control border border-dark p-2" >
                </div>    
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>    
            </div>    
        </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/Admin/product/add.blade.php ENDPATH**/ ?>