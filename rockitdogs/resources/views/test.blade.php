<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RockIt Dogs</title>
	
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
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

		This is all users

		<table border=1 >
			<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
			</tr>
				@foreach ($users as $user)
			    	<tr>
			    		<td>{{$user->username}}</td>
			    		<td>{{$user->first_name}}</td>
			    		<td>{{$user->last_name}}</td>
			    		<td>{{$user->email}}</td>
			    	</tr>
				@endforeach
		</table>
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
