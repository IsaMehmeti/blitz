<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>@yield('page_name')</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="https://komunat-ks.net/wp-content/uploads/2018/09/cropped-asociacioni_komunat1-1-32x32.jpg" sizes="32x32">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    @yield('custom_header')
    <!--(remove-empty-lines-end)-->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}" />

    <!--(remove-empty-lines-end)-->
    <script src="{{asset('vendor/modernizr/modernizr.js')}}"></script>


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('css/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Head Libs -->
</head>

<body>
<section class="body">

    <!--  Header located: layouts>header.blade.php  -->
    @include('layouts.header')

    <!--  Notifications-alerts..etc. located: layouts>notifications.blade.php  -->

    <div class="inner-wrapper">

        <!--  Sidebar located: layouts>sidebar.blade.php  -->
        @include('layouts.sidebar')

        <section role="main" class="content-body">
            <header class="page-header">
                <h2>@yield('page_name')</h2>
            </header>

        @include('layouts.notifications')
            <!-- start: page -->
        @yield('content')
        <!-- end: page -->

        </section>
    </div>

</section>
@include('layouts.footer')


<!-- Vendor -->
<script src="{{asset('vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('vendor/common/common.js')}}"></script>
<script src="{{asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
<!-- Specific Page Vendor -->
@yield('custom_footer')
<!-- Theme Base, Components and Settings -->
<script src="{{asset('js/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('js/theme.init.js')}}"></script>
<!-- Examples -->


</body>
</html>
