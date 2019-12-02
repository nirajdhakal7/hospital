@extends('adminlte::page')
@section('title','Executives')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Executives</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('executive.create')}}" class="btn btn-sm btn-outline-secondary">Add Executive</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
			</div>
		</div>
	</div>

	@isset($executives)
		@if ( count($executives)>  0)
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            @foreach($executives as $card)
            @include('components.card',['route'=>'executive'])
            @endforeach
            </div>
			<div class="container">
				{{ $executives->links() }}
			</div>
		@else
			<p>No Executive found</p>
		@endif
	@endisset
@endsection
