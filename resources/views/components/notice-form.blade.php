@isset($method)

<form action="{{ route($route.'.update',[$route=>$notice->id]) }}" method="POST" enctype="multipart/form-data">
	@else
	
<form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data">
	@endisset
	
	@csrf
	
	<!-- Title -->
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Title</label>
			<input type="text" class="form-control {{ $errors->first('title')?'is-invalid':'' }}"
			       value="{{ old('title')??$notice->title}}" name="title" id="inputCaption"
			       placeholder="Title">
			@if($errors->first('title'))
				<div class="invalid-feedback">
					{{$errors->first('title')}}
				</div>
			@endisset
		</div>
	</div>
	
	<!-- Description-->
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCaption">Description</label>
			<textarea class="textarea form-control {{ $errors->first('description')?'is-invalid':'' }}"
			          name="description" id="inputCaption" placeholder="Description" >
				{{ old('description')??$notice->description??"Type your<b><u> Description here</b></u>"}}
			</textarea>
			@if($errors->first('description'))
				<div class="invalid-feedback">
					{{$errors->first('description')}}
				</div>
			@endisset
		</div>
	</div>
	
	<!-- Attachment-->
	<div class="form-row">
		<div class="form-group col-md-12">
			<div class="custom-file">
				<input type="file" class="custom-file-input {{ $errors->first('attachment')?'is-invalid':''}}"
				       value=" {{ old('attachment')}}" name="attachment"
				       id="validatedCustomFile">
				<label class="custom-file-label"
				       for="validatedCustomFile">Choose file...</label>
				@if($errors->first('attachment'))
					<div class="invalid-feedback">{{$errors->first('attachment')}}</div>
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