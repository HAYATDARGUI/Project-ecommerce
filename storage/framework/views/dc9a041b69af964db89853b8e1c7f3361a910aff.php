<?php $__env->startSection('title'); ?>
    Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Categories</h2>
                </div>
                <div class="row ">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 ">
                            <a href="<?php echo e(url(asset('view-category/'.$cate->slug))); ?>">
                                <div class="card-body zoom postion-relative" >
                                    <img src="<?php echo e(asset('upload/category/'.$cate->image)); ?>"   class="w-100 lazy rounded" height="200px"  alt="">
                                    <div class="text-light  position-absolute top-50 start-50  translate-middle">
                                        <h4 style="letter-spacing:3px; "><?php echo e($cate->name); ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 my-5">

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/frontend/category.blade.php ENDPATH**/ ?>