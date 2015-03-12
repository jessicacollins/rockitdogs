@extends('layout')

@section('main_content')
<div class="userprofile">
		<div class="user-profile-image" style="background-color:red">
			<img src="" >
		</div>
		<div class="user-data">
			<div>{{$user->first_name}}</div>
			<div>{{$user->last_name}}</div>
			<div>{{$user->email}}</div>
		</div>
		<a href="/user/edit/{{$user->user_id}}">Edit Profile</a>

		
		<a href="/dog/add">Add Dog</a>
		<div class="dog-image-wrapper">
			@foreach($dogs as $dog)

				<a href="/dogprofile/{{$dog->id}}">
				<div class="dog-profile-image"  style="background-image: url({{$dog->url}})">
						<div class="dog-name">{{$dog->name}}</div>
						
					</div>
						
					<div class="love-btn"></div>
				<!-- 	<div class="comment-thread"></div> -->
				
				</a>


			@endforeach
		</div>

	</div>

@stop