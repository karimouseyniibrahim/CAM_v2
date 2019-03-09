<div class="modal fade" id="modalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
	<div class="modal-dialog modal-notify modal-primary text-left" role="document">
		<!--Content-->
		<div class="modal-content">
			<!--Header-->
			<div class="modal-header text-center">
				<h4 class="modal-title white-text w-100 font-weight-bold py-2">Subscribe</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>
			
			<form action="<?php echo e(concatenateLangToUrl('inscription')); ?>" method="post" enctype="multipart/form-data">
				<!--Body-->
				<div class="modal-body">
					<?php echo e(csrf_field()); ?>

					
					<div class="form-group <?php echo e($errors->has("formation_id") ? "has-error" : ""); ?>">
						<label for=""><?php echo e(adminTrans('inscription','formation_id')); ?></label> 
							<?php $formationName =  isset($selected_id) ? $selected_id : old("formation_id") ?>
							<?php echo Form::select('formation_id',$formations,$formationName, ['class'=>'form-control','id'=>'formation_id', 'style' => 'display: block;']); ?>

					</div>
					<?php if($errors->has("formation_id")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("formation_id")); ?></strong>
						</span>
					</div>
					<?php endif; ?>
  
					<div class="form-group <?php echo e($errors->has("numero_artisan") ? "has-error" : ""); ?>" > 
						<label for="numero_artisan"><?php echo e(trans("inscription.numero_artisan")); ?></label>
						<input type="text" name="numero_artisan" class="form-control" id="numero_artisan" value="<?php echo e(isset($item->numero_artisan) ? $item->numero_artisan : old("numero_artisan")); ?>"  placeholder="<?php echo e(trans("inscription.numero_artisan")); ?>">
					</div>
					<?php if($errors->has("numero_artisan")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("numero_artisan")); ?></strong>
						</span>
					</div>
					<?php endif; ?>
  
					<div class="form-group <?php echo e($errors->has("name") ? "has-error" : ""); ?>" > 
					<label for="name"><?php echo e(trans("inscription.name")); ?></label>
						<input type="text" name="name" class="form-control" required id="name" value="<?php echo e(isset($item->name) ? $item->name : old("name")); ?>"  placeholder="<?php echo e(trans("inscription.name")); ?>">
					</div>
					<?php if($errors->has("name")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("name")); ?></strong>
						</span>
					</div>
					<?php endif; ?>
			
					<div class="form-group <?php echo e($errors->has("email") ? "has-error" : ""); ?>" > 
						<label for="email"><?php echo e(trans("inscription.email")); ?></label>
						<input type="text" name="email" class="form-control" id="email" value="<?php echo e(isset($item->email) ? $item->email : old("email")); ?>"  placeholder="<?php echo e(trans("inscription.email")); ?>">
					</div>
					<?php if($errors->has("email")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("email")); ?></strong>
						</span>
					</div>
					<?php endif; ?>
			
					<div class="form-group <?php echo e($errors->has("adresse") ? "has-error" : ""); ?>" > 
						<label for="adresse"><?php echo e(trans("inscription.adresse")); ?></label>
						<input type="text" name="adresse" class="form-control" id="adresse" value="<?php echo e(isset($item->adresse) ? $item->adresse : old("adresse")); ?>"  placeholder="<?php echo e(trans("inscription.adresse")); ?>">
					</div>
					<?php if($errors->has("adresse")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("adresse")); ?></strong>
						</span>
					</div>
					<?php endif; ?>
			
					<div class="form-group <?php echo e($errors->has("telephone") ? "has-error" : ""); ?>" > 
						<label for="telephone"><?php echo e(trans("inscription.telephone")); ?></label>
						<input type="text" name="telephone" class="form-control" id="telephone" required value="<?php echo e(isset($item->telephone) ? $item->telephone : old("telephone")); ?>"  placeholder="<?php echo e(trans("inscription.telephone")); ?>">
					</div>
					<?php if($errors->has("telephone")): ?>
					<div class="alert alert-danger">
						<span class='help-block'>
						<strong><?php echo e($errors->first("telephone")); ?></strong>
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