<?php $__env->startSection('title'); ?>
    home Control
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.user')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['userCount']); ?>" data-speed="15" data-fresh-interval="20"><?php echo e($data['userCount']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.groups')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['groupCount']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['groupCount']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.permissions')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['permissionsCount']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['permissionsCount']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.roles')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['roleCount']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['roleCount']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">find_in_page</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.pages')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['pages']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['pages']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">menu</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.menus')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['menus']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['menus']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">build</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.setting')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['setting']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['setting']); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="card card-block">
                    <div class="icon">
                        <i class="material-icons">info</i>
                    </div>
                    <div class="content">
                        <div class="text"><?php echo e(trans('home.logs')); ?></div>
                        <div class="number count-to" data-from="0" data-to="<?php echo e($data['logs']); ?>" data-speed="1000" data-fresh-interval="20"><?php echo e($data['logs']); ?></div>
                    </div>
                </div>
            </div>
    </div>



    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div class="card card-block">
                <div class="header">
                    <h5><?php echo e(trans('home.last_register_user')); ?></h5>
                </div>
                <div class="body">
                    <div class="">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo e(trans('home.username')); ?></th>
                                <th><?php echo e(trans('home.created_at')); ?></th>
                                <th><?php echo e(trans('curd.edit')); ?></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $data['lastRegisterUser']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($last->id); ?></td>
                                    <td><?php echo e($last->name); ?></td>
                                    <td><?php echo e($last->created_at); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('admin/user/item/'.$last->id)); ?>"><?php echo e(trans('home.edit')); ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="card card-block">
                <div class="">
                    <div class="m-b--35 font-bold"><h5><?php echo e(trans('home.admin_panel_log')); ?></h5></div>
                    <ul class="list-unstyled m-x-n m-b-0">
                        <?php $__currentLoopData = $data['log']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="b-t p-a-1">
                                <a href="<?php echo e(url('admin/log/'.$Log->id.'/view')); ?>" class="col-white">
                                    <?php if($Log->user): ?>
                                        #<?php echo e($Log->user->name); ?>

                                    <?php else: ?>
                                        <?php echo e(trans('admin.Visitor')); ?>

                                    <?php endif; ?>
                                    <span class="pull-right align-left">
                                         <b><?php echo e($Log->model); ?></b> : <?php echo e($Log->action); ?>

                                    </span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make(layoutExtend(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>