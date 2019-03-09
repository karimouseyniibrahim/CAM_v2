<?php $__env->startSection('title'); ?>
    <?php echo e(trans('local.local')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('local.local') , 'model' => 'local' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
         <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/local/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>


			<div class="form-group <?php echo e($errors->has("section_id") ? "has-error" : ""); ?>">
				<label for="section_id"><?php echo e(trans("local.section_id")); ?></label> 
				<?php $sectionName =  isset($item->section_id) ? $item->section_id : old("section_id") ?>
				<?php echo Form::select('section_id',$data['sections'],$sectionName, ['class'=>'form-control','id'=>'section_id']); ?>

			</div>
			<?php if($errors->has("section_id")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("section_id")); ?></strong>
					</span>
				</div>
			<?php endif; ?>

			<div class="form-group  <?php echo e($errors->has("name.en")  &&  $errors->has("name.ar")  ? "has-error" : ""); ?>" >
				<label for="name"><?php echo e(trans("local.name")); ?></label>
					<?php echo extractFiled(isset($item) ? $item : null , "name", isset($item->name) ? $item->name : old("name") , "text" , "local"); ?>

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

		 <div class="form-group <?php echo e($errors->has("description.en")  &&  $errors->has("description.ar")  ? "has-error" : ""); ?>">
					<label for="description"><?php echo e(trans("local.description")); ?></label>
					<?php echo extractFiled(isset($item) ? $item : null , "description", isset($item->description) ? $item->description : old("description") , "textarea" , "local", "tinymce"); ?>

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
					<label for=""><?php echo e(adminTrans('local' , 'image')); ?></label>
					<?php if(isset($item) && $item->image != ''): ?>
						<img src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$item->image)); ?>" class="img-responsive thumbnail" alt="">
						<br>
					<?php endif; ?>    
					<?php echo csrf_field(); ?>

					<div class="form-group">
						<div class="file-loading">
							<?php echo Form::file('image', array('multiple'=>false,'accept'=>'image/*','class'=>'file','data-overwrite-initial'=>'false','data-min-file-count'=>'1','data-max-file-count'=>'1','id'=>'file-1')); ?>                                      
						</div>
					</div>
				</div>
			</div> 
			<?php if($errors->has("image")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("image")); ?></strong>
					</span>
				</div>
			<?php endif; ?>

			<div class="form-row">
				<div class="form-group col-md-6">
					<div class="form-group <?php echo e($errors->has("price") ? "has-error" : ""); ?>" > 
						<label for="price"><?php echo e(trans("local.price")); ?></label>
							<input type="number" name="price" class="form-control" id="price" value="<?php echo e(isset($item->price) ? $item->price : old("price")); ?>"  placeholder="<?php echo e(trans("local.price")); ?>">
					</div>
					<?php if($errors->has("price")): ?>
						<div class="alert alert-danger">
							<span class='help-block'>
								<strong><?php echo e($errors->first("price")); ?></strong>
							</span>
						</div>
					<?php endif; ?>
				</div>
				<div class="form-group col-md-6">
					<div class="form-group <?php echo e($errors->has("area") ? "has-error" : ""); ?>" > 
						<label for="area"><?php echo e(trans("local.area")); ?></label>
							<input type="number" name="area" class="form-control" id="area" value="<?php echo e(isset($item->area) ? $item->area : old("area")); ?>"  placeholder="<?php echo e(trans("local.area")); ?>">
					</div>
					<?php if($errors->has("area")): ?>
						<div class="alert alert-danger">
							<span class='help-block'>
								<strong><?php echo e($errors->first("area")); ?></strong>
							</span>
						</div>
					<?php endif; ?>
				</div>
			</div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('local.local')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<?php echo $__env->make(layoutPath('layout.helpers.tynic'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo e(Html::script('/admin/plugins/momentjs/moment.js')); ?>

	<?php echo $__env->make('admin.shared.script_uploads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>