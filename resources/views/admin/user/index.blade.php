@extends('adminlte::page')
@section('title','User')
@section('css')
	<link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap4.css')}}"/>
@endsection
@section('content')
	@isset($users)
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Users</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-responsive-sm table-bordered   table-striped">
					<thead>
					<tr>
						<th class="th-sm">#</th>
						<th class="th-sm">Name</th>
						<th class="th-sm">Email</th>
						<th class="th-sm">Status</th>
						<th class="th-sm">Action</th>
					</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td> {{$loop->iteration}}</td>
							<td> {{$user->name}}</td>
							<td> {{$user->email}}</td>
							@isset($user->email_verified_at)
								<td>Verified<span class="text-success">
										<span class="far fa-check-circle ml-2"></span>
									</span>
								</td>
								<td>
									<div class="btn-group btn-block">
										<a href="#" class="btn btn-sm btn-outline-info">
											View <span class="far fa-eye ml-2"></span>
										</a>
										@if($user->id!==auth()->id())
											<button class="btn btn-sm btn-outline-danger" data-toggle="modal"
											        data-target="#delete{{$loop->iteration}}">
												Delete <span class="fas fa-trash ml-2"></span>
											</button>
											<button class="btn btn-sm btn-outline-primary" data-toggle="modal"
											        data-target="#suspend{{$loop->iteration}}">
												Suspend <span class="fa fa-minus-circle ml-2"></span>
											</button>
										@else
											<button class="btn btn-sm btn-outline-danger" disabled>
												Delete <span class="fas fa-trash ml-2"></span>
											</button>
											<button class="btn btn-sm btn-outline-primary" disabled>
												Suspend <span class="fa fa-minus-circle ml-2"></span>
											</button>
										@endif
									</div>
								</td>
							@else
								<td>
									Pending
									<span class="text-warning">
										<span class="fa fa-exclamation-triangle	ml-2"></span>
									</span>
								</td>
								<td>
									<div class="btn-group btn-block">
										<button href="#" class="btn btn-sm btn-outline-info">
											View <span class="far fa-eye ml-2"></span>
										</button>
										<button href="#" class="btn btn-sm btn-outline-danger" data-toggle="modal"
										        data-target="#delete{{$loop->iteration}}">
											Delete <span class="fas fa-trash ml-2"></span>
										</button>
										<button href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal"
										        data-target="#verify{{$loop->iteration}}">
											Verify <span class="far fa-check-circle ml-2"></span>
										</button>
									</div>
								</td>
							@endisset
						</tr>
						<!-- Verification Confirmation Modal -->
						<div class="modal fade" id="verify{{$loop->iteration}}" tabindex="-1" role="dialog"
						     aria-labelledby="myModalLabel"
						     aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header text-center">
										<h4 class="modal-title w-100 font-weight-bold">Confirm Verification</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body mx-3">
										Are you sure you want to verify this account?
									</div>
									<div class="modal-footer d-flex justify-content-center">
										<form method="POST"
										      action="{{ route('admin.verify', ['user' => $user->id]) }}">
											@csrf
											@method('patch')
											<button class="btn btn-outline-primary">Verify</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Verification Confirmation Modal -->
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
										      action="{{ route('user'.'.destroy', ['user' => $user->id]) }}">
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
					</tbody>
					<tfoot>
					<tr>
						<th class="th-sm">#</th>
						<th class="th-sm">Name</th>
						<th class="th-sm">Email</th>
						<th class="th-sm">Status</th>
						<th class="th-sm">Action</th>
					</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
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