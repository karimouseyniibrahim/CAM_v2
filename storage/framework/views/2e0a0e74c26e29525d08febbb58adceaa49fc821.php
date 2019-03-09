<?php $__env->startSection('title'); ?>
     <?php echo e(trans('request.request')); ?> <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <?php echo $__env->make('admin.shared.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('header'); ?>
    <button class="btn btn-danger" onclick="deleteThemAll(this)" data-link="<?php echo e(url('admin/request/pluck')); ?>" ><i class="fa fa-trash"></i></button>
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
			<input type="text" name="artisan_id" class="form-control " placeholder="<?php echo e(trans("request.artisan_id")); ?>" value="<?php echo e(request()->has("artisan_id") ? request()->get("artisan_id") : ""); ?>">
		</div>
		<div class="form-group">
			<input type="text" name="section_id" class="form-control " placeholder="<?php echo e(trans("request.section_id")); ?>" value="<?php echo e(request()->has("section_id") ? request()->get("section_id") : ""); ?>">
		</div>
		<div class="form-group">
			<input type="text" name="local_id" class="form-control " placeholder="<?php echo e(trans("request.local_id")); ?>" value="<?php echo e(request()->has("local_id") ? request()->get("local_id") : ""); ?>">
		</div>
		<div class="form-group">
			<input type="text" name="status" class="form-control " placeholder="<?php echo e(trans("request.status")); ?>" value="<?php echo e(request()->has("status") ? request()->get("status") : ""); ?>">
		</div>

        <button class="btn btn-success" type="submit" ><i class="fa fa-search"></i></button>
        <a href="<?php echo e(url('admin/request')); ?>" class="btn btn-danger" ><i class="fa fa-close"></i></a>
    </form>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make(layoutTable() , ['title' => trans('request.request') , 'model' => 'request' , 'table' => $dataTable->table([] , true) ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.shared.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>