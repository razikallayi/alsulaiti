@extends('admin.layout.master')

@section('title','Manage Insight')

@section('active_menu','mnu-insight')
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
@if(!$insights->isEmpty())
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	@if (session()->has('message'))
	<div class="alert {{session()->get('status')}}">
		<ul>
			<li>{!!session()->get('message')!!}</li>
		</ul>
	</div>
	@endif
	<div class="card">
	
	<div class="header bg-project">
		<h2 class="">Manage Insight <a href="{{url('admin/insight/sort')}}"><i class="material-icons pull-right">view_module</i></a></h2>
	</div>

		<div class="body table-wrapper">
			<table class="table table-bordered table-responsive table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
						<th>Image</th>
						<th>Title</th>
						<th>Author</th>
						<th>Published Date</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					
					
					@foreach($insights as $insight)
					
					
					<tr>
						<td>
						@if($insight->image != "")
						<img height="50px" src="{{$insight->imageUrl()}}">
						@endif
						</td>
						<td>{{$insight->title}}<br/>{{$insight->title_ar}}</td>
						<td><img height="50px" src="{{$insight->author->imageUrl()}}"> {{$insight->author->name}}</td>
						<td>{{$insight->published_date}}</td>
						<td><a href="{{url('admin/insight/edit/'.$insight->id)}}"><i class="material-icons">edit</i></a></td>
						<td width="5px"><a href="{{url('admin/insight/'.$insight->id)}}" onclick="event.preventDefault();
                                                 document.getElementById('delete-form-{{$insight->id}}').submit();">
                                                 <form id="delete-form-{{$insight->id}}" action="{{ url('admin/insight/'. $insight->id) }}" method="post" style="display: none;">
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
					<a href="{{url('admin/insight/add')}}" class="btn btn-info pull-right">Add Insight</a>
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
    		$.post("{{url('admin/insight/sort')}}", order)
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