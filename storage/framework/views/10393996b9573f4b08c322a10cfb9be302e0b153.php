<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'CAM Souk Akhras')); ?> | <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap Core Css -->
    <?php echo e(Html::Style('website/css/css/bootstrap.min.css')); ?>

    <!-- Waves Effect Css -->
    <?php echo e(Html::Style('website/css/css/mdb.min.css')); ?>

    <?php echo e(Html::Style('website/css/themes/all-themes.min.css')); ?>


    <?php if(getDir() == 'rtl'): ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <?php endif; ?>
    <?php echo e(Html::style('css/sweetalert.css')); ?>

    <?php echo e(Html::Style('website/css/custom.css')); ?>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="theme-light-blue">

    <div id="app">
        <?php echo $__env->make(layoutMenu('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--Main layout-->
        <main class="mt-5 pt-2">
            <?php echo $__env->make(layoutMain('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make(layoutContent('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </main>
        <?php echo $__env->make(layoutFooter('website'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <!-- Jquery Core Js -->
    <?php echo e(Html::script('website/css/js/jquery-3.3.1.min.js')); ?>

    <!-- Bootstrap Core Js -->
    <?php echo e(Html::script('website/css/js/popper.min.js')); ?>

    <!-- Select Plugin Js -->
    <?php echo e(Html::script('website/css/js/bootstrap.min.js')); ?>

    <!-- Slimscroll Plugin Js -->
    <?php echo e(Html::script('website/css/js/mdb.min.js')); ?>

    <?php echo e(Html::script('website/css/js/request.js')); ?>

    <?php echo e(Html::script('js/sweetalert.min.js')); ?>

    <?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldPushContent('js'); ?>

</body>
</html>
