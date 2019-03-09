<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">

    <title>
        <?php echo $__env->yieldContent('title'); ?>
        |
        <?php echo e(getSetting('siteTitle')); ?>

    </title>

    <!-- page stylesheets -->
    <link rel="stylesheet" href="<?php echo e(url('style')); ?>/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css"/>
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="<?php echo e(url('style')); ?>/vendor/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo e(url('style')); ?>/vendor/PACE/themes/blue/pace-theme-minimal.css"/>
    <link rel="stylesheet" href="<?php echo e(url('style')); ?>/vendor/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo e(url('style')); ?>/vendor/animate.css/animate.css"/>
    <?php if(getDir() == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(url('style')); ?>/styles/app-rtl.css" id="load_styles_before"/>
        <link rel="stylesheet" href="<?php echo e(url('style')); ?>/styles/app.skins-rtl.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(url('style')); ?>/styles/app.css" id="load_styles_before"/>
        <link rel="stylesheet" href="<?php echo e(url('style')); ?>/styles/app.skins.css"/>
    <?php endif; ?>
<!-- endbuild -->

    <?php echo e(Html::style('admin/plugins/multi-select/css/multi-select.css')); ?>

    <?php echo e(Html::style('admin/plugins/bootstrap-select/css/bootstrap-select.css')); ?>

    
    <link rel="stylesheet" href="<?php echo e(url('style')); ?>/vendor/datatables/media/css/dataTables.bootstrap4.css"/>

    <?php echo e(Html::style('css/sweetalert.css')); ?>

    <?php echo e(Html::style('admin/plugins/tinymce/plugins/elfinder/css/elfinder.full.css')); ?>

    <?php echo e(Html::style('css/rate.css')); ?>

    <link rel="stylesheet" href="<?php echo e(url('css/fontawesome-iconpicker.min.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
    <style>
        .img-responsive {
            width: 100%
        }
        .search input{
            width:140px !important;
        }
    </style>
    <link href="<?php echo e(url('/css/mainselec2.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('/css/select2.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(url('/css/bootstrap-datetimepicker.css')); ?>" rel="stylesheet" />
    <!-- if you not use map remove this -->
    <?php echo e(Html::style('css/map.css')); ?>

    <!-- if you not use map remove this -->
</head>
<body>

<div class="app">
    <!--sidebar panel-->
    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <div class="sidebar-panel">
        <div class="brand">
            <!-- toggle offscreen menu -->
            <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
                <i class="material-icons">menu</i>
            </a>
            <!-- /toggle offscreen menu -->
            <!-- logo -->
            <a class="brand-logo">
                <img class="expanding-hidden" src="<?php echo e(url('/style')); ?>/images/laraflat-logo.png" alt=""/>
            </a>
            <!-- /logo -->
        </div>
        <div class="nav-profile dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <div class="user-image">
                    <img src="<?php echo e(url('/style')); ?>/images/avatar.jpg" class="avatar img-circle" alt="user" title="user"/>
                </div>
                <div class="user-info expanding-hidden">
                    <?php echo e(auth()->user()->name); ?>

                    <small class="bold"><?php echo e(auth()->user()->email); ?></small>
                </div>
            </a>
            <div class="dropdown-menu">
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="dropdown-item" hreflang="<?php echo e($localeCode); ?>"
                       href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode)); ?>">
                        <?php echo e($properties['native']); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="dropdown-divider"></div>

                <a href="<?php echo e(url('/admin/user/item/'.auth()->user()->id)); ?>"><i
                            class="material-icons">person</i><?php echo e(trans('home.profile')); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="material-icons">input</i><?php echo e(trans('home.sign_out')); ?></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </div>
        <!-- main navigation -->
        <nav>
            <p class="nav-title">NAVIGATION</p>
            <ul class="nav">
                <?php echo $__env->make(layoutMenu(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </ul>
        </nav>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
            <div class="header-inner">
                <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
                    <!-- toggle offscreen menu -->
                    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
                        <i class="material-icons">menu</i>
                    </a>
                    <!-- /toggle offscreen menu -->
                    <!-- logo -->
                    <a class="brand-logo hidden-xs-down">
                        <img src="<?php echo e(url('/style')); ?>/images/logo_white.png" alt="logo"/>
                    </a>
                    <!-- /logo -->
                </div>
                <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
                    <span>
                        <?php echo $__env->yieldContent('title'); ?>
                    </span>
                </a>

            </div>
        </nav>
        <!-- /top header -->

        <!-- main area -->
        <div class="main-content">
            <div class="content-view">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- bottom footer -->
            <div class="content-footer">
                <nav class="footer-left">
                    <ul class="nav">
                        <li>
                            <a href="javascript:;">
                                <span>Copyright</span>
                                &copy; 2017 <?php echo e(getSetting('siteTitle')); ?>

                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /bottom footer -->
        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->

</div>













<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="<?php echo e(url('style')); ?>/vendor/jquery/dist/jquery.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/PACE/pace.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/tether/dist/js/tether.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/fastclick/lib/fastclick.js"></script>
<script src="<?php echo e(url('style')); ?>/scripts/constants.js"></script>
<script src="<?php echo e(url('style')); ?>/scripts/main.js"></script>
<!-- endbuild -->

<!-- page scripts -->
<script src="<?php echo e(url('style')); ?>/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/flot/jquery.flot.resize.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/flot/jquery.flot.stack.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/flot-spline/js/jquery.flot.spline.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo e(url('style')); ?>/data/maps/jquery-jvectormap-us-aea.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
<script src="<?php echo e(url('style')); ?>/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>
<script src="<?php echo e(url('style')); ?>/scripts/helpers/noty-defaults.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
<!-- end page scripts -->

<!-- initialize page scripts -->
<script src="<?php echo e(url('style')); ?>/scripts/dashboard/dashboard.js"></script>
<!-- end initialize page scripts -->
<?php echo e(Html::script('admin/js/jquery.dataTables.min.js')); ?>


<script src="<?php echo e(url('style')); ?>/vendor/datatables/media/js/dataTables.bootstrap4.js"></script>

<?php echo e(Html::script('js/sweetalert.min.js')); ?>


<script src="<?php echo e(url('js/select2.min.js')); ?>"></script>
<script src="<?php echo e(url('js/moment.js')); ?>"></script>
<script src="<?php echo e(url('js/bootstrap-datetimepicker.js')); ?>"></script>

<script type="application/javascript">
    $('.select2').select2({
        theme: "bootstrap",
        dir:"<?php echo e(getDirection()); ?>"
    });
    $('.datepicker').datetimepicker({
        defaultDate: "<?php echo e(date('Y/m/d')); ?>",
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
        format: 'Y/MM/DD'
    });
    $('.datepicker2').datetimepicker({
        defaultDate: "",
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
        format: 'Y/MM/DD'
    });

    $('.time').datetimepicker({
        format: 'LT',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        }
    });
    function deleteThisItem(e) {
        var link = $(e).data('link');
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Item Again!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function () {
                window.location = link;
            });
    }

    function checkAll() {
        $('input[name="id[]"]').each(function () {
            if (!$(this).prop('checked')) {
                $(this).prop('checked' , true);
            }
        });
    }

    function unCheckAll() {
        $('input[name="id[]"]').each(function () {
            if ($(this).prop('checked')) {
                $(this).prop('checked' , false);
            }
        });
    }

    function deleteThemAll(e) {
        var link = $(e).data('link');
        var check = [];
        $('input[name="id[]"]').each(function () {
            if ($(this).prop('checked')) {
                check.push($(this).val());
            }
        });
        if (check.length > 0) {
            swal({
                    title: "<?php echo app('translator')->getFromJson('admin.Are you sure?'); ?>",
                    text: "<?php echo app('translator')->getFromJson('admin.You will not be able to recover this Item Again!'); ?>",
                    type: "<?php echo app('translator')->getFromJson('admin.warning'); ?>",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "<?php echo app('translator')->getFromJson('admin.Yes, delete it!'); ?>",
                    closeOnConfirm: false
                },
                function () {
                    window.location = link + '?id[]=' + check;
                });
        } else {
            alert("<?php echo app('translator')->getFromJson('admin.Please Select Some items'); ?>");
        }
    }

    $('.nav-item').on('click', function (e) {
        $(this).siblings().removeClass('active');
        $(this).siblings().find('a').removeClass('active');
        $(this).addClass('active');
        $(this).find('a').addClass('active');
        $(this).closest('ul.nav').next('.tab-content').children('.tab-pane').each(function () {
            $(this).removeClass('active');
        });
        var id = $(this).find('a').attr('href');
        $(id).addClass('active');
    });
    $('#rate').barrating({
        theme: 'fontawesome-stars',
        onSelect: function (value, text, event) {
            $('#rate').closest('form').submit();
        }
    });

</script>
<script src="<?php echo e(url('js/fontawesome-iconpicker.min.js')); ?>"></script>
<!-- if you not use map remove this -->
<script src="<?php echo e(url('js/map.js')); ?>" ></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(getSetting('GOOGLE_API_MAP')); ?>&libraries=places&callback=initMap" async defer></script>
<script src="<?php echo e(url('js/showMap.js')); ?>" async defer></script>
<!-- if you not use map remove this -->
<script>
    $('.icon-field').iconpicker();
</script>
<?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
