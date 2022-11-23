<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/monsta-preview/monsta/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:49:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All in One || E-commerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/assets/img/shopping.png">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/style.css">
</head>

<body>

<!-- Main Wrapper Start -->
<div @yield('black')>
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    @include('frontEnd.include.header')
    @yield('content')
    @include('frontEnd.include.footer')

</div>

@yield('modal')



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('frontEnd')}}/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('frontEnd')}}/assets/js/main.js"></script>



</body>


<!-- Mirrored from demo.hasthemes.com/monsta-preview/monsta/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:49:44 GMT -->
</html>
