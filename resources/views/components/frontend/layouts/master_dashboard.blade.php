<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ui/frontend/assets/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/assets/css/color-01.css')}}">
</head>
<body class="home-page home-01 ">

    {{-- //mobile menu --}}
    <x-frontend.body.mobile/>

	<!--header-->
    <x-frontend.body.header/>

	<main id="main">
        {{$slot}}

	</main>

	{{-- footer --}}
    <x-frontend.body.footer/>

	<script src="{{asset('ui/frontend/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('ui/frontend/assets/js/functions.js')}}"></script>
</body>
</html>
