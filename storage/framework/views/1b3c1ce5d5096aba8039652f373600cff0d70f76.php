<?php $__env->startSection('title'); ?>
    <?php echo e(trans('artisan.artisan')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('artisan.artisan') , 'model' => 'artisan' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
         <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/artisan/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


 		 <div class="form-group <?php echo e($errors->has("numero_artisan") ? "has-error" : ""); ?>" > 
			<label for="numero_artisan"><?php echo e(trans("artisan.numero_artisan")); ?></label>
				<input type="text" name="numero_artisan" class="form-control" id="numero_artisan" value="<?php echo e(isset($item->numero_artisan) ? $item->numero_artisan : old("numero_artisan")); ?>"  placeholder="<?php echo e(trans("artisan.numero_artisan")); ?>">
		</div>
			<?php if($errors->has("numero_artisan")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("numero_artisan")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group  <?php echo e($errors->has("name.en")  &&  $errors->has("name.ar")  ? "has-error" : ""); ?>" >
			<label for="name"><?php echo e(trans("artisan.name")); ?></label>
				<?php echo extractFiled(isset($item) ? $item : null , "name", isset($item->name) ? $item->name : old("name") , "text" , "artisan"); ?>

		</div>
			<?php if($errors->has("name.en")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("name.en")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
			<?php if($errors->has("name.ar")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("name.ar")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group <?php echo e($errors->has("email") ? "has-error" : ""); ?>" > 
			<label for="email"><?php echo e(trans("artisan.email")); ?></label>
				<input type="text" name="email" class="form-control" id="email" value="<?php echo e(isset($item->email) ? $item->email : old("email")); ?>"  placeholder="<?php echo e(trans("artisan.email")); ?>">
		</div>
			<?php if($errors->has("email")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("email")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group <?php echo e($errors->has("telephone") ? "has-error" : ""); ?>" > 
			<label for="telephone"><?php echo e(trans("artisan.telephone")); ?></label>
				<input type="text" name="telephone" class="form-control" id="telephone" value="<?php echo e(isset($item->telephone) ? $item->telephone : old("telephone")); ?>"  placeholder="<?php echo e(trans("artisan.telephone")); ?>">
		</div>
			<?php if($errors->has("telephone")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("telephone")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
		 <div class="form-group <?php echo e($errors->has("address") ? "has-error" : ""); ?>" > 
			<label for="address"><?php echo e(trans("artisan.address")); ?></label>
				<input type="text" name="address" class="form-control" id="address" value="<?php echo e(isset($item->address) ? $item->address : old("address")); ?>"  placeholder="<?php echo e(trans("artisan.address")); ?>">
		</div>
			<?php if($errors->has("address")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("address")); ?></strong>
					</span>
				</div>
			<?php endif; ?>


            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('artisan.artisan')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>