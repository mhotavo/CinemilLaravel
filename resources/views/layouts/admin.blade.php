<!DOCTYPE html>
<html>
<head>
	<title>@yield('titlePage', 'Default') | Penel de Administración </title>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href=" {{ asset('css/font-awesome.min.css') }} ">
	<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" style="font-size: 17px" href="{{ url('/') }}"><b>Cine</b>Mil</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Parámetros <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('sources.index') }}">Fuentes</a></li>
							<li><a href="{{ route('genders.index') }}">Géneros</a></li>
							<li><a href="{{ route('producers.index') }}">Productoras</a></li>
							<li><a href="{{ route('servers.index') }}">Servidores</a></li>
							<li><a href="{{ route('lenguages.index') }}">Idiomas</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="{{ route('users.index') }}">  Películas  <i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="{{ route('users.index') }}">  Usuarios  <i class="fa fa-user" aria-hidden="true"></i></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <b></b>  <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="miperfil">Mi Perfil</a></li>
						</ul>
					</li>

					<li>                 
						<a href="{{ url('/logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						Logout
					</a>

					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('titlePanel', 'Default')</h3>
			</div>
			<div class="panel-body">
				@include('flash::message')
				@yield('content')
			</div>
		</div>

	</div>
	<div class="col-sm-2"></div>

</div>





<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>