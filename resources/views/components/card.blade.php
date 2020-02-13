<div class="m-auto">
	<div class="card card-flip" style="width:14rem;">
		<div class="card-front bg-light">
			<img style="height: 10rem;" src="{{ asset('storage/'.$card->photo)}}" class="card-img-top" alt="No Image">
			<div class="card-body">
				<h5 class="card-title">{{$card->name}}</h5>
				<p class="card-text">{{ Str::limit($card->description, 10,'...')}}</p>
				<p class="card-text">
					<small class="text-muted float-right">{{$card->created_at->diffForHumans()}}</small>
				</p>
			</div>
		</div>
		<div class="card-back bg-gradient-dark">
			<img style="height: 7rem;" src="{{ asset('storage/'.$card->photo)}}" class="card-img-top" alt="No Image">
			<div class="card-body">
				<h5 class="card-title">{{$card->name}}</h5>
				<p class="card-text">{{$card->description}}</p>
				<form method="POST" action="{{ route($route.'.destroy', [$route => $card->id]) }}">
					@csrf
					@method('DELETE')
					<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group m-auto">
							<a href="{{ route($route.'.edit',$card->id)}}"
							   class="btn btn-sm btn-outline-info">Edit</a>
							<button class="btn btn-sm btn-outline-info" type="submit">Delete</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
