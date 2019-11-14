@extends('adminlte::page')
@section('title','User')
@section('css')
	<link rel="stylesheet" href="{{asset('vendor/datatables/css/bootstrap4.min.css')}}"/>
@endsection
@section('content')
	
	
	@isset($users)
		
		
		
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Users</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th class="th-sm">#</th>
						<th class="th-sm">Name</th>
						<th class="th-sm">Email</th>
						<th class="th-sm">Status</th>
					</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td> {{$loop->iteration}}</td>
							<td> {{$user->name}}</td>
							<td> {{$user->email}}</td>
							@isset($user->email_verified_at)
								<td>
									Verified <strong class="text-success"><span
												data-feather="check-circle"></span></strong>
								</td>
							@else
								<td>
									<form method="POST"
									      action="{{ route('admin.verify', ['user' => $user->id]) }}">
										@csrf
										@method('patch')
										<div class="btn-toolbar mb-2 mb-md-0">
											<div class="btn-group mr-2">
												<button class="btn btn-sm" type="submit">
													Verify <strong class="text-warning"><span
																data-feather="alert-octagon"></span></strong>
												</button>
											</div>
										</div>
									</form>
								</td>
							@endisset
						</tr>
					@endforeach
					</tbody>
					<tfoot>
					<tr>
						<th class="th-sm">#</th>
						<th class="th-sm">Name</th>
						<th class="th-sm">Email</th>
						<th class="th-sm">Status</th>
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
	{{--		<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>--}}
	
	<script src="{{ asset('vendor/datatables/js/bootstrap4.min.js') }}"></script>
	<script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
	</script>
@endsection


