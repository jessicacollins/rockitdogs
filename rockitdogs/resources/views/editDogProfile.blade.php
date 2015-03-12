@extends('layout')

@section('main_content')
		<h1>Here you can edit your dog's profile</h1>
		<div class="profile">
			<form action="" method="POST">
				<input type="hidden" value="{{$dog->dog_id}}" name="dog_id">
				<input type="hidden" value="{{$dog->user_id}}" name="user_id">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div>Dog Name:<input type="text" name="name" value="{{$dog->name}}"></div>
				<div>Tagline:<input type="text" name="tagline" value="{{$dog->tagline}}"></div>
				<div>Birthday:<input type="text" name="birthday" value="{{$dog->birthday}}"></div>
				<div>Breed:<input type="text" name="breed" value="{{$dog->breed}}"></div>
				<div>Gender:<input type="text" name="gender" value="{{$dog->gender}}"></div>
				<div>Weight:<input type="text" name="weight" value="{{$dog->weight}}"></div>
				<div>Temperment:<input type="text" name="temperament" value="{{$dog->temperament}}"></div>
				<div>License ID:<input type="text" name="license_id" value="{{$dog->license_id}}"></div>
				<button>Submit</button>
			</form>
		</div>
	</main>
@stop