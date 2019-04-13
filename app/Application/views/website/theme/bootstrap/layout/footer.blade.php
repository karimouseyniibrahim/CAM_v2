<!-- Footer -->
<footer class="page-footer font-small  light-blue text-center text-md-left">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
            <!-- Footer Links -->
                <div class="container text-center text-md-left">
                    <!-- Footer links -->
                    <div class="row text-center text-md-left mt-3 pb-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-3 mx-auto">
                                <p>
                                <img src="{{ url('/'.env('UPLOAD_PATH').'/'.logo())}}" class="card-img-top mx-auto d-block">
                                </p>
                                <h6 class="text-uppercase mb-4 font-weight-bold">{!! trans('setting.cam') !!}</h6>
                            </div>
                            <div class="col-md-6 col-lg-6 mx-auto my-6">
                            @if (!Auth::check())
                                <div class="call-to-action text-center">
                                    <a href="{{ url('/login') }}" class="btn btn-primary">{{ trans('website.login') }}</a>
                                </div>
                            @endif
                            </div>
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
                                <h6 class="text-uppercase mb-4 font-weight-bold">{!! trans('contact.contact') !!}</h6>
                                <p>
                                    <i class="fas fa-home mr-3"></i> {!! trans('setting.adresse') !!}</p>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i> {!! trans('setting.email') !!}</p>
                                <p>
                                    <i class="fas fa-phone mr-3"></i>{!! trans('setting.tel') !!}</p>
                                <p>
                                    <i class="fas fa-print mr-3"></i>{!! trans('setting.fax') !!}</p>
                            </div>
                            
                        <!-- Grid column -->

                    </div>
                </div>
            </div>
        </div>
            
    </div>

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid  text-center">
            <p class="copyright">{{ getSetting('siteTitle') }} © 2019</p>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!-- Footer -->

