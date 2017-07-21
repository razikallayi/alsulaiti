<div class="menu-wrap">
	<div class="menu">
		<div class="container">
          <div class="col-md-12 no-padding">
             <div class="row">
             @php
             $videos = App\Models\Video::where('is_published',true)
                             ->orderBy('listing_order','desc')
                             ->orderBy('updated_at','desc')
                             ->take(6)
                             ->get();

             @endphp
             @if( $videos->isNotEmpty() )
               @foreach($videos as $video)
                @continue($video->link == null) 
               <div class="col-md-4">
                 <a href="{{$video->link}}?autoplay=1;rel=0" class="more"><img src="https://img.youtube.com/vi/{{$video->youtubeId()}}/0.jpg" class="img-responsive" alt="Law 100" /></a>
               </div>
               @endforeach
               @else
               <div class="col-md-4">
                 <p style="color:#fff" class="lead">Coming soon</p>
               </div>
               @endif

             </div>

          </div>
        </div>
	</div>
	<button class="close-button" id="close-button">Close Menu</button>
</div>
			

<header class="">
	<nav class="cd-primary-nav clearfix">
		<div class="container">
        	<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{ url('project/images/logo.png') }}" class="logo" alt="Alsulaiti law firm"></a>
                <div class="nav-rgt">
                   <div class="phone hidden-xs"><img src="{{ url('project/images/phone-tp.png') }}" alt="law firm"> +974 4466 4766 </div>
                 <div class="phone"><a href="{{url('/ar')}}">العربية</a></div>
                 <button class="menu-button" id="open-button">Law 100</button>
                </div>
            </div>
        </div>
		
	</nav> 

	<nav class="cd-secondary-nav clearfix">
		
        
        <nav class="navbar navbar-default navbar-brand-top bootsnav on no-full">
        <div class="container">
           <div class="row">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav cl-effect-3" data-in="fadeIn" data-out="fadeOutDown">
                    <li><a href="{{url('/')}}" class="active">Home</a></li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('about')}}">About Us </a></li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('training')}}">Training  </a></li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('service')}}">Services & Sectors </a></li>
                    <li class="arw hidden-xs">|</li>
                    <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">News Rooms </a>
                    <ul class="dropdown-menu animated " >
                            <li><a href="{{url('events')}}"> Events</a></li>
                            <li><a href="{{url('publications')}}">Publications</a></li>
                            <li><a href="{{url('insights')}}">Insights</a></li>
                        </ul>
                    </li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('corporate-responsibility')}}">Corporate Responsibility </a></li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('team')}}">Our Team </a></li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('clients')}}">Clients </a></li>
                    <li class="arw hidden-xs">|</li>
                    <li><a href="{{url('contact')}}">Contact Us </a></li>
                </ul>
            </div>
            </div>
        </div>    
    </nav>
        
        
	</nav> 
    
</header>