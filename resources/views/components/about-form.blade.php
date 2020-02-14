@isset($method)
<form action="{{ route($route.'.update',[$route=>$about->id]) }}" method="POST" enctype="multipart/form-data">
	@else
<form action="{{ route($route.'.create') }}" method="POST" enctype="multipart/form-data">
	@endisset
	
	@csrf
	{{-- Name--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputTitle">Name</label>
			<input type="text" class="form-control {{ $errors->first('name')?'is-invalid':'' }}"
			       value="{{ old('name')??$about->name}}" name="name" id="inputTitle"
			       placeholder="Name">
			@if($errors->first('name'))
				<div class="invalid-feedback">
					{{$errors->first('name')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Phone No--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputTitle">Phone</label>
			<input type="text" class="form-control {{ $errors->first('phone_no')?'is-invalid':'' }}"
			       value="{{ old('phone_no')??$about->phone_no}}" name="phone_no" id="inputTitle"
			       placeholder="Phone">
			@if($errors->first('phone_no'))
				<div class="invalid-feedback">
					{{$errors->first('phone_no')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Email--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Email</label>
			<input type="text" class="form-control {{ $errors->first('email')?'is-invalid':'' }}"
			       value="{{ old('email')??$about->email}}" name="email" id="inputCaption"
			       placeholder="Email">
			@if($errors->first('email'))
				<div class="invalid-feedback">
					{{$errors->first('email')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Slogan--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Slogan</label>
			<input type="text" class="form-control {{ $errors->first('slogan')?'is-invalid':'' }}"
			       value="{{ old('slogan')??$about->slogan}}" name="slogan" id="inputCaption"
			       placeholder="Slogan">
			@if($errors->first('slogan'))
				<div class="invalid-feedback">
					{{$errors->first('slogan')}}
				</div>
			@endisset
		</div>
	</div>
		
	{{-- Description--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Description</label>
			<textarea class="textarea form-control {{ $errors->first('description')?'is-invalid':'' }}"
			          name="description" id="inputCaption" placeholder="Description" >
				{{ old('description')??$about->description??"Type your<b><u> Description here</b></u>"}}
			</textarea>
			@if($errors->first('description'))
				<div class="invalid-feedback">
					{{$errors->first('description')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Address--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Address</label>
			<input type="text" class="form-control {{ $errors->first('address')?'is-invalid':'' }}"
			       value="{{ old('address')??$about->address}}" name="address" id="inputCaption"
			       placeholder="Address">
			@if($errors->first('address'))
				<div class="invalid-feedback">
					{{$errors->first('address')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Logo--}}
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
	@isset($method)
		@if ($method!='POST')
			@method($method)
		@endif
	@endisset
	<div class="btn-toolbar mb-2 mb-md-0 ">
		<div class="btn-group mr-2">
			<button type="submit" class="btn btn-md btn-outline-secondary">Submit</button>
		</div>
	</div>
</form>