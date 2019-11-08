@extends('layouts.admin')
@section('title','Add Executive Member')
@section('content')
	
	<form class="p-2" method="POST" action="{{ route('executive.store') }}">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputEmail4">Name</label>
				<input type="text" class="form-control" value="{{old('name')}}" name="name" id="inputEmail4" placeholder="Name" >
				<strong class="text text-danger">{{ $errors->first('name') }}</strong>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputPassword4">Post</label>
				<input type="text" class="form-control" value="{{old('post')}}" name="post" id="inputPassword4" placeholder="Post">
				<strong class="text text-danger">{{ $errors->first('post') }}</strong>
			</div>
			<div class="form-group col-md-6">
				<label for="inputAddress">Message</label>
				<input type="text" class="form-control" value="{{old('message')}}" name="message" id="inputAddress" placeholder="Message from Person">
				<strong class="text text-danger">{{ $errors->first('message') }}</strong>
			</div>
		</div>
		
		
		<div class="form-group">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="gridCheck">
				<label class="form-check-label" for="gridCheck">
					Check me out
				</label>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection