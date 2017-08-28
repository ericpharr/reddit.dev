@extends('layouts.master')


@section('content')

	<div class="container text-center">
		<h1> {{ $upper }}</h1>
		<a href="{{ action('HomeController@lowercase', array($word)) }}">make lower</a>
	</div>

@stop
