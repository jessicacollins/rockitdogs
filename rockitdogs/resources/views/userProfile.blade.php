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
		@foreach($dogs as $dog)
			<div class="dog-image">
				<div class="profile-image">
					<div class="dog-name">{{$dog->name}}</div>
					
				</div>
					
				<div class="love"></div>
			<!-- 	<div class="comment-thread"></div> -->
			</div>


		@endforeach


	</div>

@stop