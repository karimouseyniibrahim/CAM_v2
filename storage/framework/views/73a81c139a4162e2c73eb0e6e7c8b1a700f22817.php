<?php $__env->startSection('title'); ?>
    <?php echo e(trans('medias.medias')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<style type="text/css">
.gallery
{
	display: inline-block;
	margin-top: 20px;
}
.close-icon{
	border-radius: 50%;
	position: absolute;
	right: 5px;
	top: -10px;
	padding: 5px 8px;
}
.form-image-upload{
	background: #e8e8e8 none repeat scroll 0 0;
	padding: 15px;
}
</style>

	<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('medias.medias') , 'model' => 'medias' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
         <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/medias/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


 		 <div class="form-group  <?php echo e($errors->has("name.en")  &&  $errors->has("name.ar")  ? "has-error" : ""); ?>" >
			<label for="name"><?php echo e(trans("medias.name")); ?></label>
				<?php echo extractFiled(isset($item) ? $item : null , "name", isset($item->name) ? $item->name : old("name") , "text" , "medias"); ?>

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

			<div class="form-group <?php echo e($errors->has("type") ? "has-error" : ""); ?>" > 
				<label for="type"><?php echo e(trans("medias.type")); ?></label>
				<select class="form-control" id="type" name="type">
					<option value="1"><?php echo e(trans("medias.galery")); ?></option>
					<option value="2"><?php echo e(trans("medias.nomenclature")); ?></option>
				</select>
			</div>
			<?php if($errors->has("type")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("type")); ?></strong>
					</span>
				</div>
			<?php endif; ?>
			<div class="form-group <?php echo e($errors->has("description.en")  &&  $errors->has("description.ar")  ? "has-error" : ""); ?>">
				<label for="description"><?php echo e(trans("formation.description")); ?></label>
				<?php echo extractFiled(isset($item) ? $item : null , "description", isset($item->description) ? $item->description : old("description") , "textarea" , "medias", "tinymce"); ?>

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

			<div class="form-group <?php echo e($errors->has("files")   ? "has-error" : ""); ?>">
				<div class="form-line">
					<label for=""><?php echo e(adminTrans('medias' , 'files')); ?></label>
					<div class="row">						
						<div class='list-group gallery'>
								<?php if(isset($data)): ?>
									<?php $__currentLoopData = $data['files']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="file-preview-frame krajee-default  kv-preview-thumb" id="file<?php echo e($file->id); ?>" data-fileindex="0" data-template="image">
										<div class="kv-file-content">
											<img class="img-responsive" style="height: 150px;" alt="" src="<?php echo e($file->url); ?>" />
										</div>											
												<div class="file-actions">
													<div class="file-footer-buttons">
														<button type="button" onclick="deleteThisfile(this,<?php echo e($file->id); ?>)"  data-link="<?php echo e(url('admin/medias/file/'.$file->id)); ?>"  class="btn-danger btn-secondary actionfile" ><i class="fa fa-trash"></i></button>
													</div>
												</div>

												<div class="clearfix"></div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>

							</div> <!-- list-group / end -->
						</div> <!-- row / end -->						
					<?php echo csrf_field(); ?>

					<div class="form-group">
						<div class="file-loading">
							<?php echo Form::file('files[]', array('multiple'=>true,'accept'=>'image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf','class'=>'file','data-overwrite-initial'=>'false','data-min-file-count'=>'1','data-max-file-count'=>'500','id'=>'file-1')); ?>                                      
						</div>
					</div>
				</div>
			</div> 
			<?php if($errors->has("files")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("files")); ?></strong>
					</span>
				</div>
			<?php endif; ?>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('medias.medias')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<?php echo $__env->make(layoutPath('layout.helpers.tynic'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo e(Html::script('/admin/plugins/momentjs/moment.js')); ?>

	<?php echo $__env->make('admin.shared.script_uploads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('admin.shared.actionOnfile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>