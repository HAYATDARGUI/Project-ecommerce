<?php $__env->startSection('content'); ?>
   <div class="card">
    <div class="card-header">
        <h4>Register Users</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped table-fixed table-hover align-middle text-center">
            <thead class="table-dark">
            <th colspan="3">
                      
                      <a class="btn btn-warning float-end" href="<?php echo e(route('generate-pdf')); ?>">forma PDF</a>
                   
                        <a class="btn btn-warning float-end" href="<?php echo e(route('users.export')); ?>">Export User Data</a>
                    </th>
                <tr>
                    <th>Id</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th>Phone No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <tr>
                    <td ><?php echo e($item->id); ?></td>
                    <td ><?php echo e($item->name); ?></td>
                    <td ><?php echo e($item->email); ?></td>
                    <td ><?php echo e($item->phoneno); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('view-user/'.$item->id)); ?>">View</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('delete-users/'.$item->id)); ?>">dellet</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/Admin/users/index.blade.php ENDPATH**/ ?>