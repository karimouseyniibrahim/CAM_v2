<?php echo $__env->make(layoutBreadcrumb(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="card">
    <div class="card-block">
        <?php $button = isset($button) ? $button : true ?>
        <?php echo $__env->make(layoutHeader() , ['button' => $button], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="search" >
            <div class="pull-<?php echo e(getDirection()); ?>">
                <?php echo $__env->yieldPushContent('header'); ?>
            </div>
            <div class="pull-<?php echo e(getDirection()); ?>" style="padding-<?php echo e(getDirection()); ?>: 10px;">
                <?php echo $__env->yieldPushContent('search'); ?>
            </div>
        </div>
        <div class="clearfix" style="margin-bottom: 20px"></div>
        <div class="body">
            <?php echo $table; ?>

        </div>
        <div class="clearfix"></div>
        <div class="search" style="padding-bottom: 10px">
            <div class="pull-<?php echo e(getDirection()); ?>">
                <?php echo $__env->yieldPushContent('header'); ?>
            </div>
            <div class="pull-<?php echo e(getDirection()); ?>" style="padding-<?php echo e(getDirection()); ?>: 10px;">
                <?php echo $__env->yieldPushContent('search'); ?>
            </div>
        </div>
    </div>
</div>
