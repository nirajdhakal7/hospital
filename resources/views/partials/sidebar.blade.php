`<nav class="col-md-2 d-none d-md-block bg-light sidebar" id="sidebar">
	<div class="sidebar-sticky">
		<ul class="nav flex-column">
			@isset($menus)
				@foreach($menus as $menu)
					@if($menu->isAdminRoute)
					<li class="nav-item">
						<a class="nav-link {{ url()->full()===url($menu->url)?'active':''}}" href="{{ url($menu->url)  }}">
							<span data-feather="{{$menu->icon_class}}"></span>
							{{$menu->title}} <span class="sr-only">(current)</span>
						</a>
					</li>
					@endif
				@endforeach
			@else
{{--			@endisset--}}
				{{--Dashboard--}}
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===url('/admin')?'active':''}}" href="{{url('/admin')}}">
						<span data-feather="home"></span>
						Dashboard <span class="sr-only">(current)</span>
					</a>
				</li>
				{{--About--}}
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===route('about.index')?'active':''}}"
					   href="{{ route('about.index')}}">
						<span data-feather="alert-circle"></span>
						About <span class="sr-only"></span>
					</a>
				</li>
				
				{{--Doctors--}}
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===route('doctor.index')?'active':''}}"
					   href="{{ route('doctor.index')}}">
						<span data-feather="users"></span>
						Doctors <span class="sr-only"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===route('executive.index')?'active':''}}"
					   href="{{ route('executive.index')}}">
						<span data-feather="user"></span>
						Executive <span class="sr-only"></span>
					</a>
				</li>
				
				{{--Notice--}}
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===route('notice.index')?'active':''}}"
					   href="{{ route('notice.index')}}">
						<span data-feather="file-text"></span>
						Notice<span class="sr-only"></span>
					</a>
				</li>
				
				{{--Service--}}
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===route('service.index')?'active':''}}"
					   href="{{ route('service.index')}}">
						<span data-feather="truck"></span>
						Service<span class="sr-only"></span>
					</a>
				</li>
				
				{{--Carousel--}}
				<li class="nav-item">
					<a class="nav-link {{ url()->full()===route('carousel.index')?'active':''}}"
					   href="{{ route('carousel.index')}}">
						<span data-feather="layers"></span>
						Carousel<span class="sr-only"></span>
					</a>
				</li>
		</ul>
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>Saved reports</span>
			<a class="d-flex align-items-center text-muted" href="#">
				<span data-feather="plus-circle"></span>
			</a>
		</h6>
		<ul class="nav flex-column mb-2">
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="file-text"></span>
					Current month
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="file-text"></span>
					Last quarter
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="file-text"></span>
					Social engagement
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="file-text"></span>
					Year-end sale
				</a>
			</li>
			@endisset
		</ul>
	</div>
</nav>
