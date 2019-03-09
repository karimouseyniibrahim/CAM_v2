<?php $__env->startSection('title'); ?>
    <?php echo e(trans('group.group')); ?> <?php echo e(isset($item) ? trans('curd.edit') : trans('curd.add')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent(layoutForm(), ['title' => trans('group.group'), 'model'=>'group' , 'action' => isset($item) ? trans('curd.edit')  : trans('curd.add') ]); ?>
    <?php echo $__env->make(layoutMessage(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <form action="<?php echo e(concatenateLangToUrl('admin/group/item')); ?><?php echo e(isset($item) ? '/'.$item->id : ''); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="name" id="name" placeholder="<?php echo e(trans('group.name')); ?>" class="form-control" value="<?php echo e(isset($item) ? $item->name : old('name')); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="slug" id="name" placeholder="<?php echo e(trans('group.slug')); ?>" class="form-control" value="<?php echo e(isset($item) ? $item->slug : old('slug')); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="form-line">
                    <textarea  name="description" id="description" placeholder="<?php echo e(trans('group.des')); ?>" class="form-control"><?php echo e(isset($item) ? $item->description : old('description')); ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <label for=""><?php echo e(trans('group.per_role')); ?></label>
                    <?php $roles = isset($data['roles_permission']) ? $data['roles_permission']->role->pluck('id')->all() : null ?>
                    <?php echo Form::select('roles[]' , $data['roles'] , $roles, ['multiple' => true  , 'id' => 'roles' ] ); ?>

                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <label for=""><?php echo e(trans('group.permission')); ?></label>
                    <?php $permission = isset($data['roles_permission']) ? $data['roles_permission']->permission->pluck('id')->all()  : null ?>
                    <?php echo Form::select('permission[]' , $data['permissions'] , $permission , ['multiple' => true , 'id' => 'permissions' ] ); ?>

                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    <?php echo e(trans('home.save')); ?> <?php echo e(trans('group.group')); ?>

                </button>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('/admin/plugins/multi-select/js/jquery.multi-select.js')); ?>"></script>
    <script src="<?php echo e(url('/admin/js/search.js')); ?>"></script>
    <script>
        $('#roles').multiSelect(search("Role Name"));
        $('#permissions').multiSelect(search("Permission Name"));
        function search(name){
            return {
                selectableHeader: "<input type='text' class='form-control' autocomplete='off'  placeholder='"+name+"'>",
                selectionHeader: "<input type='text' class='form-control' autocomplete='off' placeholder='"+name+"'>",
                afterInit: function(ms){
                    var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';
                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function(e){
                                if (e.which === 40){
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });
                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function(e){
                                if (e.which == 40){
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                },
                afterSelect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>