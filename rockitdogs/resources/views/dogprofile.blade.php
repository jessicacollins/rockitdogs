
@extends('layout')

@section('main_content')
	<div class="header">
		
		<h1>Welcome To Your Dog's Profile Page</h1>
		<p>This page contains all the info about your dog as well as all of it's adorable photos!<p>
	</div>
	<div class="profile">
		<div class="dogprofilepicture">
			<img src="" alt="">
		</div>
		<img src="" alt="">
		<h3>Here is all of your dog's info</h3>
		<div>{{$dog->name}}</div>
		<div>{{$dog->tagline}}</div>
		<div>{{$dog->birthday}}</div>
		<div>{{$dog->breed}}</div>
		<div>{{$dog->gender}}</div>
		<div>{{$dog->weight}}</div>
		<div>{{$dog->temperament}}</div>
		<div>{{$dog->license_id}}</div>
	</div>
	<a href="/dog/edit/{{$dog->dog_id}}">Edit</a>
@stop

