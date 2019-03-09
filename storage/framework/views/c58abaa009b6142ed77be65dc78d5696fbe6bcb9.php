<?php $__env->startSection('title'); ?>
    <?php echo e(trans('menu.menu')); ?> <?php echo e(isset($item) ? trans('curd.edit'):  trans('curd.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php echo e(Html::style('admin/plugins/nestable/jquery-nestable.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('menu.menu') , 'model' => 'menu' , 'action' => isset($item) ? trans('curd.edit'): trans('curd.add') ]); ?>
    <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/menu/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo e(trans('menu.name')); ?>" value="<?php echo e(isset($item) ? $item->name : old('name')); ?>"/>
                </div>
            </div>
            <?php if(isset($item)): ?>
                <?php echo $__env->make('admin.menu.helper.dropSection', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?> <?php echo e(trans('menu.menu')); ?>

                </button>
                <?php if(isset($item)): ?>
                    <span class="btn btn-info waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal" >
                        <i class="material-icons">playlist_add</i>
                        <?php echo e(trans('menu.add_new_item')); ?>

                    </span>
                <?php endif; ?>
            </div>
        </form>
    <?php if(isset($item)): ?>
        <?php echo $__env->make('admin.menu.helper.model', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php if(isset($item)): ?>
       <?php echo $__env->make('admin.menu.helper.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>