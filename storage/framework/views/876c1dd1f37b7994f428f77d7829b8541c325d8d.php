<?php $__env->startSection('title'); ?>
    <?php echo e(trans('role.role')); ?>     <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php echo $__env->make('admin.shared.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('header'); ?>
    <button class="btn btn-danger" onclick="deleteThemAll(this)" data-link="<?php echo e(url('admin/role/pluck')); ?>" ><i class="fa fa-trash"></i></button>
    <button class="btn btn-success" onclick="checkAll(this)"  ><i class="fa fa-check-circle-o"></i> </button>
    <button class="btn btn-warning" onclick="unCheckAll(this)"  ><i class="fa fa-check-circle"></i> </button>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('search'); ?>
    <form method="get" class="form-inline">
        <div class="form-group">
            <input type="text" name="from" class="form-control datepicker2" placeholder="<?php echo e(trans('admin.from')); ?>" value="<?php echo e(request()->has('from') ? request()->get('from') : ''); ?>">
        </div>
        <div class="form-group">
            <input type="text" name="to" class="form-control datepicker2" placeholder="<?php echo e(trans('admin.to')); ?>" value="<?php echo e(request()->has('to') ? request()->get('to') : ''); ?>">
        </div>
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('role.name')); ?>" value="<?php echo e(request()->has('name') ? request()->get('name') : ''); ?>">
        </div>
        <div class="form-group">
            <input type="text" name="slug" class="form-control" placeholder="<?php echo e(trans('role.slug')); ?>" value="<?php echo e(request()->has('slug') ? request()->get('slug') : ''); ?>">
        </div>
        <button class="btn btn-success" type="submit" ><i class="fa fa-search"></i></button>
        <a href="<?php echo e(url('admin/role')); ?>" class="btn btn-danger" ><i class="fa fa-close"></i></a>
    </form>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make(layoutTable() , ['title' => trans('role.role')  ,'model' => 'role' , 'table' => $dataTable->table([] , true) ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.shared.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>