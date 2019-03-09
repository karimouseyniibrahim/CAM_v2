<?php $__env->startSection('title'); ?>
    <?php echo e(trans('formation.formation')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('formation')); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> <?php echo e(trans('website.Back')); ?>  </a>
<section class="text-center my-5">
		
	<!-- Grid row -->
	<div class="row pull-<?php echo e(getDirection()); ?>">
		<!-- Grid column -->
		<div class="col-lg-12 col-md-12 mb-0">
			<!-- Featured image -->
			<div class="view overlay rounded z-depth-2 mb-4">
				<img class="img-fluid" src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$item->image)); ?>" alt="<?php echo e($item->libelle_lang); ?>">
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>
		  
			<!-- Price -->
			<a class="blue-text">
				<h6 class="font-weight-bold mb-3"><?php echo e($item->price); ?> <?php echo e(trans('formation.price_unit')); ?></h6>
			</a>
			<!-- Post title -->
			<h4 class="font-weight-bold mb-3"><strong><?php echo e($item->libelle_lang); ?></strong></h4>
			<!-- Post data -->
			<p><?php echo e(trans('formation.from')); ?> : <?php echo e($item->debut_formation); ?> - <?php echo e($item->fin_formation); ?></p>
			<!-- Excerpt -->
			<p class="dark-grey-text"><?php echo $item->description_lang; ?></p>
			<!-- Read more button -->
			<a class="btn btn-info btn-rounded btn-md" data-toggle="modal" data-target="#modalSubscription"><?php echo e(trans('formation.subscribe')); ?></a>
		  
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
	
		<?php echo $__env->make("website.formation.subscribe", ["formations" => $data['data'], "selected_id" => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make(layoutMessage('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>