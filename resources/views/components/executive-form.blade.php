<form action="{{ route($route.'.update',[$route=>$executive->id]) }}" method="POST" enctype="multipart/form-data">
	@csrf
	
	{{-- Name--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputTitle">Name</label>
			<input type="text" class="form-control {{ $errors->first('name')?'is-invalid':'' }}"
			       value="{{ old('name')??$executive->name}}" name="name" id="inputTitle"
			       placeholder="Name">
			@if($errors->first('name'))
				<div class="invalid-feedback">
					{{$errors->first('name')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Post--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Post</label>
			<input type="text" class="form-control {{ $errors->first('post')?'is-invalid':'' }}"
			       value="{{ old('post')??$executive->post}}" name="post" id="inputCaption"
			       placeholder="Post">
			@if($errors->first('post'))
				<div class="invalid-feedback">
					{{$errors->first('post')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Message--}}
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Message</label>
			<input type="text" class="form-control {{ $errors->first('message')?'is-invalid':'' }}"
			       value="{{ old('message')??$executive->message}}" name="message" id="inputCaption"
			       placeholder="Message">
			@if($errors->first('message'))
				<div class="invalid-feedback">
					{{$errors->first('message')}}
				</div>
			@endisset
		</div>
	</div>
	
	{{-- Photo--}}
	<div class="form-row">
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