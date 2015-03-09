@extends('layout')

@section('main_content')

<p>Welcome {{$user->first_name}}


	<div>{{$user->first_name}}</div>
	<div>{{$user->last_name}}</div>
	<div>{{$user->email}}</div>

<a href="">Add Dog</a>

@stop