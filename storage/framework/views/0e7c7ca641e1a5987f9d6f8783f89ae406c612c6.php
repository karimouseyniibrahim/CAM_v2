<!-- Footer -->
<footer class="page-footer font-small  light-blue text-center text-md-left pt-4">

    <!--Footer Links-->
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-3">
                <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Third column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>
    <?php if(!Auth::check()): ?>
        <div class="call-to-action text-center my-4">
            <a href="<?php echo e(url('/login')); ?>" class="btn btn-primary"><?php echo e(trans('website.login')); ?></a>
        </div>
    <?php endif; ?>

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            <p class="copyright"><?php echo e(getSetting('siteTitle')); ?> © 2019</p>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!-- Footer -->