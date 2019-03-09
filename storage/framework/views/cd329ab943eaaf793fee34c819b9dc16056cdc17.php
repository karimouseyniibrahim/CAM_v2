<?php $__env->startSection('title'); ?>
    <?php echo e(trans('news.news')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('news.news') , 'model' => 'news' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
         <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/news/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


 		 <div class="form-group  <?php echo e($errors->has("title.en")  &&  $errors->has("title.ar")  ? "has-error" : ""); ?>" >
			<label for="title"><?php echo e(trans("news.title")); ?></label>
				<?php echo extractFiled(isset($item) ? $item : null , "title", isset($item->title) ? $item->title : old("title") , "text" , "news" ); ?>

		</div>
			<?php if($errors->has("title.en")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("title.en")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
			<?php if($errors->has("title.ar")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("title.ar")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
			<div class="form-group <?php echo e($errors->has("description.en")  &&  $errors->has("description.ar")  ? "has-error" : ""); ?>">
					<label for="description"><?php echo e(trans("news.description")); ?></label>
					<?php echo extractFiled(isset($item) ? $item : null , "description", isset($item->description) ? $item->description : old("description") , "textarea" , "news", "tinymce"); ?>

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
					<label for=""><?php echo e(adminTrans('news' , 'image')); ?></label>
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

			<div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('news.news')); ?>

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