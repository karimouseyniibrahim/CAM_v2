<li class="dd-item dd3-item" data-id="<?php echo e($itemMenu['item']['id']); ?>">
    <div class="dd-handle dd3-handle"><?php echo e($itemMenu['item']['link']); ?></div>
    <div class="dd3-content">
        <?php echo e(getDefaultValueKey($itemMenu['item']['name'])); ?>

        <a href="<?php echo e(url('admin/deleteMenuItem/'. $itemMenu['item']['id'])); ?>" class="pull-right"><i class="material-icons">delete_forever</i></a>
        <a href="#" data-url="<?php echo e(url('admin/updateMenuItem/'. $itemMenu['item']['id'])); ?>" class="pull-right" data-id="<?php echo e($itemMenu['item']['id']); ?>" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">mode_edit</i></a>
    </div>
        <?php if(array_key_exists('sub'  ,$itemMenu)): ?>
            <?php $__currentLoopData = $itemMenu['sub']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->first): ?>
                    <ol class="dd-list">
                <?php endif; ?>
                    <li class="dd-item dd3-item" data-id="<?php echo e($men['id']); ?>">
                        <div class="dd-handle dd3-handle"><?php echo e($men['link']); ?></div>
                        <div class="dd3-content">
                            <?php echo e(getDefaultValueKey($men['name'])); ?>

                            <a href="<?php echo e(url('admin/deleteMenuItem/'. $men['id'])); ?>" class="pull-right"><i class="material-icons">delete_forever</i></a>
                            <a href="#" data-url="<?php echo e(url('admin/updateMenuItem/'. $men['id'])); ?>" data-id="<?php echo e($men['id']); ?>" class="pull-right" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">mode_edit</i></a>
                        </div>
                    </li>
                <?php if($loop->last): ?>
                    </ol>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
</li>



