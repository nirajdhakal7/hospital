<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ url('admin')}}">Morang Hospital</a>
	<div class="container px-1">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="{{ route('executive.index') }}">Executive <span
								class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('about.index')}}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('notice.index')}}">Notice</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('doctor.index')}}">Doctor</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('service.index')}}">Service</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('carousel.index')}}">Carousel</a>
				</li>
			</ul>
		</div>
		<a class="p-2 badge badge-pill badge-dark mr-1" href="{{ route('logout') }}"  data-toggle="tooltip" data-placement="bottom" title="Log Out"
		   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<strong class="text-white"><span data-feather="power"></span></strong>
		</a>
		<a class="p-2 badge badge-pill badge-dark  mr-4" href="#"  data-toggle="tooltip" data-placement="bottom" title="Settings">
			<strong class="text-white"><span data-feather="settings"></span></strong>
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
	</div>
</nav>

{{--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">--}}
{{--	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>--}}
{{--	<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
{{--	<ul class="navbar-nav px-3">--}}
{{--		<li class="nav-item text-nowrap">--}}
{{--			<a class="nav-link" href="#">Sign out</a>--}}
{{--		</li>--}}
{{--	</ul>--}}
{{--</nav>--}}