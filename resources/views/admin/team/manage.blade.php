@extends('admin.layout.master')

@section('title','Manage Team')

@section('active_menu','mnu-team')
@section('active_submenu','manage')

@section('content')


<div class="row">
@if(!$teams->isEmpty())
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
		<h2 class="">Manage Team <a href="{{url('admin/team/sort')}}"><i class="material-icons pull-right">view_module</i></a></h2>
	</div>
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
						<img height="50px" src="{{$team->imageUrl()}}">
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


	@endsection

