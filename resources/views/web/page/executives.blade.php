@extends('layouts.web')
@section('title','Our Services')
@section('content')
	
	<div class="container">
		<h2 class="text-center mt-4">Executive Team</h2><!-- Grid row -->
		<div class="row">
			@foreach ($executives as $row)
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="{{ asset('storage/'.$row->photo)}}" alt="Card image cap">
						<div class="card-body">
							<div class="team-info">
								<h3 class="text-center">{{ $row->name}}</h3>
								<p class="text-center">{{ $row->post}}</p>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
