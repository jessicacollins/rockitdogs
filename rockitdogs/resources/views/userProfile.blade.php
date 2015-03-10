@extends('layout')

@section('main_content')
<div class="userprofile">
		<div class="user-profile-image" style="background-color:red">
			<img src="logo.jpg" >
		</div>
		<a href="">Edit Profile</a>
		<div>{{$user->first_name}}</div>
		<div>{{$user->last_name}}</div>
		<div>{{$user->email}}</div>


		<div class="dog-profile-pic" style="background-color:red">
			<img src="logo.jpg">	
		</div>
		<a href="dog/add">Add Dog</a>
	</div>

@stop