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
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					@foreach($notices as $notice)
						<tr>
							<td> {{$loop->iteration}}</td>
							<td> {{$notice->title}}</td>
							<td> {!! $notice->description !!}</td>
							@isset($notice->attachment)
								<td><a href="{{ url( asset('storage/'.$notice->attachment))}}"
								       target="_blank">{{$notice->title}}</a></td>
							@else
								<td>
									No File Attached
								</td>
							@endisset
							<td> {{ date_format($notice->created_at, 'jS M, Y')	}}</td>
					
							<td>
								<div class="btn-group btn-block">
									<a href="{{ route('notice.edit',$notice)}}" class="btn btn-sm btn-outline-info">
										Edit <span class="fas fa-pen ml-2"></span>
									</a>
									<button href="#" class="btn btn-sm btn-outline-danger" data-toggle="modal"
									        data-target="#delete{{$loop->iteration}}">
										Delete <span class="fas fa-trash ml-2"></span>
									</button>
								</div>
							</td>
						</tr>
						<!-- Delete Confirmation Modal -->
						<div class="modal fade" id="delete{{$loop->iteration}}" tabindex="-1" role="dialog"
						     aria-labelledby="myModalLabel"
						     aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header text-center">
										<h4 class="modal-title w-100 font-weight-bold">Delete Confirmation</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body mx-3">
										Are you sure you want to delete this account?
									</div>
									<div class="modal-footer d-flex justify-content-center">
										<form method="POST"
										      action="{{ route('notice.destroy', [$notice]) }}">
											@csrf
											@method('delete')
											<button class="btn btn-outline-danger">Delete</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Delete Confirmation Modal -->
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
