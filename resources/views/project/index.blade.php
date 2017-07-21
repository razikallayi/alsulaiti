@extends('project.layout.project')

@section('meta')

<meta property="og:url"                content="http://alsulaitilawfirm.com/" />
<meta property="og:type"               content="website" />
<meta property="og:image"              content="http://alsulaitilawfirm.com/project/images/abt-img.png" />
<meta property="og:image:type"         content="image/png" />
<meta property="og:image:width"        content="1000" />
<meta property="og:image:height"       content="520" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Al_Sulaiti_Law">
<meta name="twitter:creator" content="@Al_Sulaiti_Law">
<meta name="twitter:title" content="Al Sulaiti Law Firm Qatar">
<meta name="twitter:description" content="Leading law firm in Qatar providing cutting edge legal services as a legal consultant,tax, immigration, Real Estate & construction law firm.Call:+97444664766">
<meta name="twitter:image" content="http://alsulaitilawfirm.com/project/images/abt-img.png">


@endsection


@section('content')
<style>
  /*.item-video{
    height: 519px;
  }*/

/*  .item-video{
            width:100% !important;
            margin:auto;
            overflow-y:hidden;
}*/
/*#video_player{
            width:100% !important;
            margin:auto;
            overflow-y:hidden;
}*/
/*    .owl-video-wrapper{
        width:100% !important;
    }*/
</style>

<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>


