@extends('admin.layout.master')

@section('title','Manage Video')

@section('active_menu','mnu-video')
@section('active_submenu','manage')

@section('styles')
@parent
<!-- jquery sortable Plugin Css -->
<link href="{{url('md/plugins/jquery-sortable/jquery-sortable.min.css')}}" rel="stylesheet">

@endsection

@section('page_navigation')

@endsection

@section('content')


<div class="row">
	@if(!$videos->isEmpty())
	<div class="col-sm-12">

	<div class="card">
		<div class="header bg-project">
			<h2 class="">Manage Video<a href="{{url('admin/video')}}"><i class="material-icons pull-right">view_list</i></a></h2>
		</div>
	</div>
	<div class="connectedSortable">
		@foreach($videos as $video)

		<div id="sort_{{$video->id}}" class="col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="header" >

					<ul class="header-dropdown m-r--5">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">more_vert</i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="{{url('admin/video/edit/'. $video->id)}}">Edit Video</a></li>
								<li><a href="{{url('admin/video/'.$video->id)}}" onclick="event.preventDefault();
								document.getElementById('delete-form-{{$video->id}}').submit();">
								<form id="delete-form-{{$video->id}}" action="{{ url('admin/video/'. $video->id) }}" method="post" style="display: none;">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
								</form>Delete Video</a></li>

								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div  id="carousel-{{$video->id}}"  class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div style="min-height:100px;" class="item active">
									<a href="{{$video->link}}?autoplay=1;rel=0" class="more"><img src="https://img.youtube.com/vi/{{$video->youtubeId()}}/0.jpg" class="img-responsive" /></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			@endforeach
		</div>
		@else
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="body">
					No data to display.
					<a href="{{url('admin/video/add')}}" class="btn btn-info pull-right">Add Video</a>
				</div>
			</div>
		</div>
		@endif
	</div>

	@endsection


	@section('scripts')
	@parent
	<!-- Jquery sortable Plugin Js -->
	<script src="{{url('md/plugins/jquery-sortable/jquery-sortable.min.js')}}"></script>
	<script type="text/javascript">
    	//Make the dashboard widgets sortable Using jquery UI
    	$(".connectedSortable").sortable({
    		connectWith: ".connectedSortable",
    		revert: 200,
    		handle: ".card",
    		zIndex: 999999
    	});
    	$(".connectedSortable .card").css("cursor", "move");
    	$(".connectedSortable").on( "sortupdate", function( video, ui ) {
    		var order = $(this).sortable("serialize") + '&action=updateCategoryListings'; 
    		$.post("{{url('admin/video/sort')}}", order)
    	});
    </script> 
    {{--Sorting Ends--}}

<script>
	// CSRF protection
	$.ajaxSetup(
	{
		headers:
		{
			'X-CSRF-Token': $('input[name="_token"]').val()
		}
	});
</script>
@endsection