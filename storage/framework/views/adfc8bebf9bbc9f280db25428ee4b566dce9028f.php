<?php $__env->startSection('content'); ?>
   <div class="card">
    <div class="card-header">
        <h4>Product Page</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped table-fixed table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th >Name</th>
                    <th >Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <tr>
                    <td ><?php echo e($item->id); ?></td>
                    <td ><?php echo e($item->category->name); ?></td>
                    <td ><?php echo e($item->name); ?></td>
                    <td ><?php echo e($item->selling_price); ?></td>
                    <td class="col-md-3 ">
                        <img src="<?php echo e(asset('upload/product/'.$item->image)); ?>" class="w-50 h-25" alt="Image Not Found">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('edit-product/'.$item->id)); ?>">Edit</a>
                        <a  class="btn btn-danger" href="<?php echo e(url('delete-product/'.$item->id)); ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/Admin/product/index.blade.php ENDPATH**/ ?>