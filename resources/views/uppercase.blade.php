@extends('layouts.master')


@section('content')

	<div class="container text-center">
		<h1>You entered: {{ $word }}</h1>
		<h1>Uppercased: {{ $upper }}</h1>
	</div>

@stop
