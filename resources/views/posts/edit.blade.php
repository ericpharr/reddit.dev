@extends('layouts.master')

@section('title')
	<title>Edit Post</title>

@section('content')

	<main class="container">

		<h1>Edit post</h1>
		<div class="container card">
			<br>
			<form class='' action="{{ action('PostsController@update')}}" method="POST">
				{!! csrf_field() !!}
				<input class="form-control" type="text" name="title" placeholder="Title" value="{{ old('title') }}">
				<br>
				<input class="form-control" type="text" name="url" placeholder="Url" value="{{ old('url') }}">
				<br>
				<textarea class="form-control" name="content" rows="8" cols="80" placeholder="Text">{{ old('content') }}</textarea>
				<br>
				{{ method_field('PUT') }}
				<input type="submit" class='btn btn-primary'>
				{{-- <button class="btn btn-primary">Submit</button> --}}
			</form>

			<form class="" action="{{ action('PostsController@destroy') }}" method="delete">
				{!! csrf_field() !!}
				<button class="btn btn-danger" name="delete">Delete Post</button>
				{{ method_field('DELETE') }}
			</form>
		</div>

	</main>


@stop
