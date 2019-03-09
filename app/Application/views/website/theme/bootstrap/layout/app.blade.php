<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CAM Souk Akhras') }} | @yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap Core Css -->
    {{ Html::Style('website/css/css/bootstrap.min.css') }}
    <!-- Waves Effect Css -->
    {{ Html::Style('website/css/css/mdb.min.css') }}
    {{ Html::Style('website/css/themes/all-themes.min.css') }}

    @if(getDir() == 'rtl')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    @endif
    {{ Html::style('css/sweetalert.css') }}
    {{ Html::Style('website/css/custom.css') }}

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @stack('css')
</head>
<body class="theme-light-blue">

    <div id="app">
        @include(layoutMenu('website'))
        <!--Main layout-->
        <main class="mt-5 pt-2">
            @include(layoutMain('website'))
            @include(layoutContent('website'))
        </main>
        @include(layoutFooter('website'))
    </div>

    <!-- Jquery Core Js -->
    {{ Html::script('website/css/js/jquery-3.3.1.min.js') }}
    <!-- Bootstrap Core Js -->
    {{ Html::script('website/css/js/popper.min.js') }}
    <!-- Select Plugin Js -->
    {{ Html::script('website/css/js/bootstrap.min.js') }}
    <!-- Slimscroll Plugin Js -->
    {{ Html::script('website/css/js/mdb.min.js') }}
    {{ Html::script('website/css/js/request.js') }}
    {{ Html::script('js/sweetalert.min.js') }}
    @include('sweet::alert')
    @stack('js')

</body>
</html>
