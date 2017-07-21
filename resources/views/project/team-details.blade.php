@extends('project.layout.project')

@section('styles')
<style>
#regionalMap {
  width: 335px; height: 223px;
}
</style>
@endsection

@section('content')

<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')
           <h2>Our Team</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li><a href="{{url('team')}}">Our Team  </a></li>
                 <li class="breadcrumbs-active">{{$team->name}}	</li>
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
            <div class="col-md-5 no-padding sec-z"><img src="{{ $team->imageUrl() }}" class="img-responsive"></div>
            <div class="col-md-7 no-padding">
               <div class="tmad">
                 <ul>
                   <li><img src="{{ url('project/images/team/user.png') }}"><h4>{{ $team->name }}<br><span>{{ $team->designation }}</span></h4></li>
               @if($team->phone)
               <li><img src="{{ url('project/images/team/phone.png') }}" alt="phone icon">{{ $team->phone }}</li>
               @endif
               @if($team->email)
               <li><img src="{{ url('project/images/team/email.png') }}" alt="email icon"><a href="mailto:{{ $team->email }}">{{ $team->email }}</a></li>
               @endif
                 </ul>
                 
               </div>
               
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12 team-deta">
          <div id="horizontalTab">
  	
        <ul class="clearfix">
            <li><a href="#sectors">Sectors</a></li>
            <li><a href="#profile">Profile</a></li>
             <li><a href="#vcard">V-card</a></li>
        </ul>

        <div id="sectors" class="clearfix">
         <div class="col-md-12 no-padding animated slideInUp det-sec">
          @foreach($team->services as $service)
          <div class="col-md-3">
           <div class="sect">
             <a href="{{$service->detailPageUrl('#'.$service->id)}}">
               <div class="sect-img"><img src="{{ $service->imageUrl(null,248,200) }}">
               </div>
               <h5>{{str_limit($service->title,35)}}</h5>
             </a>
           </div>
         </div>
         @endforeach
            
         </div>
        </div>
        
        
        <div id="profile" class="clearfix">
         <div class="col-md-12 no-padding animated slideInUp det-sec">
           @foreach(App\Models\Team::DETAIL_TITLES as $key=>$title)
           @if($team->$key==null) @continue @endif
           <div class="col-md-6">
            <h4><img src="{{ url('project/images/re.png') }}"> {{$title}} :</h4>
            <p>{!! $team->$key !!}</p>
          </div>
          @endforeach
        </div>
      </div>
        
      <div id="vcard" class="clearfix">
       <div class="col-md-12 no-padding animated slideInUp det-sec">

       <div class="col-md-6">
         <div class="blt">
          <a href="{{$team->detailPageUrl('/vcard')}}"><h3>Click to download</h3></a>
        </div>
      </div>

    </div>
  </div>
        

    </div>
        </div>
      </div>
      
      
      <div class="col-md-12 no-padding">
      <div class="row">
        <div class="col-md-8">
        @php
        $oneInsight = $team->insights->first()!=null?$team->insights->first():App\Models\Insight::recendInsight();
        @endphp

        @if($oneInsight != null)
          <div class="blog-sec">
           <h2 class="ins-head">Insights </h2>
            
            <div class="blog-txt"> 
             <div class="team-insight">
            <img src="{{ $oneInsight->imageUrl() }}" class="img-responsive">
              <div class="shr">
                <div class='branch no-animation'>
                  <div class='node' id='facebook'>
                    <div class='fa fa-facebook share-alt-icon'></div>
                  </div>
                  <div class='stem'></div>
                </div>
                <div class='branch no-animation'>
                  <div class='node' id='google-plus'>
                    <div class='fa fa-google-plus share-alt-icon'></div>
                  </div>
                  <div class='stem'></div>
                </div>
                <div class='branch no-animation'>
                  <div class='node' id='twitter'>
                    <div class='fa fa-twitter share-alt-icon'></div>
                  </div>
                  <div class='stem'></div>
                </div>
                <div class='main-button share-alt'>
                  <div class='fa fa-share-alt fa-2x'></div>
                </div>
              </div>
              <h2>{{$oneInsight->title}}</h2>
              <div class="pst-sec">
                <ul>
                  <li><i class="fa fa-user"></i> {{$team->name}}</li>
                  <li><i class=" fa fa-clock-o"></i>  {{strtoupper($oneInsight->updated_at->format('M d,Y'))}}</li>
                </ul>
              </div>
              <a href="{{$oneInsight->detailPageUrl()}}"><img src="{{ url('project/images/abt-pub.jpg') }}"></a>
               </div>
              
              </div>
      
              
              
          </div>
          
                @endif
        </div>


        <div class="col-md-4 sidebar fixedsticky team-side">
          
          <div class="rp">
          @if($team->regions())
            <h2><img src="{{ url('project/images/re-icon.png') }}"> Regional experience</h2>
             <div class="re">
             <div id="regionalMap"></div>
                {{-- <img src="{{ url('project/images/map-insight.jpg') }}" class="img-responsive"> --}}
             </div>
          @endif


        @if($team->insights->count() > 1)
            <h2><img src="{{ url('project/images/insights-bk.png') }}"> Recent Insights</h2>
            @foreach($team->insights->slice(1)->all() as $insight)
            <div class="ins clearfix">
             <a href="{{ $insight->detailPageUrl() }}">
               <div class="ins-img"><img src="{{ $insight->imageUrl() }}"></div>
               <div class="ins-txt">
               <h4>{{ str_limit($insight->title,22) }}</h4>
               <p>{{ strip_tags(str_limit(@$insight->content,60))}}</p>
               </div>
               </a>
            </div>
            @endforeach
        @endif
            
          </div>
        </div>
      </div>
    </div>
      
      
      
      
    </div>
  </div>
</div>


@endsection
@section('scripts')

    <script src="{{url('project/js/jquery.responsiveTabs.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });


        });
		
    </script>


    <script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
    <script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
    <script>
      var countries = '{{$team->regions()}}';
      if(countries != ""){
        countries = countries.split(',');
      }
      var regions = [];
      countries.forEach(function(countryCode){
        countryCode = countryCode.trim();
        var options = {"id": countryCode, "showAsSelected": true};
        regions.push(options);
      });

      var map = AmCharts.makeChart("regionalMap",{
        type: "map",
        theme: "dark",
        projection: "mercator",
        panEventsEnabled : true,
        backgroundColor : "#eff3f6",
        backgroundAlpha : 1,
        zoomControl: {
        zoomControlEnabled : true
        },
      dataProvider : {
        map : "worldHigh",
        zoomLevel: 3.5,
        zoomLongitude: 25,
        zoomLatitude: 32,
        getAreasFromMap : true,
        areas :regions
      },

      areasSettings : {
        autoZoom : true,
        color : "#b2c9eb",
        colorSolid : "#d2daed",
        selectedColor : "#112037",
        outlineColor : "#d2daed",
        rollOverColor : "#9EC2F7",
        rollOverOutlineColor : "#000000"
      }
    });
    </script>


@endsection