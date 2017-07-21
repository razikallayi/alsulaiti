@extends('admin.layout.master')

@section('title','Manage Client')

@section('active_menu','mnu-client')
@section('active_submenu','manage')

@section('styles')
@parent
<!-- JQuery DataTable Css -->
<link href="{{url('md/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endsection

@section('content')

<div class="row">
	@if(!$clients->isEmpty())
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
				<h2 class="">Manage Client <a href="{{url('admin/client/sort')}}"><i class="material-icons pull-right">view_module</i></a></h2>
			</div>

			<div class="body table-wrapper">
				<table class="table table-bordered table-responsive table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>Image</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						
						
						@foreach($clients as $client)
						
						
						<tr>
							<td>
								<img height="50px" src="{{$client->imageUrl()}}">
							</td>
							
							<td><a href="{{url('admin/client/edit/'.$client->id)}}"><i class="material-icons">edit</i></a></td>
							<td width="5px"><a href="{{url('admin/client/'.$client->id)}}" onclick="event.preventDefault();
								document.getElementById('delete-form-{{$client->id}}').submit();">
								<form id="delete-form-{{$client->id}}" action="{{ url('admin/client/'. $client->id) }}" method="post" style="display: none;">
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
					<a href="{{url('admin/client/add')}}" class="btn btn-info pull-right">Add Client</a>
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
