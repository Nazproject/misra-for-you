<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Mishra4You | Shop</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('frontend/images/logo6.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('frontend/images/logo6.png') }}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) 	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('shop/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('shop/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('shop/style.css') }}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{ asset('shop/css/custom.css') }}">

	<!-- Modernizer js -->
	<script src="{{ asset('shop/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
	<!-- Header -->
	
	<div>
  		@include('shop.commons.header')
	</div>
	<!-- //Header -->
	<div>
  		@yield('content')
	</div>
	<!-- Footer Area -->	
	
	<div>
  		@include('shop.commons.footer')
	</div>
	<!-- END QUICKVIEW PRODUCT -->
	</div>

	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{ asset('shop/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('shop/js/popper.min.js') }}"></script>
	<script src="{{ asset('shop/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('shop/js/plugins.js') }}"></script>
	<script src="{{ asset('shop/js/active.js') }}"></script>
	
</body>
</html>