@extends('project.layout.project')

@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')
           <h2>News Room</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li class="breadcrumbs-active">News Room</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


	

<div class="sector">
   	<div class="container">
       <div class="col-md-12 no-padding">
          <div class="row">
             <div class="col-md-10">
                <h3>News</h3>
                <p>Al-Sulaiti Law Firm offers legal support and advice through its specialized team of legal consultants and advocates across a wide range of practice areas and sectors:</p>
             </div>
             
          </div>
       </div>
    </div>
</div>


<div class="nws">
   <div class="container">
      <div class="col-md-12 no-padding">
         <div class="tabs">
  <div class="tab">
    <div class="tab-toggle">
       <h4>Grace Period announced by Ministry of Interior</h4>
       <p>As of September 1st the Ministry of Interior has announced the start of a grace period for residents living illegally in Qatar. </p>
       <div class="col-md-12 no-padding date">
          <div class="col-md-6 no-padding"><i class="fa fa-calendar"></i> 01-09-16</div>
          <div class="col-md-6 no-padding">Read More <img src="{{ url('project/images/icons/nws-arw.png') }}"></div>
       </div>
    </div>
  </div>
  <div class="content">
  	<img src="{{ url('project/images/nws1.jpg') }}" class="img-responsive">
    
    <h3>Grace Period announced by Ministry of Interior</h3>
    <h6><i class="fa fa-calendar"></i> 01-09-16 - 01-12-16</h6>
    <p>As of September 1st the Ministry of Interior has announced the start of a grace period for residents living illegally in Qatar. This is the first grace period after passing of almost a decade. Those living or working in Qatar illegally are given a 3 month period to leave the country without any legal consequences.</p>
    <p>
As the new immigration laws will come in to force in December 14th 2016, the government is allowing expats remaining in the state of Qatar illegally to rectify their actions by leaving the state without being held accountable. As part of the new changes the government is adamant to run the new immigration laws smoothly, giving this grace period allows them to start the new process.</p>
<p>As per instructions given by the Ministry of Interior all illegal residents will need to visit the Search and Follow department to finalize their exit. There documents needed to finalize this process, these are:</p>
<ul>
  <li> A valid passport or travel document.</li>
  <li>An open ticket or a ticked reserved after 3 working days</li>
  <li>ID card or copy of entry visa</li>
</ul>
<p>The Search and Follow department will be operating from the 1st of September until the 1st of December from Sunday to Thursday 2pm- 8am</p>
  </div>
  
  <div class="tab">
    <div class="tab-toggle">
       <h4>Online tourist visa application to be activated by the first/second quarter of next year.</h4>
       <p>The Ministry of Interior is developing IT Infrastructure to implement the online visa application process.</p>
       <div class="col-md-12 no-padding date">
          <div class="col-md-6 no-padding"><i class="fa fa-calendar"></i> 06-09-16</div>
          <div class="col-md-6 no-padding">Read More <img src="{{ url('project/images/icons/nws-arw.png') }}"></div>
       </div>
    </div>
  </div>
  <div class="content">
  	<img src="{{ url('project/images/nws1.jpg') }}" class="img-responsive">
    
    <h3>Online tourist visa application to be activated by the first/second quarter of next year.</h3>
    <h6><i class="fa fa-calendar"></i> 06-09-16</h6>
    <p>
The Ministry of Interior is developing IT Infrastructure to implement the online visa application process. The visa process online will take up to 48 hours, to issue a visa. Passengers of all airlines are able to apply online for this process.</p>
<p>
It has also been announced that India, China and Russia will be receiving visa on arrival, the State of Qatar is finalizing agreements with all three countries. Once the process is complete India, Russia and China will receive visa on arrival like the 33 other countries allowed doing so, such as: United States, United Kingdom, Italy, France, Germany, Portugal, Greece, Malaysia, Iceland, Singapore, South Korea, Brunei, Hong Kong, Japan, New Zealand, Canada, Netherlands, Belgium, Ireland, Australia, Sweden, Norway, Switzerland, Belgium,Luxembourg, Denmark, Lichtenstein.
</p>
  </div>
  
  <div class="tab">
    <div class="tab-toggle">
       <h4>Qatar: The promotion of peace between civilizations</h4>
       <p>It has been reported that the State of Qatar is very keen on promoting peace between civilizations, acceptance of different cultures and religions. </p>
       <div class="col-md-12 no-padding date">
          <div class="col-md-6 no-padding"><i class="fa fa-calendar"></i> 06-09-16</div>
          <div class="col-md-6 no-padding">Read More <img src="{{ url('project/images/icons/nws-arw.png') }}"></div>
       </div>
    </div>
  </div>
  <div class="content">
  	<img src="{{ url('project/images/nws1.jpg') }}" class="img-responsive">
    
    <h3>Qatar: The promotion of peace between civilizations </h3>
    <h6><i class="fa fa-calendar"></i> 06-09-16</h6>
    <p>
It has been reported that the State of Qatar is very keen on promoting peace between civilizations, acceptance of different cultures and religions. Qatar was one of the very first countries to support the United Nations Alliance of Civilizations [UNAoC]; the UNAoC purpose is to promote peace of culture between different civilizations.</p>
<p>
The State of Qatar has supported the message of the alliance by establishing projects such as the Hamad Bin Khalifa Islamic Centre in Denmark, this projects main purpose was to aid in the promotion of peaceful coexistence between religions.</p>
<p>
The state of Qatar is working exceptionally hard to achieve the goals set for the National Vision 2030 but the state is also participating in the combat of extremism and hatred among followers of different religions and beliefs these efforts are done by the Doha International Center for Interfaith Dialogue.
</p>
  </div>
  
  
  
  
  
  
  
  
</div>
      </div>
   </div>
</div>

@endsection
@section('scripts')


<script>
  wrapper = $('.tabs');
tabs = wrapper.find('.tab');
tabToggle = wrapper.find('.tab-toggle');
function openTab() {
    var content = $(this).parent().next('.content'), activeItems = wrapper.find('.active');
    if (!$(this).hasClass('active')) {
        $(this).add(content).add(activeItems).toggleClass('active');
        wrapper.css('min-height', content.outerHeight());
    }
}
;
tabToggle.on('click', openTab);
$(window).load(function () {
    tabToggle.first().trigger('click');
});


</script>

@endsection