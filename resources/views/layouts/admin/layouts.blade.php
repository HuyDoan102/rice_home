<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}">
    <link rel="icon" href="{{ asset("images/logo/favicon.png") }}" type="image/x-icon"/>

    <link href="{{ asset("vendor/fonts/circular-std/style.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/admin/style.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/fonts/fontawesome/css/fontawesome-all.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/charts/chartist-bundle/chartist.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/charts/morris-bundle/morris.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/charts/c3charts/c3.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/fonts/flag-icon-css/flag-icon.min.css") }}">
    <title>Thanh's Rice</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

        <div class="dashboard-wrapper">
            @yield('admin-content')

            @include('layouts.admin.footer')
        </div>
    </div>

    <script src="{{ asset("vendor/jquery/jquery-3.3.1.min.js") }}"></script>
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
    <script src="{{ asset("js/admin/dashboard-ecommerce.js") }}"></script>

</body>

</html>
