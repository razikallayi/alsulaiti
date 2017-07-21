@extends('admin.layout.master')

@section('title','Manage Publication')

@section('active_menu','mnu-publication')
@section('active_submenu','manage')

@section('styles')
@parent
<!-- JQuery DataTable Css -->
<link href="{{url('md/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

@endsection

@section('content')

<div class="row">
	@if(!$publications->isEmpty())
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
				<h2 class="">Manage Service <a href="{{url('admin/publication/sort')}}"><i class="material-icons pull-right">view_module</i></a></h2>
			</div>

			<div class="body table-wrapper">
				<table class="table table-bordered table-responsive table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>Image</th>
							<th>Book</th>
							<th>Title</th>
							<th>Content</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						
						
						@foreach($publications as $publication)
						
						
						<tr>
							<td>
								<img height="50px" src="{{$publication->imageUrl()}}">
							</td>
							<td><embed src="{{$publication->pdfUrl()}}" /></td>
							<td>{{str_limit($publication->title,60)}}<br/>{{str_limit($publication->title_ar,60)}}</td>
							<td>{{str_limit($publication->content,60)}}<br/>{{str_limit($publication->content_ar,60)}}</td>
							<td><a href="{{url('admin/publication/edit/'.$publication->id)}}"><i class="material-icons">edit</i></a></td>
							<td width="5px"><a href="{{url('admin/publication/'.$publication->id)}}" onclick="publication.prpublicationDefault();
								document.getElementById('delete-form-{{$publication->id}}').submit();">
								<form id="delete-form-{{$publication->id}}" action="{{ url('admin/publication/'. $publication->id) }}" method="post" style="display: none;">
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
					<a href="{{url('admin/publication/add')}}" class="btn btn-info pull-right">Add Publication</a>
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
