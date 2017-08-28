@extends('layouts.master')

@section('content')
	<div class="container text-center">
		<h1>{{ $lower }}</h1>
		<a href="{{ action('HomeController@uppercase', array($word)) }}">make upper</a>
	</div>
@stop
