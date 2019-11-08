@extends('layouts.admin')
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
		<div class="container">
			@foreach($carousels as $card)
				<div class="{{$loop->even?'row':'float-left'}}">
					@include('components.card',['route'=>'carousel'])
				</div>
			@endforeach
		</div>
	@endisset
@endsection

