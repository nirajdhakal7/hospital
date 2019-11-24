@extends('layouts.admin')
@section('title','Add Notice')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Add Notice</h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ url('/admin')}}" class="btn btn-sm btn-outline-secondary">Back</a>
				<button type="button" class="btn btn-sm btn-outline-secondary">Reset</button>
			</div>
		</div>
	</div>
	@if($errors->all())
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Error!</strong> Please fill all the field.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	<form class="" method="POST" action="{{ route('notice.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputTitle">Title</label>
				<input type="text" class="form-control {{ $errors->first('title')?'is-invalid':'' }}"
				       value="{{ old('title')}}" name="title" id="inputTitle"
				       placeholder="Title">
				@if($errors->first('title'))
					<div class="invalid-feedback">
						<strong>{{$errors->first('title')}}</strong>
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputDescription">Description</label>
				<textarea rows="4" class="form-control {{ $errors->first('description')?'is-invalid':'' }}"
				          value="{{ old('description')}}" name="description"
				          id="inputDescription"
				          placeholder="Company Description"></textarea>
				@if($errors->first('description'))
					<div class="invalid-feedback">
						<strong>{{$errors->first('description')}}</strong>
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<div class="custom-file">
					<input type="file"
					       value=" {{ old('attachment')}}" name="attachment"
					       id="validatedCustomFile">
					@if($errors->first('attachment'))
						<strong class="text text-danger">{{ $errors->first('attachment') }}</strong>
						{{--						<div class="invalid-feedback">{{$errors->first('attachment')}}</div>--}}
					@endisset
				</div>
			</div>
		</div>
		
		
		{{--		--}}
		{{--		<div class="form-row">--}}
		{{--			<div class="form-group col-md-12">--}}
		{{--				<input type="file" name="attachment" class="py-2"/>--}}
		{{--				<strong class="text text-danger">{{ $errors->first('attachment') }}</strong>--}}
		{{--			</div>--}}
		{{--		</div>--}}
		
		<div class="btn-toolbar mb-2 mb-md-0 ">
			<div class="btn-group mr-2 shadow">
				<button type="submit" class="btn btn-md btn-outline-secondary">Add Notice</button>
			</div>
		</div>
	</form>

@endsection