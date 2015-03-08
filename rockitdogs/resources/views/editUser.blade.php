@extends('layout')

@section('main_content')

	<div class="userprofile">
		<div class="user-profile-image" style="background-color:red">
			<img src="logo.jpg" >
		</div>
		<a href="">Edit Profile</a>
		<form action="">
		<div><label>Username<input type="text"></label></div>
		<div><label>First Name<input type="text"></label></div>
		<div><label>Last Name<input type="text"></label></div>
		<div><label>Email<input type="text"></label></div>
		<button>Submit</button>
		</form>
		<div class="dog-profile-pic" style="background-color:red">
			<img src="logo.jpg">	
		</div>
		<a href="">Add Dog</a>
	</div>

@stop