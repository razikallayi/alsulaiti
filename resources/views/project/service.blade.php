@extends('project.layout.project')

@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')
           <h2>Services & Sectors</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li class="breadcrumbs-active">Services</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


<div class="service">
<div class="container">
 	
   <div class="col-md-12 no-padding ser-tp">
      <h1>Services</h1>
      <h4>Non-Contentious Legal Services </h4>
      <p>Our local and foreign clients require non-contentiousservices such incorporation, corporate transactions, and advise of corporate governance. Moreover,non-contentious includes drafting and reviewing contracts and mediation.</p>
      <h4>Contentious Legal Services</h4>
      <p>Such services includes litigation and arbitration practice which is handled by a multinational team of legal consultants and advocates.</p>
   </div>          

</div>

<div class="sec-tp">
 <div class="sec-map"></div>
 <div class="se-bg"></div>
  <div class="container">
    <div class="col-md-12 no-padding">
       <div class="col-md-6 no-padding">
            <div class="s">
               <h1>Sectors</h1>
               <p>Al-Sulaiti Law Firm offers legal support and advice through its specialized team of legal consultants and advocates across a wide range of practice areas and sectors:</p>
               <a href="{{url('insights')}}">See new Insights</a>
            </div>
         </div>
         
         <div class="col-md-6 no-padding">
            <div class="se">
              <ul>
              @foreach($services as $service)
                 <li><a href="#{{$service->id}}">{{str_limit($service->title)}}</a></li>
                 @endforeach
              </ul>
            </div>
         </div>
         
    </div>
  </div>
</div>

<div class="ser-se">
  <div class="container">
       
       @foreach($services as $service)
@if($loop->iteration%2 == 1)
    <div class="col-md-12 no-padding" id="{{$service->id}}">
       <div class="col-md-6 no-padding">
          <div class="ser-txt">
             <h2>{{$service->title}}</h2>
             <p>{!!$service->content!!}</p>
          </div>
       </div>
       <div class="col-md-6 no-padding">
         <img src="{{$service->imageUrl()}}" class="img-responsive">
       </div>
    </div>
    @else
    
    <div class="col-md-12 no-padding" id="{{$service->id}}">
       <div class="col-md-6 no-padding">
         <img src="{{$service->imageUrl()}}" class="img-responsive">
       </div>
       <div class="col-md-6 no-padding">
          <div class="ser-txt">
              <h2>{{$service->title}}</h2>
             <p>{!!$service->content!!}</p>
          </div>
       </div>
    </div>
@endif
@endforeach

  </div>
</div>

</div>



@endsection
@section('scripts')

<script>
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
        });
      }
    }
  });
</script>
@endsection