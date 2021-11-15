<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">--}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <style>
        .modal .modal-content.form-wrapper {
            width: 100%;
            height: 470px;
            position: relative;
            background: #f2f3f5;
        }
        .modal .modal-content.form-wrapper .icon-box {
            height: 50px;
            width: 50px;
            background: #007bff;
            color: #f2f3f5;
            margin: 0 auto;
            position: absolute;
            top: -4%;
            left: -2%;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .modal .modal-content.form-wrapper .close-box {
            height: 50px;
            width: 50px;
            background: #f00;
            color: #f2f3f5;
            margin: 0 auto;
            position: absolute;
            top: -4%;
            right: -2%;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .modal .modal-content.form-wrapper .btn-info {
            transition: all 500ms;
            background: #007bff;
            color: #fff;
        }
        .modal .modal-content.form-wrapper .btn-info:hover {
            background: transparent;
            border-color: #007bff;
            color: #007bff;
        }
        .modal .modal-content.form-wrapper .social-login a {
            transition: all 500ms;
            display: inline-block;
            height: 40px;
            width: 40px;
            margin: 0 auto;
            background: #007bff;
            color: #fff;
            border-radius: 50%;
            margin: 0 auto;
            padding-top: 7px;
            border: 1px solid transparent;
        }
        .modal .modal-content.form-wrapper .social-login a.google {
            background: #db4437;
        }
        .modal .modal-content.form-wrapper .social-login a.google:hover {
            border-color: #db4437;
            color: #db4437;
            background: transparent;
        }
        .modal .modal-content.form-wrapper .social-login a.facebook {
            background: #4267b2;
        }
        .modal .modal-content.form-wrapper .social-login a.facebook:hover {
            border-color: #4267b2;
            color: #4267b2;
            background: transparent;
        }
        .modal .modal-content.form-wrapper .social-login a.twitter {
            background: #1da1f2;
        }
        .modal .modal-content.form-wrapper .social-login a.twitter:hover {
            border-color: #1da1f2;
            color: #1da1f2;
            background: transparent;
        }
        .modal .modal-content.form-wrapper .social-login a.github {
            background: #24292e;
        }
        .modal .modal-content.form-wrapper .social-login a.github:hover {
            border-color: #24292e;
            color: #24292e;
            background: transparent;
        }
    </style>

</head>
<body class="js">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->


@include('layouts.cores.header')

@yield('content')
<!-- Start Footer Area -->
@include('layouts.cores.footer')
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Color JS -->
<script src="{{ asset('js/colors.js') }}"></script>
<!-- Slicknav JS -->
<script src="{{ asset('js/slicknav.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('js/owl-carousel.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('js/magnific-popup.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!-- Countdown JS -->
<script src="{{ asset('js/finalcountdown.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('js/nicesellect.js') }}"></script>
<!-- Flex Slider JS -->
<script src="{{ asset('js/flex-slider.js') }}"></script>
<!-- ScrollUp JS -->
<script src="{{ asset('js/scrollup.js') }}"></script>
<!-- Onepage Nav JS -->
<script src="{{ asset('js/onepage-nav.min.js') }}"></script>
<!-- Easing JS -->
<script src="{{ asset('js/easing.js') }}"></script>
<!-- Active JS -->
<script src="{{ asset('js/active.js') }}"></script>

<script src="{{ asset('js/my.js') }}"></script>

@include("login")
<!-- Registeration Modal -->
@include('register')
</body>
</html>
