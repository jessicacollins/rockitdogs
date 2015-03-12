@extends('layout')

@section('main_content')
@foreach($dog as $d)
	<div class="community-grid">

		<div class="dog-image" style="background-image: url({{$d->url}})">
			<div>{{$d->name}}</div>
			<div class="love"></div>
		
		</div>
		
	</div>
@endforeach
@stop