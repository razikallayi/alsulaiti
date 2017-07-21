@extends('project.layout.project')

@section('content')


   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">
        @include('project.layout.partials.mail_alert')
           <h2>Publications</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('/')}}">Home</a></li>
                 <li class="breadcrumbs-active">Publications	</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


<div class="client-top">
  <h2>Publications</h2>
</div>	

<div class="publication-in">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="row">


          @foreach($publications as $publication)
          <div class="col-md-4">
            <div class="pub-border">
              <a href="{{$publication->detailPageUrl()}}" target="_blank">
                <div class="pub-img"> <img src="{{$publication->imageUrl()}}" class="img-responsive"></div>
                <div class="pub-txt">
                  <h4>{{$publication->title}}</h4>
                  <p>{!! nl2br(e($publication->description)) !!}
                  </p>
                </div>
              </a>
            </div>
          </div>
          @endforeach

        </div>
        
        
        
        
        
        
        
        
     </div>
     
     
     
     
  </div>

</div>





@endsection