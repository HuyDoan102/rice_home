<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content={{csrf_token()}}>

    <title>Laravel Starter</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("dist/plugins/font-awesome/css/font-awesome.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("dist/css/adminlte.min.css") }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("dist/plugins/iCheck/flat/blue.css") }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset("dist/plugins/morris/morris.css") }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset("dist/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset("dist/plugins/datepicker/datepicker3.css") }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset("dist/plugins/daterangepicker/daterangepicker-bs3.css") }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset("dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="icon" href="{{ asset("images/logo/favicon.png") }}" type="image/x-icon"/>
</head>

<body class="hold-transition sidebar-mini">
    {{--@guest @yield('content') @else
        <div class="wrapper" id="app">
        @include('layouts.admin.header')
        @include('layouts.admin.sidebar') @yield('admin-content')
            @include('layouts.admin.footer')
        </div>

    @endguest--}}

    <div class="dashboard-main-wrapper">
        <div class="wrapper" id="app">
        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

        @yield('admin-content')

        @include('layouts.admin.footer')
        </div>
    </div>
    @yield('javascript')

    {{--<script src="{{ asset("vendor/jquery/jquery-3.3.1.min.js") }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.js") }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset("vendor/slimscroll/jquery.slimscroll.js") }}"></script>
    <!-- main js -->
    <script src="{{ asset("js/admin/main-js.js") }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset("vendor/charts/chartist-bundle/chartist.min.js") }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset("vendor/charts/sparkline/jquery.sparkline.js") }}"></script>
    <!-- morris js -->
    <script src="{{ asset("vendor/charts/morris-bundle/raphael.min.js") }}"></script>
    <script src="{{ asset("vendor/charts/morris-bundle/morris.js") }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset("vendor/charts/c3charts/c3.min.js") }}"></script>
    <script src="{{ asset("vendor/charts/c3charts/d3-5.4.0.min.js") }}"></script>
    <script src="{{ asset("vendor/charts/c3charts/C3chartjs.js") }}"></script>
    <script src="{{ asset("js/admin/dashboard-ecommerce.js") }}"></script>--}}

</body>

</html>
