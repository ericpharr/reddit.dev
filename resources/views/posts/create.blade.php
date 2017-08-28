@extends('layouts.master')

@section('title')
	<title>Create a Post</title>

@section('content')

	<main class="container">

		<h1>Create a new post</h1>
		<div class="container card">
			<br>
			<form action="{{ action('PostsController@store')}}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="title">Title</label>
					<input class="form-control" type="text" name="title" placeholder="Title" value="{{ old('title') }}">
				</div>
				<!-- <br> -->
				<div class="form-group">
					<label for="url">Url</label>
					<input class="form-control" type="text" name="url" placeholder="Url" value="{{ old('url') }}">
				</div>
				<!-- <br> -->
				<div class="form-group">
					<label for="content">Text</label>
					<textarea class="form-control" name="content" rows="8" cols="80" placeholder="Text">{{ old('content') }}</textarea>
				</div>
				<!-- <br> -->
				{{-- {{ method_field('PUT') }} --}}
				<button class='btn btn-primary'>Submit</button>
			</form>
		</div>

	</main>


@stop
