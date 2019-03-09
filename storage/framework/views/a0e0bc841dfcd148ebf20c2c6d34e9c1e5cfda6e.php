<?php $__env->startSection('title'); ?>
    <?php echo e(trans('section.section')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('section')); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> <?php echo e(trans('website.Back')); ?>  </a>
<section class="text-center my-5">
	<!-- Grid row -->
	<div class="row pull-<?php echo e(getDirection()); ?>">
		<!-- Grid column -->
		<div class="col-lg-12 col-md-12 mb-0">
			<!-- Featured image -->
			<div class="view overlay rounded z-depth-2 mb-4">
				<img class="card-img-top mx-auto d-block" style=" height: 250px;  " src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$item->image)); ?>" alt="<?php echo e($item->name_lang); ?>">
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<!-- Post title -->
			<h4 class="font-weight-bold mb-3"><strong><?php echo e($item->name_lang); ?></strong></h4>
			<!-- Excerpt -->
			<p class="dark-grey-text"><?php echo $item->description_lang; ?></p>

			<hr/>

			<?php $__currentLoopData = $data['locaux']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $local): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<!-- Grid row -->
				<div class="row text-left">
					<!-- Grid column -->
						<!--Image-->
						<div class="col-lg-3 mb-lg-0 mb-3">
							<img class="img-fluid" src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$local->image)); ?>"  style=" height: 150px;  "  alt="<?php echo e($local->name_lang); ?>">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
					<!-- Grid column -->
					<!-- Grid column -->
					<div class="col-lg-9">
						<!-- Excerpt -->
						<!-- Grid row -->
						<div class="row mb-3">
								<div class="col-md-11 col-10">
									<h5 class="font-weight-bold"><?php echo e($local->name_lang); ?></h5>									
								</div>
						</div>
							<!-- Grid row -->
							<div class="form-row">
									<div class="form-group col-md-6">
											<strong class=" font-weight-bold"><?php echo e(trans('local.price')); ?>:</strong> <?php echo e($local->price); ?> <?php echo e(trans('local.price_unit')); ?>

									</div>
									<div class="form-group col-md-6">
											<strong class="font-weight-bold"><?php echo e(trans('local.area')); ?>:</strong> <?php echo e($local->area); ?> <?php echo e(trans('local.area_unit')); ?>

									</div>									
								</div>
						<div class="d-flex justify-content-between">
							
							<div class="col-11 text-truncate pl-0 mb-3">
								<p href="#!" class="dark-grey-text"> <?php echo str_limit($local->description_lang,50); ?></p>
							</div>
							<a href="<?php echo e(url('local/'.$local->id.'/view')); ?>"><i class="fas fa-angle-double-right"></i></a>
						</div>
						
					</div>
					<!-- Grid column -->

				</div>
				<hr/>
				<!-- Grid row -->		
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<!-- Read more button -->
			<a class="btn btn-info btn-rounded btn-md" data-toggle="modal" data-target="#modalRequest"><?php echo e(trans('section.request')); ?></a>
			
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
		<?php echo $__env->make("website.section.request",  ["sections" => $data['data'], "section_id" => $item->id,"local_id" => null], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make(layoutMessage('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>