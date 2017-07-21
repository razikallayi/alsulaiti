<footer>
   <div class="container">
      <div class="col-md-12">
         <div class="col-md-3 no-padding">
            <div class="flw">
               <h3>Follow Us</h3>
               <img src="{{ url('project/images/ftr-logo.png') }}" class="img-responsive" alt="Law Firms Qatar">
               <ul>
                  <li><a href="https://www.youtube.com/channel/UC2-99jokwwbp9_aChOH3vmQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/10886250?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10886250%2Cidx%3A2-1-3%2CtarId%3A1470819688915%2Ctas%3Aal%20sulaiti%20law%20" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://twitter.com/Al_Sulaiti_Law" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.facebook.com/al.sulaiti.law" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://plus.google.com/u/0/112276132371448273823" target="_blank"><i class="fa fa-google-plus"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-4 no-padding">
             <div class="sitemap">
                  <h3>Follow Us</h3>
                  <ul>
                     <li><a href="{{url('training')}}">Training</a></li>
                     <li><a href="{{url('service')}}">Service & Sectors</a></li>
                     <li><a href="{{url('events')}}">Events</a></li>
                     <li><a href="{{url('corporate-responsibility')}}">Responsibility</a></li>
                     <li><a href="{{url('team')}}">Our Team</a></li>
                     <li><a href="{{url('clients')}}">Clients</a></li>
                     <li><a href="{{url('contact')}}">Contact Us</a></li>
                  </ul>
             </div>
         </div>
         <div class="col-md-5 no-padding">
           <div class="brouchure-sec clearfix">
              <div class="col-md-12 no-padding clearfix"><div class="tp"><a href="#top"><img src="{{ url('project/images/top.png') }}" alt="Legal Consultancy Qatar"></a></div></div>
              <div class="col-md-12 no-padding clearfix">
                 <div class="col-md-7 no-padding">
                 	 <div class="blt border-right">
                        <h4> Qatari Law Firm with a <br> <span>Regional Reach & a Global Outlook</span>  </h4>
                     </div>
                     
                 </div>
                 <div class="col-md-5 no-padding">
                  <div class="blt">
                        <a href="{{url('book/sulaiti-law-firm-profile-2017')}}" target="_blank"><img src="{{ url('project/images/download.png') }}" alt="Qatar Law Firms"><h5>Click to download<br> <span>Brochure</span></h5></a>
                     </div>
                 </div>
              </div>
           </div>
           
           <div class="latest-events">
              
              <a class="twitter-timeline" data-height="250" data-dnt="true" data-theme="light" href="https://twitter.com/Al_Sulaiti_Law">Tweets by Al_Sulaiti_Law</a> 
              
           </div>
           
         </div>
      </div>
   </div>
</footer>

<div id="Popup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p class="message"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="footer-btm">
  <div class="container">
  		<div class="col-md-12">
           <div class="arr">© 2016 Al Sulaiti Lawfirm . All Rights Reserved.</div>
           <div class="pwb">Powered by  <a href="http://www.whytecreations.com/" target="_blank" rel="dofollow"> <img src="{{ url('project/images/whyte.jpg') }}" alt="Web Design Companies Qatar">         Whyte Company </a></div>
        </div>
  </div>
</div> 


<script>
  function popup(message){
    $('#Popup .message').html(message);
    $('#Popup').modal();
  }
</script>

<script async src="{{url('project/js/widgets.js') }}" charset="utf-8"></script>
<script src="{{url('project/js/classie.js') }}"></script>
<script src="{{url('project/js/jquery.fancybox.js') }}" type="text/javascript"></script>
<script>
$("a.more").click(function() {
    $.fancybox({
            'padding'       : 10,
            'autoScale'     : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
            'title'         : this.title,
            'width'         : 680,
            'height'        : 495,
            'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
            'type'          : 'swf',
            'swf'           : {
             'wmode'        : 'transparent',
             'allowfullscreen'   : 'true'
            }
        });

    return false;
});

</script>