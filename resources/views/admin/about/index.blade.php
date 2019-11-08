@extends('layouts.admin')
@section('title','About')
@section('css')
	
	@endsection
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">About</h1>
		
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					@isset($about)
						<form method="POST" action="about/{{$about->id}}">
							@csrf
							<input name="id" value="{{$about->id}}" hidden/>
							@method('DELETE')
							
							<a href="{{ route('about.edit',$about->id)}}"
							   class="btn btn-sm btn-outline-secondary">Edit</a>
							<button class="btn btn-sm btn-outline-secondary" type="submit">Delete</button>
						
						</form>
					@else
						<a href="{{ route('about.create')}}" class="btn btn-sm btn-outline-secondary">Add</a>
						<button class="btn btn-sm btn-outline-secondary" type="submit">Back</button>
					@endisset
				</div>
			</div>
		</div>
	</div>
	
	
	@isset($about)
		<label>Name: </label><small> {{$about->name}}</small>
		<label>Phone: </label><small>{{$about->phone_no}}</small><br>
		<label>Email: </label><small>{{$about->email}}</small><br>
		<label>Slogan: </label><small>{{$about->slogan}}</small><br>
		<label>About: </label><small>{{$about->description}}</small><br>
	@endisset

@endsection