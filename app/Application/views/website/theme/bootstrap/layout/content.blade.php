<div class="container">
    <!--Section: Content-->
    <section class="mt-4">
        <!--Grid row-->
        <div class="row">
            @include(layoutSideBar('website'))
            <!--Grid column-->
            <div class="col-md-8 mb-4">
                @yield('content')
            </div>
        </div>
        <!--Grid row-->
    </section>
    <!--Section: Content-->    
</div>