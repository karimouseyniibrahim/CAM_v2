<?php $__env->startSection('title'); ?>
     <?php echo e(trans('local.local')); ?> <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="pull-<?php echo e(getDirection()); ?> col-lg-9">
    <div><h1><?php echo e(trans('website.local')); ?></h1></div>
     <div><a href="<?php echo e(url('local/item')); ?>" class="btn btn-default"><i class="fa fa-plus"></i> <?php echo e(trans('website.local')); ?></a><br></div>
 	<form method="get" class="form-inline">
		<div class="form-group">
			<input type="text" name="from" class="form-control datepicker2" placeholder="<?php echo e(trans("admin.from")); ?>"value="<?php echo e(request()->has("from") ? request()->get("from") : ""); ?>">
		 </div>
		<div class="form-group">
			<input type="text" name="to" class="form-control datepicker2" placeholder="<?php echo e(trans("admin.to")); ?>"value="<?php echo e(request()->has("to") ? request()->get("to") : ""); ?>">
		</div>
		<div class="form-group"> 
			<input type="text" name="name" class="form-control " placeholder="<?php echo e(trans("local.name")); ?>" value="<?php echo e(request()->has("name") ? request()->get("name") : ""); ?>"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="description" class="form-control " placeholder="<?php echo e(trans("local.description")); ?>" value="<?php echo e(request()->has("description") ? request()->get("description") : ""); ?>"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="price" class="form-control " placeholder="<?php echo e(trans("local.price")); ?>" value="<?php echo e(request()->has("price") ? request()->get("price") : ""); ?>"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="area" class="form-control " placeholder="<?php echo e(trans("local.area")); ?>" value="<?php echo e(request()->has("area") ? request()->get("area") : ""); ?>"> 
		</div> 
		<div class="form-group"> 
			<input type="text" name="section_id" class="form-control " placeholder="<?php echo e(trans("local.section_id")); ?>" value="<?php echo e(request()->has("section_id") ? request()->get("section_id") : ""); ?>"> 
		</div> 
		 <button class="btn btn-success" type="submit" ><i class="fa fa-search" ></i ></button>
		<a href="<?php echo e(url("local")); ?>" class="btn btn-danger" ><i class="fa fa-close" ></i></a>
	 </form > 
<br ><table class="table table-responsive table-striped table-bordered"> 
		<thead > 
			<tr> 
				<th><?php echo e(trans("local.name")); ?></th> 
				<th><?php echo e(trans("local.edit")); ?></th> 
				<th><?php echo e(trans("local.show")); ?></th> 
				<th><?php echo e(trans("local.delete")); ?></th> 
				</thead > 
		<tbody > 
		<?php if(count($items) > 0): ?> 
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
				 <tr>
					<td><?php echo e(str_limit($d->name_lang , 20)); ?></td> 
				<td> <?php echo $__env->make("website.local.buttons.edit", ["id" => $d->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td> 
					<td> <?php echo $__env->make("website.local.buttons.view", ["id" => $d->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td> 
					<td> <?php echo $__env->make("website.local.buttons.delete", ["id" => $d->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td> 
					</tr> 
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
			 </tbody > 
		</table > 
	<?php echo $__env->make(layoutPaginate() , ["items" => $items], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>