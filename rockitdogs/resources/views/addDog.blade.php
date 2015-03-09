@extends('layout')

@section('main_content')

	<main>
		<h1>Create Your Dog Profile</h1>
		<p>Please fill out the form below<p>
		<p>Already have a dog? Click <a>here!</a> </p>

		<form action="/dog/add" method="POST">
			<input type="hidden" value="{{$user_id}}" name="user_id">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			Dog Name<input type="text" name="name"><br>
			Tagline<input type="text"><br>
			Birthday<input type="text"><br>	
			Breed<input type="text"><br>
			Gender<input type="text"><br>
			Weight<input type="text"><br>
			Tempermant<input type="text"><br>
			License ID<input type="text"><br>
			<button>Make My Dog!</button>
		</form>	
	</main>

@stop