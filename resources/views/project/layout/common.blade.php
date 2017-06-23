<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Microdata markup added by Google Structured Data Markup Helper. -->

<title>Al Sulaiti Law Firm @yield('title')</title>

<meta name="Description" content="Al Sulaiti Law firm is a full-service Qatari law firm, reputed as an international law firm in Qatar, sports law firms in Qatar, Qatari advocates firm, commercial law firm in Qatar, Employment and Immigration Law firm in Qatar & more.">

<meta name="Keywords" content="Qatar Law Firm, Sports Law firms in qatar, legal consultant in qatar, Employment and Immigration Law firm in Qatar, commercial law firms qatar,
legal consultant in qatar, lawyer services in qatar, international law firms in qatar, Immigration Law firm in Qatar, qatar lawyers association, Tax law firms in qatar,
Construction Law  firm in Qatar, Real Estate & Construction Law  firm in Qatar, qatari advocates firm, registered law firms qatar">

<link rel="icon" href="{{url('project/images/favicon.ico')}}" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
@section('styles')
<link rel="stylesheet" type="text/css" href="{{url('project/css/bootstrap.min.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('project/css/bootstrap-theme.min.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('project/css/stylesheet.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('project/css/font-awesome.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('project/css/bootsnav.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('project/css/animate.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('project/css/settings.css')}}" media="all">


<script src="{{url('project/js/jquery-2.1.0.min.js')}}" type="text/javascript"></script>
<script src="{{url('project/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('project/js/modernizr.js')}}" type="text/javascript"></script>
@show




<body id="top">
	@yield('content')

	@include('project.layout.partials.footer')

	@section('scripts')
	<script src="{{url('project/js/main.js')}}" type="text/javascript"></script> 
	<script src="{{url('project/js/bootsnav.js')}}" type="text/javascript"></script>
	
	<script src="{{url('project/js/waypoints.min.js')}}"></script> 
	<script src="{{url('project/js/jquery.counterup.min.js')}}"></script> 
	<script defer src="{{url('project/js/jquery.flexslider.js')}}"></script>
	<script src="{{url('project/js/owl.carousel.js')}}"></script>
	<script src="{{url('project/js/lightslider.js')}}"></script>
	<script type="text/javascript" src="{{url('project/js/jquery.aniview.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('.aniview').AniView();
		});
	</script>
	
	@show
</body>
</html>
