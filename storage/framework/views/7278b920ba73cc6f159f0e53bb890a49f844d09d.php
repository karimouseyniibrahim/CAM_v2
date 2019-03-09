<?php $__env->startSection('title'); ?>
    <?php echo e(trans('inscription.inscription')); ?> <?php echo e(isset($item) ? trans('home.edit')  : trans('home.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('inscription.inscription') , 'model' => 'inscription' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ]); ?>
        <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <form action="<?php echo e(concatenateLangToUrl('admin/inscription/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

			
			<div class="form-group <?php echo e($errors->has("formation_id") ? "has-error" : ""); ?>">
				<label for=""><?php echo e(adminTrans('inscription','formation_id')); ?></label> 
				<?php $formationName =  isset($item->formation_id) ? $item->formation_id : old("formation_id") ?>
				<?php echo Form::select('formation_id',$data['data']['formation'],$formationName, ['class'=>'form-control','id'=>'formation_id']); ?>

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
					<input type="text" name="name" class="form-control" id="name" value="<?php echo e(isset($item->name) ? $item->name : old("name")); ?>"  placeholder="<?php echo e(trans("inscription.name")); ?>">
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
					<input type="text" name="telephone" class="form-control" id="telephone" value="<?php echo e(isset($item->telephone) ? $item->telephone : old("telephone")); ?>"  placeholder="<?php echo e(trans("inscription.telephone")); ?>">
			</div>
			<?php if($errors->has("telephone")): ?>
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong><?php echo e($errors->first("telephone")); ?></strong>
					</span>
				</div>
			<?php endif; ?>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?>  <?php echo e(trans('inscription.inscription')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>