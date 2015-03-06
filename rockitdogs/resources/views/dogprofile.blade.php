@extends('layout')

@section('header')

@endsection

@section('main_content')
	<div class="header">
		<a href="/editdogprofile">Edit</a>
		<h1>Welcome To Your Dog's Profile Page</h1>
		<p>This page contains all the info about your dog as well as all of it's adorable photos!<p>
	</div>
	<div class="profile">
		<div class="dogprofilepicture">
			<img src="" alt="">
		</div>
		<img src="" alt="">
		<h3>Here is all of your dog's info</h3>
		<div>Sir Charles</div>
		<div>"I am the classiest dog you will ever meet"</div>
		<div>2012/03/02</div>
		<div>Pug</div>
		<div>Male</div>
		<div>20 llbs</div>
		<div>Swagtastic</div>
		<div>827689</div>
	</div>
@endsection

@section('footer')
@endsection