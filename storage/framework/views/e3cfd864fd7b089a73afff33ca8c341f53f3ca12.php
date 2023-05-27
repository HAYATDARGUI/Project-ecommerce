<?php $__env->startSection('title'); ?>
    My Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="py-5">

</div>

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-head">
                    <h4>My Orders</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($item->tracking_no); ?> </td>
                                    <td> <?php echo e($item->total_price); ?> </td>
                                    <td> <?php echo e($item->status == '0' ? "Pending" : "Completed"); ?> </td>
                                    <td>    
                                        <a href="<?php echo e(url("view-order/".$item->id)); ?>" class="btn btn-outline-info">View</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</div>
<div class="py-5"></div>
<div class="py-5"></div>
<div class="py-5"></div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/frontend/orders/index.blade.php ENDPATH**/ ?>