<div class="slider">
	<div class="container">
      <div class="owl-carousel" id="owl-demo1">
        <div class="item"><img src="{{ url('project/images/slider/slider1.png') }}" alt="BRIDGING LEGAL TRADITIONS" /><div class="inner"><a href="{{ url('about') }}" title="law firm office"><h2>BRIDGING LEGAL TRADITIONS</h2><p>Mr. Mubarak Bin Abdullah Al Sulaiti founded  Al Sulaiti Law Firm in 2002 </p></a></div></div>
        <div class="item"><img src="{{ url('project/images/slider/slider2.jpg') }}" alt="Doing Business in Qatar & Compliance" /><div class="inner"><a title="business law firm" href="{{ url('publications') }}"><h2>Doing Business in Qatar & Compliance</h2><p>Click here to view our latest Publications</p></a></div></div>
{{-- 
        <div class="item-video">
         <div class="owl-video-wrapper"> <div id="video_player" class="youtubeVideo"></div>
       </div></div>   

   <div class="item-video"><div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=IMCm1GSIGpI" autobuffer controls autoplay></a></div></div>    --}}

        {{-- <div class="item"><img src="{{ url('project/images/slider/slider3.jpg') }}" alt="Qatar Crisis" /></div> --}}
        <div class="item"><img src="{{ url('project/images/slider/slider4.jpg') }}" alt="Qatar – Gulf  Crisis : A legal perspective" /><div class="inner"><a title="Qatar Crisis" href="{{url('insights')}}"><h2>Qatar – Gulf  Crisis : A legal perspective</h2></a></div></div>
	</div>
    </div>
</div>
   
   
<div class="bnr-btm  clearfix">
	<div class="container clearfix">
       <div class="col-md-12 no-padding clearfix">
          <div id="owl-demo" class="owl-carousel clearfix">
                <div class="item"><a href="{{url('service')}}"><div class="item-img2"></div> <p>Commercial Law</p></a></div>
                <div class="item"><a href="{{url('service')}}"><div class="item-img4"></div> <p>Real Estate</p></a></div>
                <div class="item"><a href="{{url('service')}}"><div class="item-img"></div> <p>Sports Law</p></a></div>
                <div class="item"><a href="{{url('service')}}"><div class="item-img6"></div> <p>Employment Law</p></a></div>
                <div class="item"><a href="{{url('service')}}"><div class="item-img7"></div> <p>Intellectual Property law</p></a></div>
                <div class="item"><a href="{{url('service')}}"><div class="item-img5"></div> <p>Tax</p></a></div>
              </div>
       </div>
    </div>
</div>

<div class="abt-sec clearfix">
  <div class="container">
     <div class="col-md-12 no-padding">
          <h1 class="aniview" av-animation="slideInLeft">About <span>Us</span></h1>
          <p class="aniview" av-animation="slideInRight">Al Sulaiti Law Firm is a full service Qatari Law firm, with cutting edge legal services offered to private and public entities as well as governmental establishments and reputable international organizations. It was established in 2002 by Mr. Mubarak Bin Abdullah al Sulaiti one of Qatar’s renowned lawyers, with an outstanding reputation that always precedes him. </p>
<div class="col-md-12"><a title="law firm qatar, kuwaiti lawyer law firm" href="{{ url('about') }}" class="hvr-icon-wobble-horizontal">Read More </a></div>
<img src="{{ url('project/images/abt-img.png') }}" class="img-responsive" alt="Alsulaiti Law Firms in Qatar">
     </div>
  </div>
</div>


<div class="num-sec">
  <div class="container">
     <div class="col-md-12 no-padding">
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn"><img src="{{ url('project/images/icons/count1.png') }}" alt="international law firms doha
"></div><div class="counting"><div class="counter">525</div><p>Count for Trusted Client</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn1"><img src="{{ url('project/images/icons/count2.png') }}" alt="international law firms Qatar
"></div><div class="counting"><div class="counter"> 14 </div><p>Age of Practice</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn2"><img src="{{ url('project/images/icons/count3.png') }}" alt="international law firms in Qatar"></div><div class="counting"><div class="counter">517</div><p>No of Pro bono Hours</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn3"><img src="{{ url('project/images/icons/count4.png') }}" alt="international law firms
"></div><div class="counting"><div class="counter">50</div><p>No of lawyers</p></div></div>
     </div>
  </div>

</div>

<section class="team-section">
	<div class="container team-relative">
    <div class="team-shadow">Our Team</div>
		<div class="team-content">
			
		</div>
	</div>
	<div class="team-slider-base clearfix">
    	
		<div class="team-slider">
			<ul>


			@foreach($teams as $team)

			             
							<li class=" @if($loop->first) show-active @endif">
								<div class="tm-static-img">
									<a href="javascript:void(0);"><img src="{{ $team->imageUrl(null,213,170) }}" class="img-responsive" alt="{{ $team->name }}, Al Sulaiti Law Firm "></a>
								</div>
								<div class="tm-show-content">
									<div class="team-lg-img">
										<img src="{{ $team->imageUrl() }}" class="img-resposnive" alt="{{ $team->name }}, Al Sulaiti Law Firm">
									</div>
									<div class="team-info-content">
			                            <h3>{{ $team->name }} </h3>
			                            <h5>{{ $team->designation }}</h5>
			                            <p>{{ str_limit(strip_tags($team->description),200) }}</p>
			                            <a title="top lawyers" href="{{ $team->detailPageUrl() }}" class="hvr-icon-wobble-horizontal team-more">Know More </a>
									</div>
								</div>
							</li>
							
			                <li>
			@endforeach
             
                
			</ul>
		</div>
	</div>
</section>


<div class="client-say">
  <div class="container">
     <div class="col-md-12 no-padding text-center">
       <h2>Client Testimonials</h2>
       <p>What Our Clients Say </p>
     </div>
     <div class="col-md-12 no-padding">
         <div class="flexslider carousel">
          <ul class="slides">
@foreach($testimonials as $testimonial)
            <li>
              <div class="client-main">
               <div class="client-img"><img src="{{$testimonial->imageUrl()}}" alt="qatari advocates firm"></div>
  	    		<div class="client-txt">
                   <div class="quote"><i class="fa fa-quote-left "></i>	</div><h2> {{$testimonial->client_name}}</h2>
                   <p>{{$testimonial->content}}</p>
                </div>
               </div>     
  	    	</li>
@endforeach
  	    	
            	
  	    		
          </ul>
        </div>
     </div>
  </div>

</div>

<div class="office">
  <div class="container">
     <div class="col-md-12">
       <div class="col-md-7 no-padding">
          <div class="office-add clearfix">
             <div class="col-md-6 no-padding">
                <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Doha Tower, West bay Qatar</h4>
                 <p>Tel: +974 4466 4066 or +974 4466 4766 <br> Fax: +974 4465 1919 <br> P.O. Box: 14646, Doha, Qatar <br> e-mail: <a href="mailto:info@slf-qa.com">info@slf-qa.com</a></p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Cairo, Egypt</h4>
                 <p>26 Mostafa Nahas Madinat Nasr <br> Cairo, Egypt <br> Tel: +2tv02 26700370</p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Milan, Italy</h4>
                 <p>Via S. Cecilia, 5-20122 Milan, Italy <br> Tel: +39 02 76006706 <br> Fax: +39 02 76390633</p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Como, Italy</h4>
                 <p>Via Garibaldi, 30-22100 Como, Italy <br> Tel: +39 031 261314 <br> Fax: +39 031 3301389</p>
                 </div>
                 
             </div>
             
             <div class="col-md-6 no-padding">
                	<h3 class="asso"> In Association With Offices </h3>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Beirut, Lebanon</h4>
                 <p>Tilal Bldg., Block A7 <br> Asharfieh Street, Beirut, Lebanon <br> Tel: +961 1 207222 <br> Fax: +961 1 203191 <br> e-mail: <a href="mailto:info@mcl-lb.com">info@mcl-lb.com</a></p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>Kuwait</h4>
                 <p>6th Floor, Kuwait Chamber <br> of Commerce and Industry Bldg. <br> Abdul Aziz Hamad Al Sagar Street <br> Tel: +965 2243 1122 <br> Fax: +965 2240 2501 <br> P.O. Box: 26292, Safat 13123, Kuwait <br> e-mail:<a href="mailto:info@mcl-kw.com"> info@mcl-kw.com</a></p>
                 </div>
             </div>
             
          </div>
       </div>
       
       <div class="col-md-5 no-padding">
         <div class="office-map">
           <h3>Our <span>Offices</span></h3>
             <img src="{{ url('project/images/map.png') }}" class="img-responsive" alt="Construction Law  firm in Qatar">
             <div class="office1"></div> 
             <div class="office2"></div> 
             <div class="office3"></div> 
             <div class="office4"></div> 
             <a href="https://www.google.com/maps?ll=25.178941,51.531519&z=12&t=m&hl=en-US&gl=QA&mapclient=embed&q=Doha" target="_blank"><div class="office5"></div> </a>
         </div>
       </div>
       
     </div>
  </div>
</div>

@endsection
@section('scripts')

<script src="{{url('project/js/waypoints.min.js') }}"></script> 
<script src="{{url('project/js/jquery.counterup.min.js') }}"></script> 
<script defer src="{{url('project/js/jquery.flexslider.js') }}"></script>
<script src="{{url('project/js/lightslider.js') }}"></script>
<script>
	jQuery(document).ready(function( $ ) {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	});
	
	    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 566,
        minItems: 1,
        maxItems: 4,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });


