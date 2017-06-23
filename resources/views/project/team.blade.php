@extends('project.layout.common')
@section('content')

@include('project.layout.partials.quick_response')
@include('project.layout.partials.sticky_social_icons')
@include('project.layout.partials.header')
   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

           <h2>Our Team</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="index.php">Home</a></li>
                 <li class="breadcrumbs-active">Our Team	</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


	


<div class="team">
  <div class="container">
    <div class="col-md-12 no-padding">
    <div class="row">
        <div class="col-md-12">
          <div class="tm-tp clearfix">
            <div class="col-md-5 no-padding"><img src="{{url('project/images/team/team1.jpg')}}" class="img-responsive"></div>
            <div class="col-md-7 no-padding">
               <div class="tmad">
                 <ul>
                   <li><img src="{{url('project/images/team/user.png')}}"><h4>Mubarak Bin Abdullah Al Sulaiti<br><span>Chairman</span></h4></li>
                   <li><img src="{{url('project/images/team/phone.png')}}">+974 4466 4766</li>
                   <li><img src="{{url('project/images/team/email.png')}}"><a href="mailto:info@slf-qa.com">info@slf-qa.com</a></li>
                 </ul>
                 <a href="team-details.php" class="tmad-m"><img src="{{url('project/images/abt-pub.jpg')}}"></a>
               </div>
               <div class="spv clearfix">
                 <ul>
                   <li><a href="team-details.php#tab-1">Sectors</a></li>
                   <li><a href="team-details.php#tab-2">Profile</a></li>
                   <li><a href="team-details.php#tab-3">V-card</a></li>
                 </ul>
               </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team2.jpg')}}" class="img-responsive">
            <h4>Hussam Tantawy</h4>
            <p>Senior Legal Consultant & General Manager</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team3.jpg')}}" class="img-responsive">
            <h4>Mathieu R. Faupin</h4>
            <p>Senior Legal Consultant </p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team4.jpg')}}" class="img-responsive">
            <h4>Vincenzo Bosisio</h4>
            <p>Senior Legal Associate</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team5.jpg')}}" class="img-responsive">
            <h4>Magdy M. Amin</h4>
            <p>Senior Legal Consultant</p>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team6.jpg')}}" class="img-responsive">
            <h4>Ahmed Qoutb</h4>
            <p>Senior Legal Consultant</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team7.jpg')}}" class="img-responsive">
            <h4>Abdel Jawad Tolan</h4>
            <p>Senior Legal Consultant</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team8.jpg')}}" class="img-responsive">
            <h4>Mohamed Saleh</h4>
            <p>Senior Legal Consultant</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team9.jpg')}}" class="img-responsive">
            <h4>Imam Own</h4>
            <p>Senior Associate</p>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team10.jpg')}}" class="img-responsive">
            <h4>Mohammad Sami</h4>
            <p>Senior Associate</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team11.jpg')}}" class="img-responsive">
            <h4>Ahmed Helmy</h4>
            <p>Senior Associate</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team12.jpg')}}" class="img-responsive">
            <h4>Muhammad A. Hashim</h4>
            <p>Senior Associate & Head of Contracts Dept.</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tm"><a href="team-details.php">
            <img src="{{url('project/images/team/team13.jpg')}}" class="img-responsive">
            <h4>Amr H. Eldin</h4>
            <p>Senior Associate</p>
            </a>
          </div>
        </div>
      </div>
      
      
      
      
    </div>
  </div>
</div>



@endsection
@section('scripts')
@parent


<script>
 $("a[href='#top']").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });
</script>



@endsection