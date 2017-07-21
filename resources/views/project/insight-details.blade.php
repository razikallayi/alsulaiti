@extends('project.layout.project')

@section('meta')

<meta property="og:url"                content="{{$insight->detailPageUrl()}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{str_limit($insight->title,600)}}" />
<meta property="og:description"        content="{{ strip_tags(str_limit($insight->content,1000))}}" />
<meta property="og:image"              content="{{$insight->imageUrl()}}" />


<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Al_Sulaiti_Law">
<meta name="twitter:creator" content="@SarahMaslinNir">
<meta name="twitter:title" content="{{str_limit($insight->title,200)}}">
<meta name="twitter:description" content="{{ strip_tags(str_limit($insight->content,200))}}">
<meta name="twitter:image" content="{{$insight->imageUrl()}}">

@endsection

@section('content')

<div class="about-ttl">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="about-ttl-in">
        @include('project.layout.partials.mail_alert')
        <h2>Insights</h2>
        <div class="breadcrumbs">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('insights')}}">Insights  </a></li>
            <li class="breadcrumbs-active">{{str_limit($insight->title,60)}} </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="client-top">
  <h2>Insights</h2>
</div>
<div class="publication-in">
  <div class="container">
    <div class="col-md-12 no-padding">
      <div class="row">
        <div class="col-md-8">
          <div class="blog-sec"><img src="{{$insight->imageUrl()}}" class="img-responsive">
            <div class="blog-txt"> 
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
              <h2>{{$insight->title}}</h2>
              <div class="pst-sec">
                <ul>
                  <li><i class="fa fa-user"></i> {{$insight->author->name}}</li>
                  <li><i class=" fa fa-clock-o"></i> {{strtoupper($insight->updated_at->format('M d,Y'))}}</li>

<li><div class="social-buttons">
    <a id="shareBtn" 
       href="javascript:void(0);"
       target="_blank">
       <i class="fa fa-facebook-official"></i>Facebook
    </a>
</div></li>

<li><div class="social-buttons">

 <a href="https://twitter.com/intent/tweet?url={{ $insight->detailPageUrl() }}"
       target="_blank">
        <i class="fa fa-twitter-square" style="color:skyblue;"></i>Twitter
    </a>

</div></li>



    <li><div class="social-buttons">

<a href="https://plus.google.com/share?url={{ urlencode($insight->detailPageUrl()) }}"
       target="_blank">
       <i class="fa fa-google-plus-square" style="color:red;"></i>Google Plus
    </a>

</div></li>


                </ul>
              </div>
              <div class="insight-sec">{!! $insight->content !!}
              </div>
               
              
              </div>
          </div>
          
          
        </div>


        <div class="col-md-4 sidebar fixedsticky">

          <div class="rp">
            <h2>Recent Publication</h2>
            <h6>and online Transmission</h6>
            
            @foreach($recent as $recentInsight)
            @if($loop->first)
            <div class=" inm clearfix">
             <a href="{{ @$recentInsight->detailPageUrl()}}">
               <div class="inm-img"><img src="{{ @$recentInsight->imageUrl(null,163,130)}}"></div>
               <h4>{{ str_limit(@$recentInsight->title,22)}}</h4>
               <p>{{ str_limit(strip_tags(@$recentInsight->content,60))}}</p>
               </a>
            </div>
            @else 

            <div class="ins clearfix">
             <a href="{{ @$recentInsight->detailPageUrl()}}">
               <div class="ins-img"><img src="{{ @$recentInsight->imageUrl(null,113,90)}}"></div>
               <div class="ins-txt">
                 <h4>{{ str_limit(@$recentInsight->title,22)}}</h4>
                 <p>{{ strip_tags(str_limit(@$recentInsight->content,60))}}</p>
               </div>
               </a>
            </div>
            @endif 
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
@section('scripts')
<script src="{{url('project/js/platform.js') }}" async defer></script>
<script>
$('.share-alt').on('click', function(e){
  $(".branch").removeClass("no-animation");
  $('.branch').toggleClass("open");
});

</script>
<script src="{{ url('project/js/fixedsticky.js') }}"></script>  
<script>
  $( '.sidebar' ).fixedsticky();
</script>


<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    display: 'popup',
    href: '{{$insight->detailPageUrl()}}',
  }, function(response){});
}
</script>

@endsection