<form action="{{ route($route.'.update',[$route=>$carousel->id]) }}" method="POST" enctype="multipart/form-data">
	@csrf
	{{-- Album--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputTitle">Album</label>
			<input type="text" class="form-control {{ $errors->first('album')?'is-invalid':'' }}"
			       value="{{ old('album')??$carousel->name}}" name="album" id="inputTitle"
			       placeholder="Album">
			@if($errors->first('album'))
				<div class="invalid-feedback">
					{{$errors->first('album')}}
				</div>
			@endisset
		</div>
	</div>

	{{-- Registration No--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputTitle">Registration</label>
			<input type="text" class="form-control {{ $errors->first('registrationNo')?'is-invalid':'' }}"
			       value="{{ old('registrationNo')??$carousel->registrationNo}}" name="registrationNo" id="inputTitle"
			       placeholder="Registration">
			@if($errors->first('registrationNo'))
				<div class="invalid-feedback">
					{{$errors->first('registrationNo')}}
				</div>
			@endisset
		</div>
	</div>

	{{-- Description--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Description</label>
			<input type="text" class="form-control {{ $errors->first('description')?'is-invalid':'' }}"
			       value="{{ old('description')??$carousel->description}}" name="description" id="inputCaption"
			       placeholder="Description">
			@if($errors->first('description'))
				<div class="invalid-feedback">
					{{$errors->first('description')}}
				</div>
			@endisset
		</div>
	</div>

	{{-- Photo--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<div class="custom-file">
				<input type="file" class="custom-file-input {{ $errors->first('url')?'is-invalid':''}}"
				       value=" {{ old('url')}}" name="url"
				       id="validatedCustomFile">
				<label class="custom-file-label"
				       for="validatedCustomFile">Choose file...</label>
				@if($errors->first('url'))
					<div class="invalid-feedback">{{$errors->first('url')}}</div>
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
