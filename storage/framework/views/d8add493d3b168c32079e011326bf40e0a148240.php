<?php $__env->startSection('title'); ?>
     <?php echo e(trans('news.news')); ?> <?php echo e(trans('home.control')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(count($items) > 0): ?> 
			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<!-- Grid row -->
<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-lg-5">

  <!-- Featured image -->
  <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
	<img class="img-fluid" src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$d->image)); ?>" alt="<?php echo e($d->title_lang); ?>">
	<a>
	  <div class="mask rgba-white-slight"></div>
	</a>
  </div>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-7">
  <!-- Post title -->
  <h3 class="font-weight-bold mb-3"><strong><?php echo e($d->title_lang); ?></strong></h3>
  <!-- Excerpt -->
  <p><?php echo e(str_limit($d->description_lang,150)); ?></p>
  <!-- Read more button -->
  <a class="btn btn-primary btn-md" href="<?php echo e(url('news/'.$d->id.'/view')); ?>">Read more</a>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<hr class="my-5">

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>