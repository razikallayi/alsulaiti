@extends('admin.layout.app')

@section('title','Manage Team')

@section('active_menu','mnu-team')
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
@if(!$teams->isEmpty())
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card">

		<div class="body table-wrapper">
			<table class="table table-bordered table-responsive table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Designation</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					
					
					@foreach($teams as $team)
					
					
					<tr>
						<td>
						@if($team->image != "")
						<img height="50px" src="{{url(App\Models\Team::IMAGE_LOCATION.'/'.$team->image)}}">
						@endif
						</td>
						<td>{{$team->name}}<br/>{{$team->name_ar}}</td>
						<td>{{$team->designation}}<br/>{{$team->designation_ar}}</td>
						<td>{{$team->email}}</td>
						<td>{{$team->phone}}</td>
						<td><a href="{{url('admin/team/edit/'.$team->id)}}"><i class="material-icons">edit</i></a></td>
						<td width="5px"><a href="{{url('admin/team/'.$team->id)}}" onclick="event.preventDefault();
                                                 document.getElementById('delete-form-{{$team->id}}').submit();">
                                                 <form id="delete-form-{{$team->id}}" action="{{ url('admin/team/'. $team->id) }}" method="post" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form><i class="material-icons">delete</i></a></td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>
@else
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="body">
					No data to display.
					<a href="{{url('admin/team/add')}}" class="btn btn-info pull-right">Add Team</a>
				</div>
			</div>
		</div>
		@endif
	</div>
{{-- 
<div class="row">
	@if(!$teams->isEmpty())
	<div class="col-sm-12 connectedSortable row">
		@foreach($teams as $team)

		<div id="sort_{{$team->id}}" class="col-md-4 col-sm-6 col-xs-12">
			<div class="card">
				<div class="header" >
					<h2 style="white-space: nowrap;overflow:hidden">
						<span>{{$team->name}}</span>
						<small>{{$team->description}}</small>
					</h2>

					<ul class="header-dropdown m-r--5">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons">more_vert</i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li><a href="{{url('admin/team/'. $team->id.'/edit')}}">Edit Team</a></li>
								<li><a href="{{url('admin/team/'.$team->id)}}" onclick="event.preventDefault();
									document.getElementById('delete-form-{{$team->id}}').submit();">
									<form id="delete-form-{{$team->id}}" action="{{ url('admin/team/'. $team->id) }}" method="post" style="display: none;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									</form>Delete Team</a></li>

								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div  id="carousel-{{$team->id}}"  class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div style="min-height:100px;" class="item active">
									<img style="margin:auto;" src="{{url(App\Models\Team::IMAGE_LOCATION.'/'.$team->image)}}" />
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
					<a href="{{url('admin/team/add')}}" class="btn btn-info pull-right">Add Team</a>
				</div>
			</div>
		</div>
		@endif
	</div> --}}

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
    		$.post("{{url('admin/team/sort')}}", order)
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