@extends('layout')

@section('header')

@endsection

@section('content')
	<main>
		<div class="head">
			<h1>Welcome to the vet page!</h1>
			<p>This page is personalized for each vet</p>
		</div>
		<div class="vetprofile">
			<h3>Billy Bob PHD</h3>
			<div>Addres: 2222 Billy Bob Place San Antonio Texas</div>
			<div>Contact #: 212-877-9109</div>
			<div>Business Name: WeLikeCake</div>
		</div>
	</main>
	<div class="bottom">
		<button>SignUp</button> or
		<button>LogIN</button>
	</div>
@endsection



@section('footer')
@endsection