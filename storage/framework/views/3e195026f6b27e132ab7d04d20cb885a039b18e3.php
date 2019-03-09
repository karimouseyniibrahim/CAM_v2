<?php $__env->startSection('title'); ?>
    <?php echo e(trans('news.news')); ?> <?php echo e(trans('home.view')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm() , ['title' => trans('news.news') , 'model' => 'news' , 'action' => trans('home.view')  ]); ?>
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200"><?php echo e(trans("news.title")); ?></th>
					<td><?php echo e(nl2br($item->title_lang)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("news.description")); ?></th>
					<td><?php echo e(nl2br($item->description_lang)); ?></td>
				</tr>
				<tr>
				<th width="200"><?php echo e(trans("news.image")); ?></th>
					<td>
					<img src="<?php echo e(small($item->image)); ?>" width="100" />
					</td>
				</tr>
		</table>

        <?php echo $__env->make('admin.news.buttons.delete' , ['id' => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('admin.news.buttons.edit' , ['id' => $item->id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>