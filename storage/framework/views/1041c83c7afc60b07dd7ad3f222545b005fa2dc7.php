<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo e(url('/admin/home')); ?>"><i class="material-icons">home</i>
            <?php echo e(trans('home.home')); ?>

        </a>
    </li>
    <?php if(isset($title)): ?>
        <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/'.$model)); ?>"><i class="material-icons">library_books</i> <?php echo e(ucfirst($title)); ?></a></li>
    <?php endif; ?>
    <?php if(isset($action)): ?>
         <li class="breadcrumb-item active">
            <?php echo e($action); ?>  <?php echo e(ucfirst($title)); ?>

         </li>
    <?php endif; ?>
</ol>