<?php $__env->startSection('title'); ?>
    <?php echo e(trans('news.news')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('news')); ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i> <?php echo e(trans('website.Back')); ?>  </a>
	
		<div class="single-news mt-4 ">

          <!-- Image -->
          <div class="view view-cascade overlay z-depth-1-half mb-4 ">
            <img class="card-img-top mx-auto d-block" src="<?php echo e(url('/'.env('UPLOAD_PATH').'/'.$item->image)); ?>" style="height:200px" >
          </div>		  
          <!-- Data -->
          <div class="news-data d-flex justify-content-between">
           
          </div>
          <!-- Excerpt -->
          <h3 class="font-weight-bold dark-grey-text mb-3"><a><?php echo e(nl2br($item->title_lang)); ?></a></h3>
          <p class="dark-grey-text"><?php echo e(nl2br($item->description_lang)); ?></p>

        </div>
        <!-- Featured news -->       

<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>