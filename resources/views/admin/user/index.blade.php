@extends('layouts.admin')
@section('title','User')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">User</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('user.create')}}" class="btn btn-sm btn-outline-secondary">Add User</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>
	@isset($users)
			<table id="dtBasicExample" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
				<thead class="thead-dark">
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
								Verified <strong class="text-success"><span data-feather="check-circle"></span></strong>
							</td>
						@else
							<td>
								<form method="POST" action="{{ route('admin.verify', ['user' => $user->id]) }}">
									@csrf
									@method('patch')
									<div class="btn-toolbar mb-2 mb-md-0">
										<div class="btn-group mr-2">
											<button class="btn btn-sm" type="submit">
												Verify <strong class="text-warning"><span data-feather="alert-octagon"></span></strong>
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
	@endisset
@endsection
@section('script')

	@endsection
