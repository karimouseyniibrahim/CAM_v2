<?php $__env->startSection('title'); ?>
    <?php echo e(trans('galery.galery')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
	<?php echo e(Html::style('css/mediastable.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('galery.galery') , 'model' => 'galery' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
         <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/galery/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" id="form" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


 		 <div class="form-group  <?php echo e($errors->has("name.en")  &&  $errors->has("name.ar")  ? "has-error" : ""); ?>" >
			<label for="name"><?php echo e(trans("galery.name")); ?></label>
				<?php echo extractFiled(isset($item) ? $item : null , "name", isset($item->name) ? $item->name : old("name") , "text" , "galery"); ?>

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

			<div class="form-group ">
				<label for=""><?php echo e(trans("galery.type")); ?></label> 
				<select class="form-control" id="type" name="type">
					<option value="1"><?php echo e(trans("galery.galery")); ?></option>
					<option value="2"><?php echo e(trans("galery.nomenclature")); ?></option>
				</select>
			</div>


			<div class="form-group <?php echo e($errors->has("description.en")  &&  $errors->has("description.ar")  ? "has-error" : ""); ?>">
				<label for="description"><?php echo e(trans("formation.description")); ?></label>
				<?php echo extractFiled(isset($item) ? $item : null , "description", isset($item->description) ? $item->description : old("description") , "textarea" , "formation", "tinymce"); ?>

			</div>
			<?php if($errors->has("description.en")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("description.en")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
			<?php if($errors->has("description.ar")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("description.ar")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
			<div class="form-group">
				<div class="form-line">
					<label for=""><?php echo e(adminTrans('galery' , 'images')); ?></label>
					<?php if(isset($item) && $item->images != ''): ?>
						<img src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$item->images)); ?>" class="img-responsive thumbnail" alt="">
						<br>
					<?php endif; ?>    
					<?php echo csrf_field(); ?>

					<div class="form-group">
						<div class="file-loading">
							<?php echo Form::file('images[]', array('multiple'=>true,'accept'=>'image/*','class'=>'file','data-overwrite-initial'=>'false','data-min-file-count'=>'1','data-max-file-count'=>'500','id'=>'file-1')); ?>                                      
						</div>
					</div>
				</div>
			</div>            

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default submitmedia" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('galery.galery')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<?php echo $__env->make(layoutPath('layout.helpers.tynic'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo e(Html::script('/admin/plugins/momentjs/moment.js')); ?>

	<?php echo $__env->make('admin.shared.script_uploads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<script src="<?php echo e(url('js/mediastable.js')); ?>" ></script>
	<script src="<?php echo e(url('admin/js/script.js')); ?>" ></script>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>