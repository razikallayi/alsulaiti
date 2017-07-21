@extends('admin.layout.master')

@section('title','Manage Service')

@section('active_menu','mnu-service')
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
	@if(!$services->isEmpty())
	<div class="col-sm-12">

	<div class="card">
		<div class="header bg-project">
			<h2 class="">Manage Service<a href="{{url('admin/service')}}"><i class="material-icons pull-right">view_list</i></a></h2>
		</div>
	</div>
	<div class="connectedSortable">
		@foreach($services as $service)

		<div id="sort_{{$service->id}}" class="col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="header" >
					<h2 style="white-space: nowrap;overflow:hidden">
						<span>{{str_limit($service->title,40)}}</span>
						<small>{{str_limit(strip_tags($service->content),70)}}</small>
					</h2>

					<ul class="header-dropdown m-r--5">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">more_vert</i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="{{url('admin/service/edit/'. $service->id)}}">Edit Service</a></li>
								<li><a href="{{url('admin/service/'.$service->id)}}" onclick="event.preventDefault();
									document.getElementById('delete-form-{{$service->id}}').submit();">
									<form id="delete-form-{{$service->id}}" action="{{ url('admin/service/'. $service->id) }}" method="post" style="display: none;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									</form>Delete Service</a></li>

								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div  id="carousel-{{$service->id}}"  class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div style="min-height:100px;" class="item active">
									<img style="margin:auto;" src="{{url(App\Models\Service::IMAGE_LOCATION.'/'.$service->image)}}" />
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
					<a href="{{url('admin/service/add')}}" class="btn btn-info pull-right">Add Service</a>
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
    	$(".connectedSortable").on( "sortupdate", function( event, ui ) {
    		var order = $(this).sortable("serialize") + '&action=updateCategoryListings'; 
    		$.post("{{url('admin/service/sort')}}", order)
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