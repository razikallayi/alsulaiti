@extends('admin.layout.master')

@section('title','Manage Service')

@section('active_menu','mnu-service')
@section('active_submenu','manage')

@section('styles')
@parent
<!-- JQuery DataTable Css -->
<link href="{{url('md/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endsection

@section('content')

<div class="row">
	@if(!$services->isEmpty())
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
				<h2 class="">Manage Service <a href="{{url('admin/service/sort')}}"><i class="material-icons pull-right">view_module</i></a></h2>
			</div>

			<div class="body table-wrapper">
				<table class="table table-bordered table-responsive table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>Image</th>
							<th>Title</th>
							<th>Content</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						
						
						@foreach($services as $service)
						
						
						<tr>
							<td>
								<img height="50px" src="{{$service->imageUrl()}}">
							</td>
							<td>{{str_limit($service->title,60)}}<br/>{{str_limit($service->title_ar,60)}}</td>
							<td>{{str_limit($service->content,60)}}<br/>{{str_limit($service->content_ar,60)}}</td>
							<td><a href="{{url('admin/service/edit/'.$service->id)}}"><i class="material-icons">edit</i></a></td>
							<td width="5px"><a href="{{url('admin/service/'.$service->id)}}" onclick="event.preventDefault();
									document.getElementById('delete-form-{{$service->id}}').submit();">
									<form id="delete-form-{{$service->id}}" action="{{ url('admin/service/'. $service->id) }}" method="post" style="display: none;">
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
					<a href="{{url('admin/service/add')}}" class="btn btn-info pull-right">Add Service</a>
				</div>
			</div>
		</div>
		@endif
	</div>


	@endsection

	
	@section('scripts')
	@parent

	<!-- Jquery DataTable Plugin Js -->
	<script src="{{url('md/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
	<script src="{{url('md/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
	<script>
		$(function () {
			$('.js-basic-example').DataTable();
		});
	</script>
	@endsection
