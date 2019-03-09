<?php
    $p = permissionArray();
?>
<?php $__currentLoopData = getMenu('Admin'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($admin['item']['id'] == 21 || $admin['item']['id'] == 28): ?>
        <?php if(env('APP_ENV') == 'local' ): ?>
            <li>
                <?php if(array_key_exists('item' , $admin)): ?>
                    <?php if(array_intersect($admin['item']['controller_path']  ,$p)): ?>
                        <a href="<?php echo e(array_key_exists('sub' , $admin) ? 'javascript:void(0);' : url($admin['item']['link'])); ?>"
                           class="<?php echo e(array_key_exists('sub' , $admin) ? 'menu-toggle' : ''); ?>">
                            <?php if(array_key_exists('sub' , $admin)): ?>
                                <span class="menu-caret">
                          <i class="material-icons">arrow_drop_down</i>
                        </span>
                            <?php endif; ?>
                            <?php echo $admin['item']['icon'] != null ? $admin['item']['icon']:  ''; ?>

                            <span>
                        <?php echo e(getDefaultValueKey($admin['item']['name'])); ?>

                    </span>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(array_key_exists('sub' , $admin)): ?>
                    <ul class="sub-menu">
                        <?php $__currentLoopData = $admin['sub']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(array_intersect($sub['controller_path']  ,$p)): ?>
                                <li>
                                    <a href="<?php echo e(url($sub['link'])); ?>" class=" waves-effect waves-block">
                                        <?php echo $sub['icon'] != null ? $sub['icon']:  ''; ?>

                                        <span>
                                     <?php echo e(getDefaultValueKey($sub['name'])); ?>

                                </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    <?php else: ?>
        <li>
            <?php if(array_key_exists('item' , $admin)): ?>
                <?php if(array_intersect($admin['item']['controller_path']  ,$p)): ?>
                    <a href="<?php echo e(array_key_exists('sub' , $admin) ? 'javascript:void(0);' : url($admin['item']['link'])); ?>"
                       class="<?php echo e(array_key_exists('sub' , $admin) ? 'menu-toggle' : ''); ?>">
                        <?php if(array_key_exists('sub' , $admin)): ?>
                            <span class="menu-caret">
                              <i class="material-icons">arrow_drop_down</i>
                            </span>
                        <?php endif; ?>
                        <?php echo $admin['item']['icon'] != null ? $admin['item']['icon']:  ''; ?>

                        <span>
                            <?php echo e(getDefaultValueKey($admin['item']['name'])); ?>

                        </span>
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(array_key_exists('sub' , $admin)): ?>

                <ul class="sub-menu">
                    <?php $__currentLoopData = $admin['sub']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(array_intersect($sub['controller_path'] ,$p)): ?>
                            <?php if($sub['id'] == 13 ||$sub['id'] == 12 ||$sub['id'] == 11||$sub['id'] == 14||$sub['id'] == 15 ): ?>
                                <?php if(env('APP_ENV') == 'local' ): ?>
                                    <li>
                                        <a href="<?php echo e(url($sub['link'])); ?>" class=" waves-effect waves-block">
                                            <?php echo $sub['icon'] != null ? $sub['icon']:  ''; ?>

                                            <span>
                                                 <?php echo e(getDefaultValueKey($sub['name'])); ?>

                                            </span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li>
                                    <a href="<?php echo e(url($sub['link'])); ?>" class=" waves-effect waves-block">
                                        <?php echo $sub['icon'] != null ? $sub['icon']:  ''; ?>

                                        <span>
                                                 <?php echo e(getDefaultValueKey($sub['name'])); ?>

                                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

        </li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>