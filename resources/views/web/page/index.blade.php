@extends('layouts.web')
@section('title','Morang Hospital')
@section('content')
	@include('components.carousel')
	<div class="container-fluid">
		<div class="row py-lg-4 ">
			<div class="col-lg-12">
				<h2>About Us</h2>
				<div class="row ">
					<div class=" col-lg-4 col-md-6 col-sm-12">
						<img class="img-fluid " src="{{ asset('storage/'.$about->logo)}}" alt="No Image Found">
					</div>
					@isset($about)
						<div class="col-lg-8 col-md-6 col-sm-12">
							<h3>{{$about->name}}</h3>
							<hr/>
							<p>{{$about->description}}</p>
						</div>
					@endisset
				</div>
			</div>
		</div>
		
		<div class="row py-lg-4">
			<div class="col-lg-auto">
				<h2>Our Services</h2>
				<!-- Grid row -->
				<div class="row">
				@foreach($services as $service)
					<!-- Grid column -->
						<div class="col-lg-3 col-md-6 mb-2">
							<div class="card-desk">
								<!--Card-->
								<div class="card border-dark ">
									<!--Card image-->
									<div class="view">
										<img class="card-img-top img-fluid" src="{{ asset('storage/'.$service->photo)}}"
										     alt="No Image">
										<div class="mask rgba-white-slight"></div>
									</div>
									<!--Card content-->
									<div class="card-body text-gray-dark bg-gradient-dark">
										<!--Title-->
										<h4 class="card-title">{{$service->name}}</h4>
										<p class="card-text text-white">{{$service->description}}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection