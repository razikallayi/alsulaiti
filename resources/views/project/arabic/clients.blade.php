@extends('project.arabic.layout.project')
@section('content')


   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

{{-- @include('project.layout.partials.mail_alert') --}}
           <h2>عملائنا</h2>
           <div class="breadcrumbs">
              <ul>
                   <li><a href="{{url('ar/')}}">الصفحة الرئيسية</a></li>
                 <li class="breadcrumbs-active">عملائنا</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>

<div class="client-top">
  <h2>عملائناالكرام</h2>
</div>
	
<div class="client">
   <div class="container">
      <div class="col-md-12 no-padding">
         <div class="row">
  <div class="slide_viewer">
    <div class="slide_group">
      @foreach($clients->chunk(9) as $chunks)
        <div class="slide">
         @foreach($chunks as $client)
         <div class="col-md-4">
           <div class="client-sec">
             <a href="{{ url($client->link) }}" target="_blank"> <img src="{{ $client->imageUrl() }}" class="img-responsive"></a>
           </div>
         </div>
         @endforeach
       </div>
      @endforeach
       
        
        
      </div>
      
      
      <div class="slide">
         <div class="col-md-4">
           <div class="client-sec">
              <a href="#" target="_blank"> <img src="{{ url('project/images/clients/cfe.png')}}" class="img-responsive"></a>
           </div>
        </div>
        <div class="col-md-4">
           <div class="client-sec">
               <a href="https://www.damacproperties.com/en" target="_blank"><img src="{{ url('project/images/clients/damac.png')}}" class="img-responsive"></a>
           </div>
        </div>
        <div class="col-md-4">
           <div class="client-sec">
              <a href="http://emdad.qa/" target="_blank"> <img src="{{ url('project/images/clients/emdad.png')}}" class="img-responsive"></a>
           </div>
        </div>
        <div class="col-md-4">
           <div class="client-sec">
              <a href="http://hbkcontracting.com/" target="_blank"> <img src="{{ url('project/images/clients/hbk.png')}}" class="img-responsive"></a>
           </div>
        </div>
        
        <div class="col-md-4">
           <div class="client-sec">
               <a href="http://www.starlinkworld.com/" target="_blank"><img src="{{ url('project/images/clients/starlink.png')}}" class="img-responsive"></a>
           </div>
        </div>
        
        <div class="col-md-4">
           <div class="client-sec">
             <a href="http://www.qdvc.com/{{url('ar/')}}/en/" target="_blank">   <img src="{{ url('project/images/clients/qdvc.png')}}" class="img-responsive"></a>
           </div>
        </div>
        
        <div class="col-md-4">
           <div class="client-sec">
               <a href="#" target="_blank"><img src="{{ url('project/images/clients/qmedia.png')}}" class="img-responsive"></a>
           </div>
        </div>
        
        
        <div class="col-md-4">
           <div class="client-sec">
               <a href="http://www.sepamgroup.com/" target="_blank"><img src="{{ url('project/images/clients/sepam.png')}}" class="img-responsive"></a>
           </div>
        </div>
        
        <div class="col-md-4">
           <div class="client-sec">
              <a href="http://www.terna.gr/" target="_blank"> <img src="{{ url('project/images/clients/terna.png')}}" class="img-responsive"></a>
           </div>
        </div>
        
      </div>
      
      
      
      
    </div>
  </div>
  
  <div class="slide_buttons">
</div>
  
         </div>
      </div>
   </div>
</div>



@endsection
@section('scripts')

<script src="{{ url('js/owl.carousel.js')}}"></script>
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

<script>
$('.client').each(function () {
    var $this = $(this);
    var $group = $this.find('.slide_group');
    var $slides = $this.find('.slide');
    var bulletArray = [];
    var currentIndex = 0;
    var timeout;
    function move(newIndex) {
        var animateLeft, slideLeft;
        advance();
        if ($group.is(':animated') || currentIndex === newIndex) {
            return;
        }
        bulletArray[currentIndex].removeClass('active');
        bulletArray[newIndex].addClass('active');
        if (newIndex > currentIndex) {
            slideLeft = '100%';
            animateLeft = '-100%';
        } else {
            slideLeft = '-100%';
            animateLeft = '100%';
        }
        $slides.eq(newIndex).css({
            display: 'block',
            left: slideLeft
        });
        $group.animate({ left: animateLeft }, function () {
            $slides.eq(currentIndex).css({ display: 'none' });
            $slides.eq(newIndex).css({ left: 0 });
            $group.css({ left: 0 });
            currentIndex = newIndex;
        });
    }
    function advance() {
        clearTimeout(timeout);
        timeout = setTimeout(function () {
            if (currentIndex < $slides.length - 1) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        }, 14000);
    }
    $('.next_btn').on('click', function () {
        if (currentIndex < $slides.length - 1) {
            move(currentIndex + 1);
        } else {
            move(0);
        }
    });
    $('.previous_btn').on('click', function () {
        if (currentIndex !== 0) {
            move(currentIndex - 1);
        } else {
            move(3);
        }
    });
    $.each($slides, function (index) {
        var $button = $('<a class="slide_btn"> &oline; </a>');
        if (index === currentIndex) {
            $button.addClass('active');
        }
        $button.on('click', function () {
            move(index);
        }).appendTo('.slide_buttons');
        bulletArray.push($button);
    });
    advance();
});
</script>
	
@endsection