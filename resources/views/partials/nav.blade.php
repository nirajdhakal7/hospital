<header>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<nav class="navbar navbar-expand-xl fixed-top special-color-dark navbar-dark mh-nav">
		<a class="mh-nav-brand" href="#"><strong>Morang Hospital</strong></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav m-auto text-capitalize">
				<li class="nav-item {{ url()->full()===url('/')?'active':''}}">
					<a class="nav-link" href="{{ url('/') }}">
						Home
						@if( url()->full()===url('/'))
							<span class="sr-only">(current)</span>
						@endif
					</a>
				</li>
				<li class="nav-item dropdown {{ url()->full()===url('/service')?'active':''}}">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						About Us
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{ url('/service') }}">
							What We Do?
							@if( url()->full()===url('/service'))
								<span class="sr-only">(current)</span>
							@endif
						</a>
						<a class="dropdown-item" href="{{ url('/service') }}">
							Our Services
							@if( url()->full()===url('/service'))
								<span class="sr-only">(current)</span>
							@endif
						</a>
						<a class="dropdown-item " href="{{ url('/executive') }}">
							Our Executive Team
							@if( url()->full()===url('/executive'))
								<span class="sr-only">(current)</span>
							@endif
						</a>
					</div>
				</li>
				<li class="nav-item {{ url()->full()===url('/notice')?'active':''}}">
					<a class="nav-link" href="{{ url('/notice') }}">
						Notice
						@if( url()->full()===url('/notice'))
							<span class="sr-only">(current)</span>
						@endif
					</a>
				</li>
				<li class="nav-item {{ url()->full()===url('/contact')?'active':''}}">
					<a class="nav-link" href="{{ url('/contact') }}">
						Contact Us
						@if( url()->full()===url('/contact'))
							<span class="sr-only">(current)</span>
						@endif
					</a>
				</li>
			</ul>
			<ul class="navbar-nav mh-nav-social">
				<li class="nav-item">
					<a target="_blank" href="https://www.facebook.com/Morang-Hospital-PvtLtd-1494147337522706/"
					   class="nav-link">
						<span class="navbar-text white-text">
							<i class="fab fa-facebook-square"></i> Facebook
						</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<span class="navbar-text white-text">
						    <label>For appointment</label>
							<i class="fas fa-phone"></i> 021-555343
						</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>