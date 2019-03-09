<?php $__env->startSection('title'); ?>
    <?php echo e(trans('local.local')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('section/'.$item->section_id.'/view')); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> <?php echo e(trans('website.Back')); ?>  </a>
<section class="text-center my-5">
		
	<!-- Grid row -->
	<div class="row pull-<?php echo e(getDirection()); ?>">
		<!-- Grid column -->

		<div class="col-lg-12 col-md-12 mb-0">
		<div class="card card-cascade wider">
		<div class="card card-cascade wider">

<!-- Card image -->
		<div class="view view-cascade overlay">
			<img  class="card-img-top mx-auto d-block"  src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$item->image)); ?>"  style=" height: 250px;  " alt="Card image cap">			
		</div>
		<!-- Card content -->
		<div class="card-body card-body-cascade text-center">

		<!-- Title -->
		<h4 class="card-title blue-text pb-2"><strong><?php echo e($item->name_lang); ?></strong></h4>
		<!-- Subtitle -->
		<h5 class="pb-2"><strong><?php echo e($item->price); ?> <?php echo e(trans('local.price_unit')); ?> / <?php echo e($item->area); ?> <?php echo e(trans('local.area_unit')); ?> </strong></h5>
		<!-- Text -->
		<p class="card-text"><?php echo $item->description_lang; ?></p>

		<!-- Linkedin -->
		<a class="btn btn-info btn-rounded btn-md" data-toggle="modal" data-target="#modalRequest"><?php echo e(trans('local.request')); ?></a>

		</div>

</div>
		<?php echo $__env->make("website.section.request", ["sections" => $data['data'], "section_id" => $item->section_id,'local_id'=>$item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make(layoutMessage('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>