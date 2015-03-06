<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RockIt Dogs</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<header>
		@section('header')
			<nav>
				<div class="nav-logo">
					<span><img src="logo.png"</span>
					<span>RockItDogs</span>
				</div>
				<ul>
					<li>Home</li>
					<li>Browse</li>
					<li>About</li>
					<li>ContactUs</li>
					<li>LogIn</li>
					<li>Register</li>
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
					<img src="logo.png">
				</div>
			</footer>
		@show
</body>
</html>