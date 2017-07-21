@extends('project.arabic.layout.project')


@section('meta')

<meta property="og:url"                content="http://alsulaitilawfirm.com/ar" />
<meta property="og:type"               content="website" />
<meta property="og:image"              content="http://alsulaitilawfirm.com/project/images/abt-img.png" />
<meta property="og:image:type"         content="image/png" />
<meta property="og:image:width"        content="1000" />
<meta property="og:image:height"       content="520" />

@endsection



@section('content')
<div class="slider">
	<div class="container">
      <div class="owl-carousel" id="owl-demo1">
        <div class="item"><img src="{{url('project/images/slider/slider1.png')}}" alt="" /><div class="inner"><a href="{{url('ar/about')}}"><h2>جسر الهوة بين الأعراف والتقاليد  القانونية المختلفة </h2><p>تأسس المكتب في عام 2002  على يد السيد/ مبارك بن عبد الله السليطي، </p></a></div></div>
        <div class="item"><img src="{{url('project/images/slider/slider2.jpg')}}" alt="" /><div class="inner"><a href="{{url('ar/publications')}}"><h2>الأعمال التجارية في دولة قطر</h2><p>اضغط هنا لتحميل الكتيب</p></a></div></div>

{{--    <div class="item-video"><div class="owl-video-wrapper"><a class="owl-video" href="https://www.youtube.com/watch?v=IMCm1GSIGpI" autobuffer controls autoplay></a></div></div>
   
        <div class="item"><img src="{{url('project/images/slider/slider3.jpg')}}" alt="" /></div> --}}
        <div class="item"><img src="{{url('project/images/slider/slider4.jpg')}}" alt="" /><div class="inner"><a href="{{url('ar/insights')}}"><h2>الأزمة القطرية الخليجية – من منظور قانوني</h2></a></div></div>
	</div>
    </div>
</div>
   
<div class="bnr-btm  clearfix">
	<div class="container clearfix">
       <div class="col-md-12 no-padding clearfix">
          <div id="owl-demo" class="owl-carousel clearfix">
                <div class="item"><a href="{{url('ar/service')}}"><div class="item-img2"></div> <p dir="rtl">القانون التجاري </p></a></div>
                <div class="item"><a href="{{url('ar/service')}}"><div class="item-img4"></div> <p dir="rtl">القوانين العقارية وقوانين التشييد والبناء</p></a></div>
                <div class="item"><a href="{{url('ar/service')}}"><div class="item-img"></div> <p dir="rtl">القانون الرياضي</p></a></div>
                <div class="item"><a href="{{url('ar/service')}}"><div class="item-img6"></div> <p dir="rtl">قانون العمل والهجرة</p></a></div>
                <div class="item"><a href="{{url('ar/service')}}"><div class="item-img7"></div> <p dir="rtl">قانون حماية الملكية الفكرية</p></a></div>
                <div class="item"><a href="{{url('ar/service')}}"><div class="item-img5"></div> <p dir="rtl">الاستشارات في مجال الضرائب</p></a></div>
              </div>
       </div>
    </div>
</div>

<div class="abt-sec clearfix">
  <div class="container">
     <div class="col-md-12 no-padding">
          <h2 class="aniview" av-animation="slideInLeft">من نحن</h2>
          <p class="aniview" av-animation="slideInRight">أسس الاستاذ/ مبارك بن عبد الله السليطي مكتب السليطي للمحاماة والاستشارات القانونية عام 2002 
وبفضل خبرة المكتب على مدار اربعة عشرة سنة الماضية، أصبح مكتب السليطي للمحاماة من أبرز وأشهر مكاتب المحاماة في دولة قطر
إن المكتب من مؤسسي شبكة مينا سيتي لويرز (شبكة محامو الشرق الأوسط وشمال أفريقيا) والتي تجمع بين خمس مكاتب محاماة، في شمال أفريقيا و الشام، والخليج العربي. 

</p>
<div class="col-md-12"><a href="{{ url('ar/about') }}" class="hvr-icon-wobble-horizontal">اقرأ أكثر</a></div>
<img src="{{url('project/images/abt-img.png')}}" class="img-responsive">
     </div>
  </div>
</div>


