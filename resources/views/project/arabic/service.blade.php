@extends('project.arabic.layout.project')
@section('content')


<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

{{-- @include('project.layout.partials.mail_alert') --}}
           <h2>قطاعات الخدمة</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('ar/')}}">الصفحة الرئيسية</a></li>
                 <li class="breadcrumbs-active">قطاعات الخدمة </li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


	



<div class="service">
<div class="container">
 	
   <div class="col-md-12 no-padding ser-tp">
      <h1>الخدمة</h1>
      <h4>الخدمات القانونية </h4>
      <p>الخدمات القانونية التي لا تنطوي على خصومات أو نزاعات نقدم خدمات قانونية لا تنطوي على خصومة لعملائنا المحليين والدوليين والتي تتضمن إجراءات ومعاملات تأسيس الشركات وتقديم الاستشارات في مجال الحوكمة المؤسسية بالإضافة إلى صياغة ومراجعة العقود وأعمال الوساطة.</p>
      <h4>الخدمات القانونية التي تنطوي على خصومات قضائية </h4>
      <p>تشمل تلك الخدمات إجراءات التقاضي والتحكيم والتي يضطلع بها فريق متعدد الجنسيات من المستشارين القانونيين والمحامين.</p>
   </div>          

</div>

<div class="sec-tp">
 <div class="sec-map"></div>
 <div class="se-bg"></div>
  <div class="container">
    <div class="col-md-12 no-padding">
       <div class="col-md-6 no-padding">
            <div class="s">
               <h1>قطاعات</h1>
               <p>يقدم مكتب السليطي للمحاماة والاستشارات القانونية الدعم والاستشارات القانونية من خلال فريق متخصص مكون من مستشارين قانونيين ومحامين من مختلف التخصصات القانونية كما يلي:</p>
               <a href="{{url('insights')}}">الرأي القانوني </a>
            </div>
         </div>
         
         <div class="col-md-6 no-padding">
            <div class="se">
              <ul>
                @foreach($services as $service)
                  <li><a href="#{{$service->id}}">{{str_limit($service->translate('title'))}}</a></li>
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
               <h2>{{$service->translate('title')}}</h2>
               <p>{!!$service->translate('content')!!}</p>
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
                <h2>{{$service->translate('title')}}</h2>
               <p>{!!$service->translate('content')!!}</p>
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