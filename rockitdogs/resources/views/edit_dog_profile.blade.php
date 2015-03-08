@extends('layout')

@section('main_content')
		<h1>Here you can edit your dog's profile</h1>
		<form action="/dogprofile">
			Dog Name:<input type="text">
			Tagline:<input type="text">
			Birthday:<input type="text">
			Breed:<input type="text">
			Gender:<input type="text">
			Weight:<input type="text">
			Tempermant:<input type="text">
			License ID:<input type="text">
			<button>Submit</button>
		</form>
	</main>
@stop