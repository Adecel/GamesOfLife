<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/assets/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}">

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-circle"></div>
    <div class="preloader-img">
        <img src="{{ asset('frontend/assets/img/core-img/leaf.png') }}" alt="">
    </div>
</div>

<!-- ##### Header Area Start ##### -->
@include('frontend.body.header')
<!-- ##### Header Area End ##### -->

<!-- ##### Main section Start ##### -->
@yield('main')
<!-- ##### Main section End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('frontend.body.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files #####  -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('frontend/assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('frontend/assets/js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('frontend/assets/js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('frontend/assets/js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('frontend/assets/js/active.js') }}"></script>
</body>

</html>
