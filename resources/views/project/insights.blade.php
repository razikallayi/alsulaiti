@extends('project.layout.project')

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
            <li class="breadcrumbs-active">Insights </li>
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
        <div class="col-md-8 ">
          
          @foreach($insights as $insight)

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
              <h2>{{str_limit($insight->title)}}</h2>
              <div class="pst-sec">
                <ul>
                  <li><i class="fa fa-user"></i> {{@$insight->author->name}}</li>
                  <li><i class=" fa fa-clock-o"></i> {{strtoupper($insight->updated_at->format('M d,Y'))}}</li>


<li><div class="social-buttons">
    <a onclick="shareFb('{{$insight->detailPageUrl()}}')" href="javascript:void(0);"
       target="_blank">
       <i class="fa fa-facebook-official"></i>Facebook
    </a>
</div></li>

<li><div class="social-buttons">

 <a href="https://twitter.com/intent/tweet?url={{$insight->detailPageUrl()}}"
       target="_blank">
        <i class="fa fa-twitter-square" style="color:skyblue;"></i>Twitter
    </a>

</div></li>



    <li><div class="social-buttons">

<a href="https://plus.google.com/share?url={{$insight->detailPageUrl()}}" 
       target="_blank">
       <i class="fa fa-google-plus-square" style="color:red;"></i>Google Plus
    </a>

</div></li>



                </ul>
              </div>
              <p>​​{!!str_limit(strip_tags($insight->content),550)!!}</p>
              <a href="{{$insight->detailPageUrl()}}" class="blg-mr"> Read More </a> </div>
          </div>
@endforeach

<div class="text-center">
{{$insights->links()}}
</div>
        </div>

         @if($recentInsights->unique('author')->isNotEmpty())
        <div class="col-md-4 sidebar fixedsticky">
          <div class="rp">
            <h2>Recent Publication</h2>
            <h6>and online Transmission</h6>

            @foreach($recentInsights->unique('author')->all() as $insight)
            <div class="ins clearfix">
             <a href="{{ @$insight->author->detailPageUrl()}}">
               <div class="ins-img"><img src="{{ @$insight->author->imageUrl(null,113,90)}}"></div>
               <div class="ins-txt">
                 <h4>{{ str_limit(@$insight->author->name,22)}}</h4>
                 <p>{{ strip_tags(str_limit(@$insight->author->designation,60))}}</p>
               </div>
               </a>
            </div>
            @endforeach
            
          </div>
        </div>
        @endif


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
function shareFb(url) {
console.log(url);
  FB.ui({
    method: 'share',
    display: 'popup',
    href: url ,
  }, function(response){});
}
</script>

@endsection