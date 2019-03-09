<?php $__env->startSection('title'); ?>
     <?php echo e(trans('request.request')); ?> <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="pull-<?php echo e(getDirection()); ?> col-lg-9">
    <div><h1><?php echo e(trans('website.request')); ?></h1></div>
     <div><a href="<?php echo e(url('request/item')); ?>" class="btn btn-default"><i class="fa fa-plus"></i> <?php echo e(trans('website.request')); ?></a><br></div>
 	<form method="get" class="form-inline">
		<div class="form-group">
			<input type="text" name="from" class="form-control datepicker2" placeholder="<?php echo e(trans("admin.from")); ?>"value="<?php echo e(request()->has("from") ? request()->get("from") : ""); ?>">
		 </div>
		<div class="form-group">
			<input type="text" name="to" class="form-control datepicker2" placeholder="<?php echo e(trans("admin.to")); ?>"value="<?php echo e(request()->has("to") ? request()->get("to") : ""); ?>">
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
		 <button class="btn btn-success" type="submit" ><i class="fa fa-search" ></i ></button>
		<a href="<?php echo e(url("request")); ?>" class="btn btn-danger" ><i class="fa fa-close" ></i></a>
	 </form > 
<br ><table class="table table-responsive table-striped table-bordered"> 
		<thead > 
			<tr> 
				<th><?php echo e(trans("request.artisan_id")); ?></th> 
				<th><?php echo e(trans("request.edit")); ?></th> 
				<th><?php echo e(trans("request.show")); ?></th> 
				<th><?php echo e(trans("request.delete")); ?></th> 
				</thead > 
		<tbody > 
		<?php if(count($items) > 0): ?> 
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				 <tr>
					<td><?php echo e(str_limit($d->artisan_id , 20)); ?></td> 
				<td> <?php echo $__env->make("website.request.buttons.edit", ["id" => $d->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td> 
					<td> <?php echo $__env->make("website.request.buttons.view", ["id" => $d->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td> 
					<td> <?php echo $__env->make("website.request.buttons.delete", ["id" => $d->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td> 
					</tr> 
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			 </tbody > 
		</table > 
	<?php echo $__env->make(layoutPaginate() , ["items" => $items], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>