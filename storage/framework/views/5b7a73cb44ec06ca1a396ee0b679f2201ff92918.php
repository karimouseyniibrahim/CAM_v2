<?php $__env->startSection('title'); ?>
    <?php echo e(trans('request.request')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('request.request') , 'model' => 'request' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
         <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/request/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


 		 <div class="form-group <?php echo e($errors->has("artisan_id") ? "has-error" : ""); ?>" > 
			<label for="artisan_id"><?php echo e(trans("request.artisan_id")); ?></label>
				<input type="text" name="artisan_id" class="form-control" id="artisan_id" value="<?php echo e(isset($item->artisan_id) ? $item->artisan_id : old("artisan_id")); ?>"  placeholder="<?php echo e(trans("request.artisan_id")); ?>">
		</div>
			<?php if($errors->has("artisan_id")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("artisan_id")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group <?php echo e($errors->has("section_id") ? "has-error" : ""); ?>" > 
			<label for="section_id"><?php echo e(trans("request.section_id")); ?></label>
				<input type="text" name="section_id" class="form-control" id="section_id" value="<?php echo e(isset($item->section_id) ? $item->section_id : old("section_id")); ?>"  placeholder="<?php echo e(trans("request.section_id")); ?>">
		</div>
			<?php if($errors->has("section_id")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("section_id")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group <?php echo e($errors->has("local_id") ? "has-error" : ""); ?>" > 
			<label for="local_id"><?php echo e(trans("request.local_id")); ?></label>
				<input type="text" name="local_id" class="form-control" id="local_id" value="<?php echo e(isset($item->local_id) ? $item->local_id : old("local_id")); ?>"  placeholder="<?php echo e(trans("request.local_id")); ?>">
		</div>
			<?php if($errors->has("local_id")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("local_id")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group <?php echo e($errors->has("status") ? "has-error" : ""); ?>" > 
			<label for="status"><?php echo e(trans("request.status")); ?></label>
				<input type="text" name="status" class="form-control" id="status" value="<?php echo e(isset($item->status) ? $item->status : old("status")); ?>"  placeholder="<?php echo e(trans("request.status")); ?>">
		</div>
			<?php if($errors->has("status")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("status")); ?></strong>
					</span>
				</div>
			<?php endif; ?>


            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('request.request')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>