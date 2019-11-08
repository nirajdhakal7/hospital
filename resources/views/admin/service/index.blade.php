@extends('layouts.admin')
@section('title','Services')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Services</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('service.create')}}" class="btn btn-sm btn-outline-secondary">Add Service</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>
	
	@isset($services)
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			@foreach($services as $card)
					@include('components.card',['route'=>'service'])
			@endforeach
		</div>
		<div class="container">
			{{ $services->links() }}
		</div>
	@endisset
@endsection