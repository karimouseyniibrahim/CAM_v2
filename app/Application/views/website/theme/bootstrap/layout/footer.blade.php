<!-- Footer -->
<footer class="page-footer font-small  light-blue text-center text-md-left pt-4">

    <!-- Footer Links-->
    
    <!--/.Footer Links -->

    <hr>
    @if (!Auth::check())
        <div class="call-to-action text-center my-4">
            <a href="{{ url('/login') }}" class="btn btn-primary">{{ trans('website.login') }}</a>
        </div>
    @endif

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            <p class="copyright">{{ getSetting('siteTitle') }} © 2019</p>
        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!-- Footer -->