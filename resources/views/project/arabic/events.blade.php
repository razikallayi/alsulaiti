@extends('project.arabic.layout.project')
@section('content')
   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

{{-- @include('project.layout.partials.mail_alert') --}}
           <h2>أحدث</h2>
           <div class="breadcrumbs">
              <ul>
                   <li><a href="{{url('ar/')}}">الصفحة الرئيسية</a></li>
                 <li class="breadcrumbs-active">أحدث</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>

<div class="client-top">
  <h2> أحدث الفاعليات  </h2>
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
			<h2>{{$event->translate('title')}}</h2>
			<p>{!! nl2br(e($event->translate('content'))) !!}</p>
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
			<h2>{{$event->translate('title')}}</h2>
			<p>{!! nl2br(e($event->translate('content'))) !!}</p>
			<span class="cd-date">{{$event->published_date->format('M-Y')}}</span>
		</div> 
	</div>
	@endif
	@endforeach
        
        
	</section>
</div>






@endsection
