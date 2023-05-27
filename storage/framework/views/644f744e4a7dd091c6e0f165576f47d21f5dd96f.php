<?php $__env->startSection('content'); ?>
   <div class="card">
    <div class="card-header">
        <h4>Category Page</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped table-fixed table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th >Name</th>
                   
                    <th  >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <tr>
                    <td ><?php echo e($item->id); ?></td>
                    <td ><?php echo e($item->name); ?></td>
                    
                  
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('edit-category/'.$item->id)); ?>">Edit</a>
                        <a  class="btn btn-danger" href="<?php echo e(url('delete-category/'.$item->id)); ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/Admin/category/index.blade.php ENDPATH**/ ?>