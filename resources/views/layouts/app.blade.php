<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- base:css -->
    <link rel="stylesheet" href="templates/dataviz/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{config('app.default_template')}}/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{config('app.default_template')}}/vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{config('app.default_template')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{config('app.default_template')}}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{config('app.default_template')}}/images/favicon.png" />

</head>
<body>
    <div id="app">
        <div class="container-scroller">
            @include('element.navbar')

            <div class="container-fluid page-body-wrapper">
                @include('element.sidebar')

                @yield('content')

            </div>

    </div>
</body>
</html>

<script src="{{config('app.default_template')}}/vendors/js/vendor.bundle.base.js"></script>
<script src="{{config('app.default_template')}}/js/off-canvas.js"></script>
<script src="{{config('app.default_template')}}/js/hoverable-collapse.js"></script>
<script src="{{config('app.default_template')}}/js/template.js"></script>
<script src="{{config('app.default_template')}}/js/settings.js"></script>
<script src="{{config('app.default_template')}}/js/todolist.js"></script>
<script src="{{config('app.default_template')}}/vendors/chart.js/Chart.min.js"></script>
<script src="{{config('app.default_template')}}/js/dashboard.js"></script>