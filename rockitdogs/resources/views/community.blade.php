@extends('layout')

@section('main_content')
	<div class="community-grid">
@foreach($dog as $d)

		<div class="dog-image" style="background-image: url({{$d->url}})" data-image-id="{{$d->image_id}}">
			<div>{{$d->name}}</div>
			<div class="love">{{$d->getImageLoveCount($d->image_id)}}</div>
		
		</div>
		
@endforeach
	</div>
@stop