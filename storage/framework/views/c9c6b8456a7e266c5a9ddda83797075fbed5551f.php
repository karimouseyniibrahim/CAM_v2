<?php echo $__env->make(layoutBreadcrumb(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="card">
            <div class="card-block">
            <?php $button = isset($button) ? $button : true ?>
            <?php echo $__env->make(layoutHeader() , ['button' => $button , 'model' => $model], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="body">
                <?php echo e($slot); ?>

            </div>
       </div>
</div>
