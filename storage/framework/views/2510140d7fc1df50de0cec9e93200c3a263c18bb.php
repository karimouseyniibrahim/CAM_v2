<div class="card-header no-bg b-a-0">
  <?php if(getDir() == 'rtl'): ?>
    <h2 class="pull-right">
  <?php else: ?>
    <h2 class="pull-left">
  <?php endif; ?>
        <?php echo e(isset($action) ? ucfirst($action) : trans('home.control')); ?>  <?php echo e(ucfirst($title)); ?>

    </h2>
   <?php if($button == true): ?>
           <?php if(getDir() == 'rtl'): ?>
             <h2 class="pull-left">
           <?php else: ?>
             <h2 class="pull-right">
           <?php endif; ?>
              <a href="<?php echo e(url('admin/'.$model.'/item')); ?>" class="btn bg-cyan btn-icon m-r-xs m-b-xs waves-effect">
                  <i class="material-icons">add</i> <?php echo e(trans('home.add')); ?> <?php echo e(ucfirst($title)); ?>

              </a>
       </span>
    <?php endif; ?>
    <div class="clearfix"></div>
</div>