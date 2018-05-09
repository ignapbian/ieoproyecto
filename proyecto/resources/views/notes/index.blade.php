
@extends('layouts.app');

@section('title')

Notas

@endsection

@section('content')

	<ul>
		@foreach ($notes as $note)
			<li>
				<a href="/notes/{{ $note->id }}">
					{{ $note->title }} 

					@if($note->isImportant())
					*
					@endif
				</a>
				
			</li>
		@endforeach
	</ul>
@endsection