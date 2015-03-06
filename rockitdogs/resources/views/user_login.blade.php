@extends('layout')

@section('header')
@endsection

@section('main_content')
<div>
	<h1>Sign In</h1>
	<form action="">
		<div>
			<label>Username: <input type="text" name="user"></label>
		</div>
		<div>
			<label>Password: <input type="text" name="password"></label>
		</div>
		<button>Log In</button>
	</form>
</div>
@endsection

@section('footer')
@endsection