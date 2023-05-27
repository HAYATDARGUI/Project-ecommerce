<?php $__env->startSection('title'); ?>
   Check Out
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="py-5">

</div>
    <div class="container mt-3">
        <form action="<?php echo e(url('place-order')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5>Basic Detail</h5>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 my-2">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="fname" class="form-control" value="<?php echo e(Auth::user()->name); ?>" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="firstname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" value="<?php echo e(Auth::user()->lname); ?>"   placeholder="last Name" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>"  placeholder="email@example.com" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Phone Number</label>
                                    <input type="number" name="phoneno" class="form-control"  value="<?php echo e(Auth::user()->phoneno); ?>"  placeholder="06....." required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Address</label>
                                    <input type="text" name="address1" class="form-control"  value="<?php echo e(Auth::user()->address1); ?>"  placeholder="Enter Address 1" required>
                                </div>
                               
                                <div class="col-md-6  my-2">
                                    <label for="email">City</label>
                                    <input type="text" name="city" class="form-control" value="<?php echo e(Auth::user()->city); ?>"   placeholder="Martil" required>
                                </div>
                                <div class="col-md-6  my-2">
                                    <label for="email">Zip Code</label>
                                    <input type="number" name="pincode" class="form-control" value="<?php echo e(Auth::user()->pincode); ?>"   placeholder="123" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border-0 ">
                        <div class="card-body">
                            <h5>Order Detail</h5>
                            <hr>
                            <table class="table table-stripped">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <?php $__currentLoopData = $cartitem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->products->name); ?></td>    
                                            <td><?php echo e($item->prod_qty); ?></td>    
                                            <td><?php echo e($item->products->selling_price); ?></td>    
                                            <td></td>    
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        <hr>
                        <button type="submit" class="btn btn-outline-primary float-end">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
<style>

.checkout-form input
{

    font-size: 1rem;
    padding: 10px;
    font-weight: 400;
}
    
.checkout-form label
{
    font-size: .9rem;
    font-weight: 700;
}
    
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>