@extends('layouts.admin')
@section('title','Add About')
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Company Details</h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="{{ route('carousel')}}" class="btn btn-sm btn-outline-secondary">Back</a>
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
	
	<form class="p-2" method="POST" action="{{route('about.update', ['about' => $about->id]) }}"  enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputName">Company Name</label>
				<input type="text" class="form-control {{ $errors->first('name')?'is-invalid':'' }}"
				       value="{{ old('name') ?? $about->name}}" name="name" id="inputName"
				       placeholder="Name">
				@if($errors->first('name'))
					<div class="invalid-feedback">
						{{$errors->first('name')}}
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control {{ $errors->first('address')?'is-invalid':'' }}"
				       value="{{ old('address') ?? $about->address}}" name="address" id="inputAddress"
				       placeholder="Address">
				@if($errors->first('address'))
					<div class="invalid-feedback">
						{{$errors->first('address')}}
					</div>
				@endisset
			</div>
			
			<div class="form-group col-md-6">
				<label for="inputEmail">Email</label>
				<input type="email" class="form-control {{ $errors->first('email')?'is-invalid':'' }}"
				       value="{{ old('email') ?? $about->email}}" name="email" id="inputEmail"
				       placeholder="Company Email">
				@if($errors->first('email'))
					<div class="invalid-feedback">
						{{$errors->first('email')}}
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputPhone">Phone No</label>
				<input type="tel" class="form-control {{ $errors->first('phone_no')?'is-invalid':'' }}"
				       value="{{ old('phone_no') ?? $about->phone_no}}" name="phone_no" id="inputPhone"
				       placeholder="Company Phone No">
				@if($errors->first('phone_no'))
					<div class="invalid-feedback">
						{{$errors->first('phone_no')}}
					</div>
				@endisset
			</div>
			<div class="form-group col-md-6">
				<label for="inputSlogan">Slogan</label>
				<input type="tel" class="form-control {{ $errors->first('slogan')?'is-invalid':'' }}"
				       value="{{ old('slogan') ?? $about->slogan}}" name="slogan" id="inputSlogan"
				       placeholder="Company Slogan">
				@if($errors->first('slogan'))
					<div class="invalid-feedback">
						{{$errors->first('slogan')}}
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputDescription">Description</label>
				<textarea rows="4" class="form-control {{ $errors->first('description')?'is-invalid':'' }}"
				          name="description"
				          id="inputDescription"
				          placeholder="Company Description">{{ old('description')??$about->description}}</textarea>
				@if($errors->first('description'))
					<div class="invalid-feedback">
						{{$errors->first('description')}}
					</div>
				@endisset
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<div class="custom-file">
					<input type="file" class="custom-file-input {{ $errors->first('logo')?'is-invalid':''}}"
					       value=" {{ old('logo')}}" name="logo"
					       id="validatedCustomFile">
					<label class="custom-file-label"
					       for="validatedCustomFile">Choose file...</label>
					@if($errors->first('logo'))
						<div class="invalid-feedback">{{$errors->first('logo')}}</div>
					@endisset
				</div>
			
			</div>
		</div>
		@csrf
		<div class="btn-toolbar mb-2 mb-md-0 ">
			<div class="btn-group mr-2 shadow">
				<button type="submit" class="btn btn-md btn-outline-secondary">Submit</button>
			</div>
		</div>
		@method('PATCH')
	</form>

@endsection