<?php $__env->startSection('title'); ?>
    My Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="py-5"></div>
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-head">
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-info my-1">Back</a>
                    <h4 class="my-2">My Orders</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="my-1">First Name</label>
                            <div class="border p-2 "><?php echo e($order->fname); ?></div>
                            <label for="" class="my-1">Last Name</label>
                            <div class="border p-2"><?php echo e($order->lname); ?></div>
                            <label for="" class="my-1">Email</label>
                            <div class="border p-2"><?php echo e($order->email); ?></div>
                            <label for="" class="my-1">Contact No</label>
                            <div class="border p-2"><?php echo e($order->phoneno); ?></div>
                            <label for="" class="my-1">Shipping Address</label>
                            <div class="border p-2">
                                <?php echo e($order->address1); ?>

                                <br>
                                <?php echo e($order->address2); ?>

                                <br>
                                <?php echo e($order->city); ?>

                                <br>
                                <?php echo e($order->state); ?>

                                <br>
                                <?php echo e($order->country); ?>

                                <br>
                            </div>
                            <label class="my-1" for="">ZIP CODE</label>
                            <div class="border p-2"><?php echo e($order->pincode); ?></div>
                        
                        </div>
                        <div class="col-md-6 table-responsive">
                            <table class="table  align-middle text-center ">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qunatity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr >
                                            <td> <?php echo e($item->products->name); ?> </td>
                                            <td> <?php echo e($item->qty); ?> </td>
                                            <td> <?php echo e($item->price); ?> </td>
                                            <td>
                                                <img style="width: 100px ; height:100px;" src="<?php echo e(asset('upload/product/'.$item->products->image)); ?>" alt="">
                                             </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <h4 class="px-2">Grand Total : <span class="float-end">RS <?php echo e($order->total_price); ?></span></h4>
                         </div>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</div>
<div class="py-3"></div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/frontend/orders/view.blade.php ENDPATH**/ ?>