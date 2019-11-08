@extends('layouts.web')
@section('title','Morang Hospital')
@section('css')
	<style>
		.map-container {
			overflow: hidden;
			padding-bottom: 56.25%;
			position: relative;
			height: 0;
		}
		
		.map-container iframe {
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			position: absolute;
		}
	</style>
@endsection
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
						<div class="col-lg-3 col-md-12 mb-2">
							<!--Card-->
							<div class="card">
								<!--Card image-->
								<div class="view">
									<img class="card-img-top img-fluid" src="{{ asset('storage/'.$service->photo)}}"
									     alt="No Image">
									<div class="mask rgba-white-slight"></div>
								</div>
								<!--Card content-->
								<div class="card-body elegant-color white-text">
									<!--Title-->
									<h4 class="card-title">{{$service->name}}</h4>
									<p class="card-text  white-text">{{$service->description}}</p>
									<a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="row py-lg-4 ">
			<div class="col">
				<!--Google map-->
				<div id="map-container" class="z-depth-1-half map-container">
					<iframe src="https://maps.google.com/maps?q=morang%20hospital%20patharisanischare-1&t=&z=17&ie=UTF8&iwloc=&output=embed"
					        frameborder="0"
					        style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	
	
	</div>
@endsection