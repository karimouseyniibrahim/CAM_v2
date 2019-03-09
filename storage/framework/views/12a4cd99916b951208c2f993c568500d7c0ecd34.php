<?php $__env->startSection('title'); ?>
    <?php echo e(trans('categorie.Commnads')); ?> <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(concatenateLangToUrl('admin/command/exe')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <div class="">
                <label for=""><?php echo e(trans('user.Laraflat Commands')); ?></label>
                <select name="commands" id="commands" class="form-control">
                    <?php $__currentLoopData = $commands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCommandArray => $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($keyCommandArray); ?>"><?php echo e($command); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div id="form"></div>
        <div id="cols"></div>
         <div class="form-group">
            <input type="submit" name="submit" value="<?php echo e(trans('admin.Execute')); ?>" class="btn btn-default" />
            <span class="btn btn-danger" onclick="$('#otherForm').slideToggle()"><?php echo e(trans('admin.Add Command')); ?></span>
         </div>
    </form>
    <form action="<?php echo e(concatenateLangToUrl('admin/laravel/haveCommand')); ?>" method="post" id="otherForm" style="display: none">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <div class="">
                <label for=""><?php echo e(trans('user.Laraflat Model Name')); ?></label>
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <label for=""><?php echo e(trans('user.Laraflat Commands')); ?></label>
                <textarea name="cols" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="<?php echo e(trans('admin.Execute')); ?>" class="btn btn-default" />
        </div>
    </form>
    <table class="table table-bordered  table-striped">
        <tr>
            <th><?php echo e(trans('admin.Name')); ?></th>
            <th><?php echo e(trans('admin.Command')); ?></th>
            <th>#</th>
        </tr>
        <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($h->name); ?></td>
                <td><?php echo e($h->command); ?> <?php echo e($h->name); ?> --cols=<?php echo e($h->options); ?></td>
                <td>
                    <?php if($h->command != 'laraflat:rollback'): ?>
                        <form action="<?php echo e(concatenateLangToUrl('admin/command/exe')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="commands" value="laraflat:rollback">
                            <input type="hidden" name="name" value="<?php echo e(ucfirst($h->name)); ?>">
                            <div class="form-group">
                                <input type="submit" name="submit" value="<?php echo e(trans('admin.RollBack')); ?>" class="btn btn-danger" />
                            </div>
                        </form>
                    <?php else: ?>
                        ----
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
   <?php echo $__env->make('admin.commands.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>