@extends('layout')

@section('main_content')
<div class="userprofile">
		<div class="user-profile-image" style="background-color:red">
			<img src="logo.jpg" >
		</div>

		<div>{{$user->first_name}}</div>
		<div>{{$user->last_name}}</div>
		<div>{{$user->email}}</div>
		<a href="/user/edit/{{$user->user_id}}">Edit Profile</a>

		<div class="dog-profile-pic" style="background-color:red">
			<img src="logo.jpg">	
		</div>
		<a href="/dog/add">Add Dog</a>
	</div>

@stop