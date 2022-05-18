<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<script type="text/javascript" src="{{asset('dash/js/stripe.js')}}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$settings->site_name}} | {{$title}}</title>
    <link rel="icon" href="{{ asset('storage/app/public/'. $settings->favicon) }}" type="image/png"/>
	
	@section('styles')
			<!-- Fonts and icons -->
		<script src="{{asset('dash/js/plugin/webfont/webfont.min.js')}}"></script>
	<!-- Sweet Alert -->
		<script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js')}} "></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="{{asset('dash/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('dash/css/fonts.min.css')}}">
		<link rel="stylesheet" href="{{asset('dash/css/atlantis.min.css')}}">
		<link rel="stylesheet" href="{{asset('dash/css/customs.css')}}">
		<link rel="stylesheet" href="{{asset('dash/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('dash/css/atlantis.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('dash/css/datatable.css')}}"/>
		<script src="{{asset('dash/js/jquery.js')}}"></script>
		<script defer src="{{asset('dash/js/alpine.js')}}"></script>
		<script src="{{asset('dash/js/chart.js')}}"></script>
	    <livewire:styles />	
	@show
	
</head>
<body data-background-color="light">
	<script>
		{{!! $settings->livechat !!}}	
	</script>

    <div id="app">
        <div class="wrapper">
            @yield('content')
				<footer class="footer">
                    <div class="container-fluid">
                        <div class="text-center row copyright text-align-center">
                            <p>All Rights Reserved {{$settings->site_name}} &copy; <?php echo date("Y")?></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    
	<livewire:scripts />
    <!--   Core JS Files   -->
	<script src="{{ asset('dash/js/core/jquery.3.2.1.min.js')}} "></script>
	<script src="{{ asset('dash/js/core/popper.min.js')}}"></script>
	<script src="{{ asset('dash/js/core/bootstrap.min.js')}} "></script>
	<!-- jQuery UI -->
	<script src="{{ asset('dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{ asset('dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}} "></script>
	<!-- jQuery Sparkline -->
	<script src="{{ asset('dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}} "></script>
	<!-- Sweet Alert -->
	<script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js')}} "></script>
	<!-- Bootstrap Notify -->
	<script src="{{ asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}} "></script>
	<script type="text/javascript" src="{{asset('dash/js/datatable.js')}}"></script>
	<script src="{{ asset('dash/js/customs.js')}}"></script>
	<!-- Atlantis JS -->
	<script src="{{asset('dash/js/atlantis.min.js')}}"></script>
	<script src="{{asset('dash/js/atlantis.js')}}"></script>

</body>
</html>

