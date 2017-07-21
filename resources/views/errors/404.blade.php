@extends('project.layout.project')
@section('content')


   
<div class="about-ttl">
  <div class="container">
     <div class="col-md-12 no-padding">
        <div class="about-ttl-in">

@include('project.layout.partials.mail_alert')
           <h2>404</h2>
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


<div class="abt-tp text-center">
  <div class="container">
    <div class="col-md-12 no-padding">
      <h1>Page Not Found!</h1>
      <a class="btn btn-lg btn-info" href="{{URL::previous()}}" >go back</a>
      <a class="btn btn-lg btn-default" href="{{url('/')}}" >go home</a>
    </div>
  </div>
</div>

@endsection