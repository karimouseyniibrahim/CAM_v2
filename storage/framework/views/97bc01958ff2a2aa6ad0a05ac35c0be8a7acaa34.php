<?php $__env->startSection('title'); ?>
    <?php echo e(trans('categorie.Commnads')); ?> <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(concatenateLangToUrl('admin/command/otherExe')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <div class="">
                <label for=""><?php echo e(trans('user.Laraflat Commands')); ?></label>
                <select name="commands" id="commands" class="form-control">
                    <?php $__currentLoopData = $commands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($command); ?>"><?php echo e($command); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="<?php echo e(trans('admin.Execute')); ?>" class="btn btn-default" />
        </div>
    </form>

<?php $__env->stopSection(); ?>



<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>