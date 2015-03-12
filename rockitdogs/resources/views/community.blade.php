@extends('layout')

@section('main_content')
	<div class="community-grid">
@foreach($dog as $d)

		<div class="dog-image" style="background-image: url({{$d->url}})">
			<div>{{$d->name}}</div>
			<div class="love"></div>
		
		</div>
		
@endforeach
	</div>
@stop