@extends('adminlte::page')
@section('title','Add Gallery')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Add Album</h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('gallery.index')}}" class="btn btn-sm btn-outline-secondary">Back</a>
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

    <image-upload v-bind:myVar="1"></image-upload>

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputAlbum">Album Name</label>
				<input type="text" class="form-control {{ $errors->first('album')?'is-invalid':'' }}"
				       value="{{ old('album')}}" name="album" id="inputAlbum"
				       placeholder="Name">
				@if($errors->first('album'))
					<div class="invalid-feedback">
						{{$errors->first('album')}}
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputDescription">Description</label>
				<input type="text" class="form-control {{ $errors->first('description')?'is-invalid':'' }}"
				       value="{{ old('description')}}" name="description" id="inputDescription"
				       placeholder="Description">
				@if($errors->first('description'))
					<div class="invalid-feedback">
						{{$errors->first('description')}}
					</div>
				@endisset
			</div>
		</div>
{{--		<div class="form-row">
			<div class="form-group col-md-12">
				<div class="custom-file">
					<input type="file" class="custom-file-input {{ $errors->first('photo')?'is-invalid':''}}"
					       value=" {{ old('photo')}}" name="photo"
					       id="validatedCustomFile">
					<label class="custom-file-label"
					       for="validatedCustomFile">Choose file...</label>
					@if($errors->first('photo'))
						<div class="invalid-feedback">{{$errors->first('photo')}}</div>
					@endisset
				</div>
			</div>
		</div>--}}
		@csrf
		<div class="btn-toolbar mb-2 mb-md-0 ">
			<div class="btn-group mr-2 shadow">
				<button type="submit" class="btn btn-md btn-outline-secondary">Submit</button>
			</div>
		</div>
	</form>
@endsection
