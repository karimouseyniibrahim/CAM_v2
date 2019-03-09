<div class="body">
    <div class="clearfix m-b-20">
        <div class="dd nestable-with-handle">
            <ol class="dd-list">
                <?php if($data['items'] != null): ?>
                    <?php $__currentLoopData = $data['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $itemMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('admin.menu.helper.li', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ol>
        </div>
    </div>
</div>
