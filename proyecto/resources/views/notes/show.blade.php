

@extends('layouts.app');

@section('title')

Notas

@endsection

@section('content')

	<h1>{{ $note->title }}</h1>
	<p>{{ $note->body }}</p>

@endsection