<html @if (app()->getLocale() == 'ar') lang="ar" direction="rtl" dir="rtl" style="direction: rtl" @else lang="en" @endif>
	<!--begin::Head-->
	<head>
        <base href="{{ asset('assets/front') }}/">
		<title>
            @yield('title', 'iraqi audit house')
        </title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="img/logo.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">
		<style>
			body, * {
				font-family: "Changa", sans-serif;
			}
		</style>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="css/skins/skin-finance.css">
		
		@if (app()->getLocale() == 'ar')
			<link rel="stylesheet" href="css/demos/rtl-demo-finance.css">
			<link rel="stylesheet" href="css/rtl-theme.css">
		@else
		{{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css"> --}}
			<link rel="stylesheet" href="css/theme.css">
			<link rel="stylesheet" href="css/demos/demo-finance.css">
		@endif

        @stack('css')
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body>
	<div class="body">
		
		@include('front.layout.header')

		<div role="main" class="main">

			@yield('content')

		</div>

		@include('front.layout.footer')
		
	</div>

	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="js/views/view.contact.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	</body>

</html>