@extends('adminlte::page')
@section('title','Notice')
@section('css')
	<link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap4.css')}}"/>
@endsection
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Add Notice</h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('notice.create')}}" class="btn btn-sm btn-outline-secondary">Add</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Reset</button>
			</div>
		</div>
	</div>
	
	
	@isset($notices)
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Notices</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-responsive-sm table-bordered table-striped">
					<thead>
					<tr>
						<th>No.</th>
						<th>Title</th>
						<th>Description</th>
						<th>Attachment</th>
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
								<td><a href="{{ url( asset('storage/'.$notice->attachment))}}"
								       target="_blank">{{$notice->title}}</a></td>
							@else
								<td>
									No File Attached
								</td>
							@endisset
							<td> {{ date_format($notice->created_at, 'jS M, Y')	}}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	@endisset
@endsection
@section('js')
	<script src="{{ asset('vendor/datatables/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
	</script>
@endsection
