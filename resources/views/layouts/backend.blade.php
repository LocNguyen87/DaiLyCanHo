<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('pageTitle')</title>
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

	<link href="{{ asset('assets/libs/bower/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/libs/bower/animate.css/animate.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/libs/bower/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/libs/bower/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/backend/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/backend/css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="sb-left">
<!--============= start main area -->

@include('admin/aside')
@include('admin/navbar')

@yield('mainContent')

	<!-- build:js ../assets/js/core.min.js -->
	<script src="{{ asset('assets/libs/bower/jquery/dist/jquery.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/superfish/dist/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/superfish/dist/js/superfish.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/PACE/pace.min.js') }}"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->

	<script src="{{ asset('assets/backend/js/library.js') }}"></script>
	<script src="{{ asset('assets/backend/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/backend/js/app.js') }}"></script>
	<!-- endbuild -->
	<script src="{{ asset('assets/libs/bower/moment/moment.js') }}"></script>
	<script src="{{ asset('assets/libs/bower/fullcalendar/dist/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('assets/backend/js/fullcalendar.js') }}"></script>

</body>
</html>
