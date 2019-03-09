<div class="container">
    <!--Section: Content-->
    <section class="mt-4">
        <!--Grid row-->
        <div class="row">
            <?php echo $__env->make(layoutSideBar('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--Grid column-->
            <div class="col-md-8 mb-4">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!--Grid row-->
    </section>
    <!--Section: Content-->    
</div>