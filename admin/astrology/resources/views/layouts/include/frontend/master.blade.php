<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.lorvent.com/astrology/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 04:33:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Homepage | Astrology</title>
    <!--=============== Global Css Start ===============-->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/select2/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/bootstrap_select2/css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/wow/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/revolution-slider/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/revolution-slider/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/revolution-slider/css/settings.css') }}">
    <!--=============== Global Css End ===============-->
    <!--=============== Custom Css Start ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    <!--=============== Custom Css End ===============-->
</head>
<body>
<!--=============== Preloader Section Start ===============-->
<div class="preloader" style="position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader-image" style="position: absolute;
  left: 50%;
  top: 50%;
  margin: -150px 0 0 -300px;">
        <img src="{{ asset('frontend/images/preloader.gif') }}" alt="loader-missing">
    </div>
</div>
@include('layouts.include.frontend.header')
<div>
  @yield('content')
</div>
@include('layouts.include.frontend.footer')
<div class="container">
  <span>Rashifal | Astrology | Kundli | Kundli Matching | Horoscope 2020 | Panchang | Career | Love | Gemstone Report | Lal Kitab | Love Calculator | Astrology Shop
  Premium Publication | Celebrity Horoscope | Advertisement | Festivals | Zodiac Sign Finder | forecast 2020 | Blog | Choose language
   Contact Us | About Us | Feedback | Meet The Author | Top stories | Contribute Here</span>
  <br>
  <center>
  <p> © Copyright 2020: All Rights Reserved Mishra4You </p></center>
</div>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/vendors/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/wow/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/sweetalert2/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<!--=============== Custom Js Start ===============-->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<!--=============== Custom Js End ===============-->
</body>

<!-- Mirrored from demo.lorvent.com/astrology/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 04:34:12 GMT -->
</html>



