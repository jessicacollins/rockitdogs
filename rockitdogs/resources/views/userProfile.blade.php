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
<<<<<<< HEAD
		<a href="/dog/add">Add Dog</a>
=======
		<a href="dog/add">Add Dog</a>
>>>>>>> 8a23151b42627df1b031a34755aa449ebc1617f4
	</div>

@stop