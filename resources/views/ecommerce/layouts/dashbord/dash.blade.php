<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashbord/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbord/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashbord/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashbord/images/logo_2H_tech.png') }}" />
</head>
<body>


<div class="container-scroller">
    @include('ecommerce.layouts.dashbord.navdash')
    <div class="container-fluid page-body-wrapper">
        @include('ecommerce.layouts.dashbord.sidedash')
        @yield('content')
    </div>
</div>


<!-- plugins:js -->
<script src="{{ asset('dashbord/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('dashbord/js/vendor.bundle.addons.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('dashbord/js/off-canvas.js') }}"></script>
<script src="{{ asset('dashbord/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('dashbord/js/template.js') }}"></script>
<script src="{{ asset('dashbord/js/settings.js') }}"></script>
<script src="{{ asset('dashbord/js/todolist.js') }}"></script>
<script src="{{ asset('dashbord/js/bootbox.min.js') }}"></script>
<!-- endinject -->
@yield('custom-js')
</body>
</html>
