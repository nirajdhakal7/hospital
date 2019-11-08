@isset($carousels)
	@if ( count($carousels)>  0)
		<!--Carousel Wrapper-->
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			<!--Indicators-->
			<ol class="carousel-indicators">
				@foreach ($carousels as $carousel)
					<li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"
					    class="{{$loop->first?'active':''}}"></li>
				@endforeach
			</ol>
			<!--/.Indicators-->
			<!--Slides-->
			<div class="carousel-inner" role="listbox">
				@foreach ($carousels as $carousel)
					<div class="carousel-item {{$loop->first?'active':''}}">
						<div class="view">
							<img class="d-block w-100 img-fluid" src="{{ asset('storage/'.$carousel->photo)}}"
							     alt="{{ $loop->index }}">
							<div class="mask rgba-black-slight"></div>
						</div>
						<div class="carousel-caption">
							<h3 class="h3-responsive">Slight mask</h3>
							<p>Third text</p>
						</div>
					</div>
				@endforeach
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	@else
	@endif
@endisset