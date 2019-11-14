<div class="col-md m-2">
	<div class="card bg-light" style="width:14rem;">
		<img style="height: 10rem;" src="{{ asset('storage/'.$card->photo)}}" class="card-img-top" alt="No Image">
		<div class="card-body">
			<h5 class="card-name">{{$card->name}}</h5>
			<p class="card-text">{{ Str::limit($card->description, 10,'')}}</p>
			<form method="POST" action="{{ route($route.'.destroy', [$route => $card->id]) }}">
				@csrf
				@method('DELETE')
				<div class="btn-toolbar mb-2 mb-md-0">
					<div class="btn-group mr-2">
						<a href="{{ route($route.'.edit',$card->id)}}"
						   class="btn btn-sm btn-outline-info">Edit</a>
						<button class="btn btn-sm btn-outline-info" type="submit">Delete</button>
					</div>
				</div>
			</form>
			<small class="float-right">{{$card->created_at->diffForHumans()}}</small>
		</div>
	</div>
</div>