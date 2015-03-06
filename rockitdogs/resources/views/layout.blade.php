

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RockIt Dogs</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<nav>
		<div class="nav-logo">
			<span><img src="/images/logo.png"</span>
			<span>RockItDogs</span>
		</div>
		<ul>
			<li>Home</li>
			<li>Browse</li>
			<li>About</li>
			<li>ContactUs</li>
			@if(Auth::guest())
			<li><a href="/auth/login">Login</a></li>
			<li><a href="/auth/register">Register</a></li>
			@else
			<li><a href="/auth/logout">Logout</a></li>
			@endif

		</ul>
	</nav>
	<main>
		<h1>Meet rockIT Dogs</h1>
		<p>love your life, love your dogs<p>	
		@yield('content')
	</main>
	<div class="submain">
		<h1>Give Love EryDay</h1>
		<button>Love</button>
		<div>
			<img src="/images/logo.png">
		</div>
	</div>
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
	</footer>
</body>
</html>

