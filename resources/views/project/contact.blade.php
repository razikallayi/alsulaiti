@extends('project.layout.project')

@section('content')

   
<div class="about-ttl">
  <div class="container no-padding">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')

           <h2>Contact US</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li class="breadcrumbs-active">Contact US</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>
	
<div class="contact">
	<div class="container-fluid no-padding">
       <div class="col-md-12 no-padding">
          	<div class="col_content col">

    <div id="view-navigator">
        <ul id="view-list">
            <li>
            <a href="#" class="view-list-item" name="doha-qatar">
                <h4>Doha Tower, West bay Qatar</h4>
                <p>Tel: +974 4466 4066 or +974 4466 4766 <br>
                    Fax: +974 4465 1919<br>
                    P.O. Box: 14646, Doha, Qatar<br>
                    e-mail: info@slf-qa.com</p>
            </a>
            </li>
            <li>
            <a href="#" class="view-list-item" name="milan-italy">
            	<h4>Milan, Italy</h4>
                <p>Via S. Cecilia, 5-20122 Milan, Italy<br>
Tel: +39 02 76006706<br>
Fax: +39 02 76390633</p>
            </a>
            </li>
            <li>
            <a href="#" class="view-list-item" name="beirut-lebanon">
           		<h4>Beirut, Lebanon</h4> 
                <p>Tilal Bldg., Block A7<br>
                    Asharfieh Street, Beirut, Lebanon<br>
                    Tel: +961 1 207222<br>
                    Fax: +961 1 203191<br>
                    e-mail: info@mcl-lb.com
               </p>
            </a>
           </li>
        </ul>
        
        
        <ul id="view-list">
            <li>
            <a href="#" class="view-list-item" name="cairo-egypt">
                <h4>Cairo, Egypt</h4>
                <p>26 Mostafa Nahas Madinat Nasr<br>
Cairo, Egypt<br>
Tel: +202 26700370</p>
            </a>
            </li>
            <li>
            <a href="#" class="view-list-item" name="como-italy">
            	<h4>Como, Italy</h4>
                <p>Via Garibaldi, 30-22100 Como, Italy<br>
Tel: +39 031 261314<br>
Fax: +39 031 3301389</p>
            </a>
            </li>
            <li>
            <a href="#" class="view-list-item" name="kuwait">
           		<h4>Kuwait</h4> 
                <p>6th Floor, Kuwait Chamber<br>
of Commerce and Industry Bldg.<br>
Abdul Aziz Hamad Al Sagar Street<br>
Tel: +965 2243 1122<br>
Fax: +965 2240 2501<br>
P.O. Box: 26292, Safat 13123, Kuwait<br>
e-mail: info@mcl-kw.com
               </p>
            </a>
           </li>
        </ul>
        
    </div>

    <div id="primoPiano-view">
        <div id="doha-qatar" class="news-list">
            <div class="gmap">
            	<div class="gmap-head">Doha Tower, West bay Qatar</div>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.60434948111!2d51.526154014483375!3d25.317493783840355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c4c42c814901%3A0xda00b337f137f825!2sDoha+Tower%2C+Al+Corniche+St%2C+Doha!5e0!3m2!1sen!2sqa!4v1499424117524" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div id="milan-italy" class="news-list">
        <div class="gmap-head">Milan, Italy</div>
            <div class="gmap">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89547.0732172235!2d9.107692769830662!3d45.462832799659786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1493f1275e7%3A0x3cffcd13c6740e8d!2sMilan%2C+Italy!5e0!3m2!1sen!2sqa!4v1473073132699" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div id="beirut-lebanon" class="news-list">
                    <div class="gmap-head">Beirut, Lebanon</div>
            <div class="gmap">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26496.126798814657!2d35.48652287141666!3d33.88924563662009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17215880a78f%3A0x729182bae99836b4!2sBeirut%2C+Lebanon!5e0!3m2!1sen!2sqa!4v1473073929432" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
        
        <div id="cairo-egypt" class="news-list">
                    <div class="gmap-head">Cairo, Egypt</div>
            <div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.33561268003!2d31.223444940172076!3d30.059558148294094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C+Cairo+Governorate%2C+Egypt!5e0!3m2!1sen!2sqa!4v1473074721883" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>

        </div>
        <div id="como-italy" class="news-list">
                    <div class="gmap-head">Como, Italy</div>
            <div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44504.52221361177!2d9.049076970446874!3d45.80059013933964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47869c352046285b%3A0xdc1d8d223078b604!2sComo%2C+Province+of+Como%2C+Italy!5e0!3m2!1sen!2sqa!4v1473074761844" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>

        </div>
        <div id="kuwait" class="news-list">
                    <div class="gmap-head">Kuwait</div>
            <div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d890602.8086190679!2d46.93131779620002!3d29.314103758695083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!5e0!3m2!1sen!2sqa!4v1473074783590" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>

        </div>
        
    </div>
</div>
       </div>
    </div>

</div>


<div class="getint" id="contact">

  <div class="container">
     <div class="col-md-12 no-padding">
         <div class="row">
           	<div class="col-md-6">
               	<h2> <img src="{{ url('project/images/icons/git.png') }}">  Get in Touch <br> <span>With Us</span></h2>
                <h4>Fill Out Our Contact form and one of our Team Member will be in touch with you.</h4>
                
            </div>
            
            <div class="col-md-6">
              <form action="{{url('contact')}}" method="post">
              {{csrf_field()}}

 

                <div class="col-md-12">
                  <div class="form-group">
                    <div class="icon-addon addon-lg">
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                      <label for="name" class="user" rel="tooltip" title="name"></label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="icon-addon addon-lg">
                      <input name="phone" type="number" class="form-control" placeholder="Phone">
                      <label for="Phone" class="fphone" rel="tooltip" title="Phone"></label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="icon-addon addon-lg">
                      <input name="email" type="email" class="form-control" placeholder="Email" required>
                      <label for="email" class="femail" rel="tooltip" title="email"></label>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <div class="icon-addon addon-lg">
                      <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                      <label for="message" class="msg" rel="tooltip" title="message"></label>
                    </div>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <button type="submit" name="submit" class="button button--shikoba button--round-s button--border-thin"><i class="button__icon"></i><span>Submit</span></button>
                  </div>
                </div>
             
            </div>
            
         </div>
     </div>
  </div>

</div>



@endsection

@section('scripts')

@if (session()->has('message'))
<script>
  popup('{{session()->get('message')}}');
</script>
@endif

{{-- <script type="text/javascript" src="{{url('project/js/js-jquery-1.7.2.min.js') }}"></script> --}}
<script type="text/javascript" src="{{url('project/js/jquery-ui.min.js') }}"></script>
<script type='text/javascript'>
$(window).load(function(){
$(document).ready(function(){
    var active = "doha-qatar";
    $('a.view-list-item').click(function () {
        var divname= this.name;
        // $("#"+active ).hide("slide", { direction: "left" }, 500);
        $("#"+active ).slideUp(1000);
        $("#"+divname).delay(500).show("slide", { direction: "left" }, 500);
        active = divname;
    });
});

}); 

</script>

<script src="{{url('project/js/owl.carousel.js') }}"></script>
<script>

$(function () {
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