<?php $__env->startSection('title'); ?>
    <?php echo e(trans('request.request')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('request.request') , 'model' => 'request' , 'action' => trans('home.view')  ]); ?>
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200"><?php echo e(trans("request.artisan_id")); ?></th>
					<td><?php echo e(nl2br($item->artisan_id)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("request.section_id")); ?></th>
					<td><?php echo e(nl2br($item->section_id)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("request.local_id")); ?></th>
					<td><?php echo e(nl2br($item->local_id)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("request.status")); ?></th>
					<td><?php echo e(nl2br($item->status)); ?></td>
				</tr>
		</table>

        <?php echo $__env->make('admin.request.buttons.delete' , ['id' => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('admin.request.buttons.edit' , ['id' => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>