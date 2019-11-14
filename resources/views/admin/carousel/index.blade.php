@extends('adminlte::page')
@section('title','Slider')
@section('content')
	
	
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Image Carousel</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('carousel.create')}}" class="btn btn-sm btn-outline-secondary">Add Carousel</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>
	@isset($carousels)
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			@foreach($carousels as $card)
				@include('components.card',['route'=>'carousel'])
			@endforeach
		</div>
		<div class="container">
			{{ $carousels->links() }}
		</div>
	@endisset

@endsection