</script>

<script src="{{url('project/js/owl.carousel.min.js') }}"></script>
<script>
  var owl = $('#owl-demo1');
$(document).ready(function() {
  owl = $('#owl-demo1');
owl.owlCarousel({
    stagePadding: 0,
    loop:true,
    margin:0,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
    video:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
	smartSpeed:1000,
  responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        },
        1200:{
            items:1,
        },
        1400:{
            items:1,
        },
        1600:{
            items:1,
        },
        1800:{
            items:1,
        }
    }
})




})

$(document).ready(function() {

$('#owl-demo').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    items:1,
    nav:true,
	autoplay:true,
	autoplayTimeout:6000,
	autoplayHoverPause:true,
  responsive: {
	  0: {
		items: 1
	  },
	  600: {
		items: 2
	  },
	  1000: {
		items: 5
	  }
	}
  })

$( ".owl-prev").html('<i class="fa fa-arrow-left"></i>');
 $( ".owl-next").html('<i class="fa fa-arrow-right	"></i>');
})

</script>

<script type="text/javascript">
    $(function(){
       $('.team-slider ul').lightSlider({
           autoWidth:true,
           loop:true,
           slideMargin:0,
           auto:true,
           pager:false,
           onSliderLoad: function(){
              var html = $(".team-slider .show-active").find(".tm-show-content").html();
              $(".team-content").addClass("animate").html(html);
           }
       }); 
        
        $(".team-slider li a").click(function(e){
           e.preventDefault(); 
            var html = $(this).parent().parent().find(".tm-show-content").html();
            //$(".team-content").removeClass("animate").delay(1000).addClass("animate").html(html);
            console.log(html);
           
            $(".team-content").removeClass("animate").delay(500).queue(function(next){
              
                $(".team-content").html(html).addClass("animate");
                next();
            });
        });
    });
</script>
<script>
        $(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(500);	
		$('#mask').fadeTo("slow",0.9);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});		
	
});
        </script>		


{{-- 
<script>
owl.on('change.owl.carousel', function(event,a) {
    console.log( event.item);
    console.log($(event.target).has('.youtubeVideo'));

  var tag = document.createElement('script');
  tag.src = "http://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // create youtube player
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('video_player', {
      height: '519',
      width: '100%',
      videoId: 'RsMlSVqx_wg',
      playerVars: { 'autoplay': 0,'width':200, 'controls': 0,'rel' : 0 ,'showinfo':0,'modestbranding':1,'disablekb':1},
      events: {
        onReady: onPlayerReady,
        onStateChange: onPlayerStateChange
      }
    });
  }

  function onPlayerReady(event) {
    event.target.playVideo();
  }

  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
      setTimeout(stopVideo, 5000);
      done = true;
    }
  }
  function stopVideo() {
    player.stopVideo();
  }
});
    </script> --}}


<script>
$(document).ready(function() {
		$('body').addClass('loaded');
		$('h1').css('color','#222222');

	
});
</script>
@endsection