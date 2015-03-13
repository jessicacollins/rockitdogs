@extends('layout')

@section('main_content')
	<div class="community-grid">
@foreach($dog as $d)
		<a href="/dogprofile/{{$d->image_id}}">
			<div class="dog-image" style="background-image: url({{$d->url}})" data-image-id="{{$d->image_id}}">
				<div class="dog-name">{{$d->name}}</div>
				<div class="love">{{$d->getImageLoveCount($d->image_id)}}</div>
			
			</div>
		</a>

@endforeach
	</div>
@stop