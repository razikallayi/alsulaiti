@extends('admin.layout.master')

@section('title','Video')

@section('active_menu','mnu-video')
@if(!isset($video))
@section('active_submenu', 'add')
@endif
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header bg-project">
			<h2 class="">@if(isset($video)) Edit @else Add @endif Video</h2>
			</div>
			<div class="body">

			@if(isset($video))
			<form id="form_validation" method="POST" action="{{url('admin/video/update/'.$video->id)}}" enctype="multipart/form-data">
				{{csrf_field()}}
				{{ method_field('PUT') }}
			@else
			<form id="form_validation" method="POST" action="{{url('admin/video')}}" enctype="multipart/form-data">
			@endif

			{{csrf_field()}}


			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			@if (session()->has('message'))
			<div class="alert {{session()->get('status')}}">
				<ul>
					<li>{!!session()->get('message')!!}</li>
				</ul>
			</div>
			@endif

          <div class="col-sm-12">
            <label>Video Url</label>

            <div class="form-group">
              <div class="form-line">
                <input id="videoLink" type="url" value="{{$video->link or old('link')}}" name="link" maxlength="255" class="form-control">
              </div>
            </div>

<div class="help-block small">Supported youtube url formats:</br>
Example: </br>
http://www.youtube.com/watch?v=evXELa4PCnU</br>
http://youtube.com/watch?v=evXELa4PCnU</br>
http://youtube.com/embed/evXELa4PCnU</br>
http://youtu.be/evXELa4PCnU</br>
</div>

            <div id="videoResult">
            @if(isset($video) && $video->link != null)
            <a style="display: inline-block;" class="more" href="{{$video->link}}?autoplay=1;rel=0" target="_blank">
            	<img src="https://img.youtube.com/vi/{{$video->youtubeId()}}/0.jpg" class="img-responsive" />
            </a>
            @endif
            </div>
          </div>


<div class="col-md-4 col-sm-12">
          <label>Publish</label>
          <div class="form-group">
            @php
            $checked=" checked ";
            if(isset($video) && $video->is_published){
              $checked = " checked ";
            }
            else{
              $checked = old('is_published')==1?"checked":$checked;
            }
            @endphp
            <input type="checkbox" name="is_published" value="1" id="is_published" class="filled-in chk-col-blue" {{$checked or ""}}>
            <label for="is_published">Publish</label>
          </div>
        </div>

				<div class="row clearfix">
					<div class="col-sm-12">
						<div class="form-group">
							<div class="">
								<input type="submit" id="saveButton" name="save" value="Save Data" class="btn btn-success waves-effect" >
							</div>
						</div>
					</div>
				</div>

				</form>			
			</div>
		</div>

	</div>

	@endsection

@section('scripts')
@parent
<script type="text/javascript">
$('#videoLink').change(function(){
	
	var videoUrl = this.value;
	var video_id = videoUrl.split('v=')[1];
	if(video_id){
		var ampersandPosition = video_id.indexOf('&');
		if(ampersandPosition != -1) {
			video_id = video_id.substring(0, ampersandPosition);
		}

		var html = '<a href="'+this.value+'?autoplay=1;rel=0" target="_blank"><img src="https://img.youtube.com/vi/'+video_id+'/0.jpg" class="img-responsive" /></a>';
		$('#videoResult').html(html);
	}

});
</script>
@endsection