<div class="num-sec">
  <div class="container">
     <div class="col-md-12 no-padding">
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn"><img src="{{url('project/images/icons/count1.png')}}"></div><div class="counting"><div class="counter">525</div><p>عدد عملائنا الكرام</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn1"><img src="{{url('project/images/icons/count2.png')}}"></div><div class="counting"><div class="counter"> 14 </div><p>سنة من الخبرة </p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn2"><img src="{{url('project/images/icons/count3.png')}}"></div><div class="counting"><div class="counter">517</div><p>عدد ساعات العمل في مجال الخدمة العامة</p></div></div>
           <div class="col-md-3 clearfix margin-bottom-20-xs"><div class="count-icon aniview" av-animation="bounceIn3"><img src="{{url('project/images/icons/count4.png')}}"></div><div class="counting"><div class="counter">50</div><p>عدد المحامين لدينا</p></div></div>
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
				<li class="@if($loop->first) show-active @endif">
					<div class="tm-static-img">
						<a href="javascript:void(0);"><img src="{{ $team->imageUrl(NULL,213,170) }}" class="img-responsive" alt="{{ $team->name }}, Al Sulaiti Law Firm"></a>
					</div>
					<div class="tm-show-content">
						<div class="team-lg-img">
							<img src="{{ $team->imageUrl() }}" alt="{{ $team->name }}, Al Sulaiti Law Firm" class="img-resposnive">
						</div>
						<div class="team-info-content">
                            <h3>{{ $team->translate('name') }} </h3>
                            <h5>{{ $team->translate('designation') }}</h5>
			                <p>{{ str_limit(strip_tags($team->translate('description')),300)}}</p>
                            <a href="{{ $team->detailPageUrl(null,'ar') }}" class="hvr-icon-wobble-horizontal team-more"> تعرف أكثر </a>
						</div>
					</div>
				</li>
			@endforeach
               
			</ul>
		</div>
	</div>
</section>

<div class="client-say">
  <div class="container">
     <div class="col-md-12 no-padding text-center">
       <h2 dir="rtl">ما يقوله عملائنا</h2>
       <p dir="rtl">شهادة العميل</p>
     </div>
     <div class="col-md-12 no-padding">
         <div class="flexslider carousel">
          <ul class="slides">
          @foreach($testimonials as $testimonial)
            <li>
              <div class="client-main">
               <div class="client-img"><img src="{{$testimonial->imageUrl()}}"></div>
  	    		<div class="client-txt">
                   <div class="quote"><i class="fa fa-quote-right "></i>	</div>
                   <h2> {{$testimonial->translate('client_name')}}</h2>
                     <p>{{$testimonial->translate('content')}}</p>
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
                 <h4>برج الدوحة الطابق الثاني والعشرون - قطر </h4>
                 <p>هاتف: 9744 4664066+ أو 974 44664766+<br> فاكس: 974 44651919+ <br> ص.ب رقم:  14646 الدوحة – قطر <br> عنوان البريد الإلكتروني: <a href="mailto:info@slf-qa.com">info@slf-qa.com</a></p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>القاهرة  -مصر</h4>
                 <p>26 شارع مصطفى النحاس، مدينة نصر <br> القاهرة، مصر <br> هاتف: 202 26700370+</p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>ميلانو - إيطاليا</h4>
                 <p>طريق سيسيليا  – 20122-5 – ميلانو،  إيطاليا<br> هاتف: 39 02 76006706+ <br> فاكس: 39 02 76390633+</p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>– كومو, إيطاليا</h4>
                 <p>طريق جاريبالدي – 22100-30 <br> هاتف: 39 031261314+ <br> فاكس: 39 0313301389+</p>
                 </div>
                 
             </div>
             
             <div class="col-md-6 no-padding">
                	<h3 class="asso" dir="rtl">بالتعاون مع مكاتب </h3>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>بيروت -لبنان</h4>
                 <p>بناية تلال، بلوك أ7<br> شارع الأشرفية, بيروت, لبنان<br> هاتف: 9611 207222+ <br>فاكس: 9611 203191+<br> البريد الإلكتروني: <a href="mailto:info@mcl-lb.com">info@mcl-lb.com</a></p>
                 </div>
                 <div class="office-txt aniview" av-animation="fadeInUp">
                 <h4>الكويت</h4>
                 <p>الطابق السادس، بناية غرفة تجارة وصناعة الكويت <br> شارع عبد العزيز بن حمد الصقر  <br> هاتف: 965 22431122+ <br> فاكس: 965 22402501+ <br> ص.ب رقم: 26292 – الصفاة‎‎ 13123 – الكويت <br> البريد الإلكتروني:  <a href="mailto:info@mcl-kw.com"> info@mcl-kw.com</a></p>
                 </div>
             </div>
             
          </div>
       </div>
       
       <div class="col-md-5 no-padding">
         <div class="office-map">
           <h3 dir="rtl">مكاتبنا</h3>
             <img src="{{url('project/images/map.png')}}" class="img-responsive">
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

<script src="{{url('project/js/waypoints.min.js')}}"></script> 
<script src="{{url('project/js/jquery.counterup.min.js')}}"></script> 
<script defer src="{{url('project/js/jquery.flexslider.js')}}"></script>
<script src="{{url('project/js/lightslider.js')}}"></script>
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

<script src="{{url('project/js/owl.carousel.min.js')}}"></script>
<script>
$(document).ready(function() {
$('#owl-demo1').owlCarousel({
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

@endsection