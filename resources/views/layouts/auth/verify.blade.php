<!doctype html>
<html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
        <title>@yield('page_name')</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
        <link rel="icon" href="https://komunat-ks.net/wp-content/uploads/2018/09/cropped-asociacioni_komunat1-1-32x32.jpg" sizes="32x32">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css')}}" />
		<!--(remove-empty-lines-end)-->
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css')}}" />
		<!--(remove-empty-lines-end)-->
		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/skins/default.css')}}" />
		<!-- Theme Custom CSS -->
		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.js')}}"></script>
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="{{ asset('img/logo.png')}}" height="54" alt="Porto Admin" />
				</a>

				@yield('content')


                <p class="text-center text-muted mt-3 mb-3">@lang('messages.Copyright') &copy; <span id="date"></span> - @lang('messages.All Rights Reserved')</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>
		<script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
	</body>
</html>
