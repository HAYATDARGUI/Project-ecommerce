<?php $__env->startSection('title'); ?>
   Pain & Gain
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.inc.IntroVideo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <div class="container  d-flex align-items-center justify-content-around p-4">
        <div class="border border-dark " style="width:20rem; background:black;"></div>
        <h3 style="font-size: ; font-weight:bolder; padding:5px;">NEW ARRIVALS</h3>
        <div class="border border-dark " style="width:20rem; background:black;"></div>
    </div>
    <div class="py-5" id="products">
        <div class="container">
            <div class="row d-flex flex-wrap">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mt-2">
                             <a  class="link-dark"  href="<?php echo e(url(asset('view-product/'.$item->slug))); ?>">
                            <div class="card hello-card" style="width: 18rem;">
                                <img src="<?php echo e(asset('upload/product/'.$item->image)); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title"><?php echo e($item->name); ?></h6>
                                        <span href="#" class=" pe-auto float-start">RS <s><?php echo e($item->original_price); ?></s></span>
                                        <span href="#" class=" pe-auto float-end">RS <?php echo e($item->selling_price); ?></span>
                                </div>
                            </div>
                        </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            disable:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <script>
        swal("Done!", `${response.status}`, "success");
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
  <style>
    
    .owl-nav
    {
        display: block !important; 
    }
    .owl-nav button
    {
        font-size: 2rem !important;
    }
  

  </style>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.customer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/frontend/index.blade.php ENDPATH**/ ?>