@extends('project.layout.project')

@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')
           <h2>About Us</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li class="breadcrumbs-active">About Us</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>

<div class="abt-tp">
 <div class="abt-map"></div>
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="">
        <div class="col-md-6 no-padding">
            <div class="videoWrapper videoWrapper169 js-videoWrapper">
    <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowfullscreen data-src="https://www.youtube.com/embed/IMCm1GSIGpI?autoplay=1;rel=0&amp;showinfo=0 "></iframe>
    <button class="videoPoster js-videoPoster" style="background-image:url({{url('project/images/abt-sec-vid.jpg')}});">Play video</button>
  </div>
          </div>
          <div class="col-md-6">
            <h4>Mr. Mubarak Bin Abdullah Al Sulaiti founded Al Sulaiti Law Firm in 2002.</h4>
            <p>With lawyers from five countries, including Egypt, France, Italy, United Kingdom, India and Lebanon, Al Sulaiti Law Firm serves as a bridge between its foreign clients' legal traditions and the local legal system.</p>
<p>
With more than fourteen years of experience, Al-Sulaiti Law Firm has fast become one of the most renowned firms in Qatar. The Firm is a founding member of the MENA City Lawyers network, which connects five firms in North Africa, the Levant, and the Gulf. Al Sulaiti Law Firm is a local law firm with a regional reach and a global outlook.

</p>
          </div>
          
        </div>
     </div>
  </div>
</div>


<div class="odb">
<div class="odb-back"></div>
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="">
        <div class="col-md-6 no-padding">
           <div class="od clearfix">
               <div class="col-md-12 no-padding">
                  <h4> <img src="{{ url('project/images/msn.png') }}"> OUR MISSION <br> <span>Setting expectation to exceed them</span></h4> 
                  <p>Our core aim is to always deliver outstanding, professional and trustworthy services. Strengthening our relationships with our clients is a core part of our development, keeping you at the center of all that we accomplish is very important to us.</p>
                  
                   <h4> <img src="{{ url('project/images/dvs.png') }}"> DIVERSITY </h4> 
                  <p>Al Sulaiti Law Firm has a diverse practice that includes Investment and sports law in addition to Arbitration and Mediation.Our multinational and multilingual group of legal consultants and advocates allows our Firm to bridge the gap between our clients' languages and legal cultures and their local legal needs. The Firm has an impressive range of clients. The Firm services prominent international corporations and organizations. It also assists investors and local Qatari companies and partnerships In addition, Al Sulaiti Law Firm is included in the Italian Embassy's list of recommended law firms. In addition, senior legal consultant Vincenzo Bosisio continues to work as a founding partner in Bosisio – Corbetta – Cossa Law Firm, which maintains offices in Milan and Como, Italy (www.bcclaw.it).</p>
<p>
In addition, The French Embassy routinely refers its citizens to our Firm. Further, Senior Legal Consultant Mathieu Faupin is the elected President of the Union des Français de l'Etranger, an association with representations in more than 100 countries.</p>
                  <a href="{{url('contact')}}">Contact Us</a>
               </div>
           </div>
        </div>
        
        <div class="col-md-6">
          <div class="blt-abt">
            <a href="{{url('book/profile')}}" target="_blank"> <img src="{{ url('project/images/pro-icon.jpg') }}"> Our Firm <br> Profile</a>
            <a href="{{url('book/annual-review-2016')}}" target="_blank"> <img src="{{ url('project/images/ar-icon.jpg') }}"> Annual <br> Review 2016</a>
            <h2>Bridging <br> Legal Traditions</h2>
            <h4>Qatari law firm with a Regional Reach and  <br> A Global Outlook</h4>
            <p>Al Sulaiti Law Firm is a full service Qatari Law firm, with cutting edge legal services offered to private and public entities as well as governmental establishments and reputable international organizations. It was established in 2002 by Mr. Mubarak Bin Abdullah al Sulaiti one of Qatar’s renowned lawyers, with an outstanding reputation that always precedes him. Al Sulaiti Law firm serves clients in various sectors, expertise and regions, having a diverse team that encompass a superb commercial attitude and thorough understanding of the MENA region provides inimitable characteristic s to our firm.</p>
            <img src="{{ url('project/images/team-slogan.png') }}">
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
	
<div class="mc">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="col-md-6 no-padding">
         <h2>A Message from <br> Our Chairman</h2>
         <p>Al Sulaiti Law Firm was established in 2002, this October marks our fourteen year anniversary. Looking back at when the firm was first established I am proud to announce that we are now one of the renowned law firms in the State of Qatar.</p>
         <p>
We are striving to maintain the continuous optimism towards growth and improvement and I am pleased to confirm that Al Sulaiti Law firm has followed through its ten year plan and we are on a veracious track and are still growing as a firm, with new associates and senior legal consultants that are joining our team. We are a Qatari Law firm with a strong diversity policy; we select the best groups of talented Lawyers and Legal Consultants to maintain a certain level of prominent legal services.</p>
<p>
Our Continuous appreciation goes out to all of our loyal and respected clients, who have continuously expressed their trust, confidence in us and loyalty throughout their journey with the firm. On behalf of Al Sulaiti Law Firm Team we would like to express our gratitude and appreciation.</p>
<h6>Sincerely,</h6>
<h4>Mr. Mubarak Bin Abdulla Al Sulaiti <br> <span>Chairman</span></h4>
      </div>
      
      <div class="col-md-6 no-padding mc-img"><img src="{{ url('project/images/cm.jpg') }}" class="img-responsive"></div>
    </div>
  </div>
</div>

<div class="lev">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="col-md-6">
        <h2><img src="{{ url('project/images/le.png') }}"> Legal Ethics </h2>
        <h3>“At Al Sulaiti Law firm we are always committed to delivering the best quality of service to all of our respected clients."</h3>
        <p>We have a strict policy on following all the laws and regulations of the State of Qatar. This includes both clients and associates and
employees. We believe in hard work and unlimited efforts.
We are always developing new strategies to better our practice and our performances. The level of ethical behavior required of a LAWYER is something that sets them apart from the general public.</p>
      </div>
      
      <div class="col-md-6">
        <h4>A few examples ofour Ethical standards are:</h4> 
        <ul>
           <li>Avoiding biased and superciliousness toward, and treat fairly with respect, all witness  es, lawyers, court employees, and other persons involved in the legal process.</li>
           <li>Always maintain high standards of the professional conduct</li>
           <li>Obedience to law exemplifies our respect for the law</li>
           <li>To assure the maintenance of high morals and educational standards of the legal profession</li>
           <li>The attorney client relationship is personal and unique and should not be established as a result of pressures and deceptions.</li>
        </ul>
      </div>
      
    </div>
  </div>
</div>


@endsection
@section('scripts')


<script>
$(document).on('click', '.js-videoPoster', function (ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.js-videoWrapper');
    videoPlay($wrapper);
});
function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.js-videoIframe');
    var src = $iframe.data('src');
    $wrapper.addClass('videoWrapperActive');
    $iframe.attr('src', src);
}
function videoStop($wrapper) {
    if (!$wrapper) {
        var $wrapper = $('.js-videoWrapper');
        var $iframe = $('.js-videoIframe');
    } else {
        var $iframe = $wrapper.find('.js-videoIframe');
    }
    $wrapper.removeClass('videoWrapperActive');
    $iframe.attr('src', '');
}
</script>	

@endsection