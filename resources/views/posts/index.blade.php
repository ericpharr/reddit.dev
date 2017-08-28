@extends('layouts.master')

@section('content')
	@foreach ($posts as $post)
		<div class="container card" onclick="/show/{{ $post->id }}">
			<h3 class='card-title'><a href="{{ $post->url }}">{{ $post->title}}</a></h3>
			{{-- <a href="{{ $post->url }}">{{ $post->url }}</a> --}}
			<p> {{ $post->content }}</p>
			{{-- <p> {{ $post->created_by}}</p> --}}
		</div>
	@endforeach
	<br>
	<div class="container card text-center">
		<p class='card-text'>{!! $posts->render()!!}</p>
	</div>

@stop
