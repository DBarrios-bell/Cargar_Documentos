<nav class="navbar navbar-light navbar-expand-lg shadow-sm" style="background-color: #0F1F40;" >
	<div class="container">
		<a class="navbar navbar-light" href="{{ route('home')}}" style="font-size: 25px; color:white; text-decoration: none;">
			<img src="imagen/bg_4.png">
		</a>

@include('partials.buttondesplegable')
		<div class="collapse navbar-collapse col-lg-7" id="navbarSupportedContent">
			<ul class="nav nav-pills">
		<!--activa el link donde estas ubicado ----  el @ lang es para traducir el contenido -->
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href=" {{ route('home') }}">
					@lang('Home')</a>
				</li>
				<li class=" nav-item">
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">
					@lang('About')</a>
				</li>
				<li class=" nav-item">
					<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">
					@lang('Proveedores')</a>
				</li>
				<li class=" nav-item">
						<a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">
					@lang('Contact')</a>
				</li>
			@guest <!-- tambien podemos usar @ auth pero se cambian las opciones  Logout quedaria arriba-->
				<li>
					<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
					@lang('Login')</a>
				</li>
			@else
				<li class="nav-item" >
					<a class="nav-link"
						href="#"
						onclick="event.preventDefault();
                	 	document.getElementById('logout-form').submit();"
            	    >@lang('Logout')</a>
        	    </li>
        	    <li>
					<a class="nav-link {{ setActive('register') }}" href="{{ route('register') }}">
					@lang('Register')</a>
				</li>
			@endguest

			</ul>
		</div>
	</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>
