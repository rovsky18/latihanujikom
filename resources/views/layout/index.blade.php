<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="header">
		<h1 class="nav-link">UJICOBA UJIKOM</h1>
	<div class="navbar narbar-expand-lg navbar-dark bg-dark">
		<nav class="navbar-nav">
			<nav class="collaps navbar-collaps">
		<a class="nav-link" href="{{ url('/') }}">Home</a>
		<a class="nav-link" href="{{ url('dosen') }}">Dosen</a>
		<a class="nav-link" href="{{ url('jadwal') }}">Jadwal</a>
		</nav>
		</nav>
	</div>
	</div>
	<div class="content">
		@yield('content')
	</div>
</body>
</html>