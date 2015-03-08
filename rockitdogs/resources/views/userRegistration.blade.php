@extends('layout')

@section('main_content')
<p>Already have an account? <a href="signIn.html">signIn</a></p>
	<form action="">
		<div>
			<label>First Name: <input type="text" name="first_name"></label>
		</div>
		<div>
			<label>Last Name: <input type="text" name="last_name"></label>
		</div>
		<div>
			<label>Email Address: <input type="text" name="email"></label>
		</div>
		<div>
			<label>User Name: <input type="text" name="user"></label>
		</div>
		<div>
		<label>Password: <input type="text" name="password"></label>
		</div>
		<button>Create Account</button>
	</form>
@stop

