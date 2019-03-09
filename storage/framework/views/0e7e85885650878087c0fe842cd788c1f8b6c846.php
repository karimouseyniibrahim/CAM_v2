<?php if($items): ?>
    <?php echo e($items->appends(request()->except('page'))->render()); ?>

<?php endif; ?>