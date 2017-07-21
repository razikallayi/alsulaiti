@extends('project.layout.project')

@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')
           <h2>Events</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li class="breadcrumbs-active">Events</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>

<div class="client-top">
  <h2>Latest events section </h2>
</div>
	
<div class="events">
<section id="cd-timeline" class="cd-container">
	@foreach($events as $event)
	@if($loop->iteration % 2 == 1)
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="{{ url('project/images/cd-icon-picture.svg') }}" alt="Picture Icon">
		</div>

		<div class="cd-timeline-content">
			<img src="{{$event->imageUrl()}}" class="img-responsive">
			<h2>{{$event->title}}</h2>
			<p>{!! nl2br(e($event->content)) !!}</p>
			<span class="cd-date">{{$event->published_date->format('M-Y')}}</span>
		</div>
	</div>
	
	@else
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="{{ url('project/images/cd-icon-picture.svg') }}" alt="Picture Icon">
		</div> 

		<div class="cd-timeline-content">
			<img src="{{$event->imageUrl()}}" class="img-responsive">
			<h2>{{$event->title}}</h2>
			<p>{!! nl2br(e($event->content)) !!}</p>
			<span class="cd-date">{{$event->published_date->format('M-Y')}}</span>
		</div> 
	</div>
	@endif
	@endforeach

	</section>
</div>






@endsection
@section('scripts')


<script src="{{url('project/js/owl.carousel.js') }}"></script>
<script>

	$(document).ready(function() {	
	$("#owl-demo1").owlCarousel({
	autoPlay:5000,
	items : 1,
	itemsDesktop : [1199,3],
	itemsDesktopSmall : [979,3],
	navigation : false,
	});
	});
</script>
	
@endsection