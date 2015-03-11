@extends('layout')

@section('main_content')

	<div class="userprofile">
		<div class="user-profile-image" style="background-color:red">
			<img src="logo.jpg" >
		</div>

		<form action="" method="POST">
		<input type="hidden" value="{{$user->user_id}}" name="user_id">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div><label>First Name:<input type="text" name="first_name" value="{{$user->first_name}}"></label></div>
		<div><label>Last Name:<input type="text" name="last_name" value="{{$user->last_name}}"></label></div>
		<div><label>Email<input type="text" name="email" value="{{$user->email}}"></label></div>
		<button>Submit</button>
		</form>

		<div class="dog-profile-pic" style="background-color:red">
			<img src="logo.jpg">	
		</div>
		<a href="">Add Dog</a>
	</div>

@stop