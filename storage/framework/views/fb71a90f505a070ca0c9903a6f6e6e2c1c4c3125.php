<?php $__env->startSection('title'); ?>
    <?php echo e(trans('permission.permission')); ?> <?php echo e(isset($item) ? trans('home.edit') : trans('home.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent( layoutForm() , ['title' => trans('permission.permission') , 'model' => 'permission' , 'action' => isset($item) ? trans('home.edit') : trans('home.add') ]); ?>
    <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <form action="<?php echo e(concatenateLangToUrl('admin/permission/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <div class="form-line">
                <input type="text" name="name" id="name" placeholder="<?php echo e(trans('permission.name')); ?>" class="form-control" value="<?php echo e(isset($item) ? $item->name : old('name')); ?>"/>
            </div>
        </div>

        <div class="form-group">
            <div class="form-line">
                <input type="text" name="slug" id="name" class="form-control" placeholder="<?php echo e(trans('permission.slug')); ?>" value="<?php echo e(isset($item) ? $item->slug : old('slug')); ?>"/>
            </div>
        </div>


        <div class="form-group">
            <div class="form-line">
                <textarea  name="description" id="description"  placeholder="<?php echo e(trans('permission.des')); ?>" class="form-control"><?php echo e(isset($item) ? $item->description : old('description')); ?></textarea>
            </div>
        </div>


        <div class="form-group">
            <div class="form-line">
                <?php $type = isset($item) ? $item->controller_type : null ?>
                <?php echo Form::select('controller_type'  , $data['controller_type'] , $type , ['class' => 'form-control' , 'id' => 'type' , 'required']); ?>

            </div>
        </div>

        <div class="form-group">
            <div class="form-line">
                <?php $controller_name = isset($item) ? $item->controller_name : null ?>
                <?php echo Form::select('controller_name'  , [] , $controller_name , ['class' => 'form-control' , 'id' => 'controllers' , 'required']); ?>

            </div>
        </div>


        <div class="form-group">
            <div class="form-line">
                <?php $method_name= isset($item) ? $item->method_name : null ?>
                <?php echo Form::select('method_name'  , [] , $method_name , ['class' => 'form-control' , 'id' => 'method_name' , 'required']); ?>

            </div>
        </div>


        <div class="form-group">
            <div class="form-line">
                <label for=""><?php echo e(trans('admin.Not Allow')); ?>

                    <input type="radio" name="permission" <?php echo e(isset($item) && $item->permission == 0 ? 'checked' : ''); ?> value="0">
                </label>
                <label for=""><?php echo e(trans('admin.Allow')); ?>

                    <input type="radio" name="permission" <?php echo e(isset($item) && $item->permission == 1 ? 'checked' : ''); ?> value="1">
                </label>
            </div>
        </div>


        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-default" >
                <i class="material-icons">check_circle</i>
                <?php echo e(trans('permission.permission')); ?> <?php echo e(trans('home.save')); ?>

            </button>
        </div>


    </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.permission.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>