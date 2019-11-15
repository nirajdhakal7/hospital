@extends('adminlte::page')
@section('title','Notice')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Notice</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('notice.create')}}"  class="btn btn-sm btn-outline-secondary">Add Notice</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>
	@isset($notices)
		<div class="table-responsive">
			<table class="table table-striped table-sm">
				<thead class="thead-dark">
				<tr>
					<th>No.</th>
					<th>Title</th>
					<th>Description</th>
					<th>File</th>
					<th>Created Date</th>
				</tr>
				</thead>
				<tbody>
				@foreach($notices as $notice)
					<tr>
						<td> {{$loop->iteration}}</td>
						<td> {{$notice->title}}</td>
						<td> {{$notice->description}}</td>
						@isset($notice->attachment)
							<td><a href="{{ url( asset('storage/'.$notice->attachment))}}" target="_blank" >{{$notice->title}}</a></td>
						@else
							<td>
								No File
							</td>
						@endisset
						<td> {{$notice->created_at}}</td>
					</tr>
				@endforeach
			</table>
		</div>
	@endisset
@endsection
