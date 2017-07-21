<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Al Sulaiti Law Firm Qatar</title>

<meta name="description" content="Leading law firm in Qatar providing cutting edge legal services as a legal consultant,tax, immigration, Real Estate & construction law firm.Call:+97444664766">
<meta name="keywords" content="Law Firms in Qatar, Qatar  International law firms, Qatar Law Firm, Sports Law firms in qatar, legal consultant in qatar, Employment and Immigration Law firm in Qatar, commercial law firms qatar, legal consultant in qatar, lawyer services in qatar, international law firms in qatar, Immigration Law firm in Qatar, qatar lawyers association, Tax law firms in qatar, Construction Law  firm in Qatar, Real Estate & Construction Law  firm in Qatar, qatari advocates firm, registered law firms qatar">


@yield('meta')

<link rel="icon" href="{{url('project/images/favicon.ico') }}" type="image/x-icon">
<link rel="image_src" href="http://alsulaitilawfirm.com/project/images/logo.png"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ url('project/css/bootstrap.min.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ url('project/css/bootstrap-theme.min.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ url('project/css/stylesheet.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ url('project/css/font-awesome.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ url('project/css/bootsnav.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ url('project/css/animate.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ url('project/css/settings.css') }}" media="all">
@yield('styles')

<script src="{{url('project/js/jquery-2.1.0.min.js') }}" type="text/javascript"></script>
<script src="{{url('project/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{url('project/js/platform.js') }}" type="text/javascript"></script>
{{-- @include('project.layout.partials.mail_check_script') --}}
</head>

<body id="top">

@include('project.layout.partials.facebook_integration')
@include('project.layout.partials.quick_response')

<div class="sticky-container">
		<ul class="sticky">
			<li>
				<a href="https://twitter.com/Al_Sulaiti_Law" target="_blank"><i class="fa fa-twitter"></i><p>Twitter</p></a>
			</li>
			<li>
				<a href="https://www.linkedin.com/company/10886250?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10886250%2Cidx%3A2-1-3%2CtarId%3A1470819688915%2Ctas%3Aal%20sulaiti%20law%20" target="_blank"><i class="fa fa-linkedin"></i><p>Linkedin</p></a>
			</li>
			<li>
				<a href="https://www.facebook.com/al.sulaiti.law" target="_blank"><i class="fa fa-facebook"></i><p>Facebook</p></a>

			</li>
			<li>
				<a href="https://www.youtube.com/channel/UC2-99jokwwbp9_aChOH3vmQ" target="_blank"><i class="fa fa-youtube"></i><p>Youtube</p></a>
			</li>
            <li>
				<a href="https://plus.google.com/u/0/112276132371448273823" target="_blank"><i class="fa fa-google-plus"></i><p>Google +</p></a>
			</li>
			
		</ul>
	</div>

@include('project.layout.partials.header')


   

@yield('content')




@include('project.layout.partials.footer')


	
<script src="{{url('project/js/main.js') }}" type="text/javascript"></script> 
<script src="{{url('project/js/bootsnav.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('project/js/jquery.aniview.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$('.aniview').AniView();
	});
</script>
<script>
 $("a[href='#top']").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });
</script>

@yield('scripts')

@include('project.layout.partials.google_analytics')
</body>
</html>
