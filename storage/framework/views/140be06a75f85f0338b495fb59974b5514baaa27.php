<?php $__env->startSection('title'); ?>
    <?php echo e(trans('medias.medias')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('medias.medias') , 'model' => 'medias' , 'action' => trans('home.view')  ]); ?>
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200"><?php echo e(trans("medias.name")); ?></th>
					<td><?php echo e(nl2br($item->name_lang)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("medias.description")); ?></th>
					<td><?php echo e(nl2br($item->description_lang)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("medias.type")); ?></th>
					<td><?php echo e(nl2br($item->type)); ?></td>
				</tr>
		</table>

        <?php echo $__env->make('admin.medias.buttons.delete' , ['id' => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('admin.medias.buttons.edit' , ['id' => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>