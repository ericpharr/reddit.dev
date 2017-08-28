@extends('layouts.master')

@section('content')
	<div class="container text-center">
		<h1>{{ $incremented }}</h1>
		<a href="{{ action('HomeController@increment', array($incremented)) }}">Increment</a>
	</div>

@stop
