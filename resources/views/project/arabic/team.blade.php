@extends('project.arabic.layout.project')
@section('content')

   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

{{-- @include('project.layout.partials.mail_alert') --}}
           <h2>فريقنا</h2>
           <div class="breadcrumbs">
              <ul>
                 <li><a href="{{url('ar/')}}">الصفحة الرئيسية</a></li>
                 <li class="breadcrumbs-active">فريقنا	</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>


	

@if(!$teams->isEmpty())

<div class="team">
  <div class="container">
    <div class="col-md-12 no-padding">
    @php
      $firstMember = $teams->shift();
      @endphp
    <div class="row">
        <div class="col-md-12">
          <div class="tm-tp clearfix">
            <div class="col-md-5 no-padding"><img src="{{ $firstMember->imageUrl() }}" class="img-responsive"></div>
            <div class="col-md-7 no-padding">
               <div class="tmad">
                 <ul>
                   <li><img src="{{url('project/images/team/user.png')}}"><h4>{{$firstMember->translate('name')}}<br><span>{{$firstMember->translate('designation')}}</span></h4></li>
                   @if($firstMember->phone)
                   <li><img src="{{ url('project/images/team/phone.png') }}" alt="phone icon">{{ $firstMember->phone }}</li>
                   @endif
                   @if($firstMember->email)
                   <li><img src="{{ url('project/images/team/email.png') }}" alt="email icon"><a href="mailto:{{ $firstMember->email }}">{{ $firstMember->email }}</a></li>
                   @endif
                 </ul>
                 <a href="{{$firstMember->detailPageUrl(null,'ar')}}" class="tmad-m"><img src="{{url('project/images/abt-pub.jpg')}}"></a>
               </div>
               <div class="spv clearfix">
                 <ul>
                   <li><a href="{{$firstMember->detailPageUrl('#sectors','ar')}}">مجالات العمل</a></li>
                 <li><a href="{{$firstMember->detailPageUrl('#profile','ar')}}">السيرة الذاتية</a></li>
                 <li><a href="{{$firstMember->detailPageUrl('#vcard','ar')}}">V-card</a></li>
                 </ul>
               </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($teams->chunk(4) as $chunks)
        <div class="col-md-12">
          <div class="row">
            @foreach($chunks as $team)
            <div class="col-md-3">
              <div class="tm"><a href="{{$team->detailPageUrl(null,'ar')}}">
                <img src="{{ $team->imageUrl() }}" class="img-responsive">
                <h4>{{ $team->translate('name') }}</h4>
                <p>{{ $team->translate('designation') }}</p>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endforeach
      @endif
    </div>
    
    
      
      
    </div>
  </div>
</div>


@endsection