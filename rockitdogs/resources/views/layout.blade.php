<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RockIt Dogs</title>
	
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/community.css">
</head>
<body>
	<header>
		@section('header')
			<nav>
				<div class="nav-logo">
					<span><a href="/"><img src="/images/logo.png"></d></span>
					<span>RockItDogs</span>
				</div>
					<ul>
					<li>Home</li>
					<li><a href="/community">Browse</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/contact">ContactUs</a></li>
					@if(Auth::guest())
					<li><a href="/auth/login">Login</a></li>
					<li><a href="/auth/register">Register</a></li>
					@else
					<li><a href="/auth/logout">Logout</a></li>
					@endif

				</ul>
			</nav>
		@show
	</header>
	<main>
		@yield('main_content')	
	</main>
		@section('footer')
			<div class="bottom">
				<button>SignUp</button> or
				<button>LogIN</button>
			</div>
			<footer>
				<ul>
					<li>Home *</li>
					<li>Browse *</li>
					<li>About *</li>
					<li>ContactUs</li>
				</ul>
				<div class="footer-logo">
					<img src="/images/logo.png">
				</div>
			</footer>
		@show
</body>
</html>
