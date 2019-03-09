<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
	<div class="modal-dialog modal-notify modal-primary text-left" role="document">
		<!--Content-->
		<div class="modal-content">
			<!--Header-->
			<div class="modal-header text-center">
				<h4 class="modal-title white-text w-100 font-weight-bold py-2"><?php echo e(trans('section.request')); ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>
			<form action="<?php echo e(concatenateLangToUrl('request/item')); ?>" method="post" enctype="multipart/form-data">
				<!--Body-->
				<div class="modal-body">
					<?php echo e(csrf_field()); ?>

					
					<div class="form-group <?php echo e($errors->has('section_id') ? 'has-error' : ''); ?>">
						<label for=""><?php echo e(trans('local.section_id')); ?></label> 
							<?php $sectionName =  isset($section_id) ? $section_id : old("section_id") ?>
							<?php echo Form::select('section_id',$data['data']['sections'],$sectionName, ['class'=>'form-control','id'=>'section_id', 'required' => true]); ?>

					</div>
					<?php if($errors->has("section_id")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("section_id")); ?></strong>
						</span>
					</div>
					<?php endif; ?>

					<div class="form-group <?php echo e($errors->has('local_id') ? 'has-error' : ''); ?>">
							<label for=""><?php echo e(trans('local.local_id')); ?></label> 
								<?php $localName =  isset($local_id) ? $local_id : old("local_id") ?>
								<?php echo Form::select('local_id',$data['data']['locaux'],$localName, ['class'=>'form-control','id'=>'local_id', 'style' => 'display: block;','required' => true]); ?>

						</div>
						<?php if($errors->has("local_id")): ?>
						<div class="alert alert-danger">
							<span class='help-block'>
							<strong><?php echo e($errors->first("local_id")); ?></strong>
							</span>
						</div>
						<?php endif; ?>

					<div class="form-group <?php echo e($errors->has('artisan_id') ? 'has-error' : ''); ?>" > 
						<label for="artisan_id"><?php echo e(trans("local.artisan_id")); ?></label>
						<input type="text" name="artisan_id" required class="form-control" id="artisan_id" value="<?php echo e(isset($item->artisan_id) ? $item->artisan_id : old("artisan_id")); ?>"  placeholder="<?php echo e(trans("local.artisan_id")); ?>">
					</div>
					<?php if($errors->has("artisan_id")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("artisan_id")); ?></strong>
						</span>
					</div>
					<?php endif; ?>
   			</div>

				<!--Footer-->
				<div class="modal-footer justify-content-center">
					<button type="submit" class="btn btn-outline-primary waves-effect"><?php echo e(trans('inscription.inscription')); ?> <i class="fas fa-paper-plane-o ml-1"></i></button>
				</div>
    		</div>
  		</form>
    <!--/.Content-->
	</div>
</div>

 

 