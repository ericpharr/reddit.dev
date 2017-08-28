@extends('layouts.master')

@section('content')
	<div class="container card">
		<h3 class='card-title'>{{ $post->title}}</h3>
		<a href="{{ $post->url }}">{{ $post->url }}</a>
		<p> {{ $post->content }}</p>
	</div>
@stop
