<!doctype html>
<html class="full-height" lang="en">
<head>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<meta name="description" content="This is the web site of morang hospital">
	<meta name="keywords" content="#morang, morang, hospital, 021-555343, Morang Hospital, Hospital, Morang hospetal, pathari, pa3, pathari hospital, hospital in pathari">
	
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
	
{{--	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}
	<!--Styles-->
@yield('css')
<!-- Local Styles-->
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="mx-auto" style="height: 100vh;">
@include('partials.nav')
<main class="mh-container" style="height: 100vh;">
	@yield('content')
</main>
@include('partials.footer')
@yield('script')
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
