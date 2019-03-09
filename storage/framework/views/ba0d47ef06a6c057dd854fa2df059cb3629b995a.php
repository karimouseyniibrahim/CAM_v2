<header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  theme-light-blue">
    
      <!-- Additional container -->
      <div class="container">
      <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars" style="display: block;"></a>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(getSetting('siteTitle')); ?>

            </a>
        </div>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
          aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
     
           <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <?php echo website_menu('website'); ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('contact')); ?>"><?php echo e(trans('website.Contact Us')); ?></a>
            </li>
            <?php if(Auth::check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="<?php echo e(url('/admin')); ?>/images/user.png" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="<?php echo e(url('/admin/home')); ?>"><?php echo e(trans('website.admin')); ?></a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <?php echo e(trans('website.logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="langDropdown" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><?php echo e(getCurrentLang()); ?></a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="langDropdown">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode)); ?>">
                            <?php echo e($properties['native']); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </li>
          </ul>
          <!-- Links -->
        </div>
        <!-- Collapsible content -->
    
      </div>
      <!-- Additional container -->
    
    </nav>
    <!--/.Navbar-->
    
    </header>