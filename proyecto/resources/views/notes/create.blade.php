
@extends('layouts.app');

@section('title')

Crear Nota

@endsection

@section('content')

	<h1>Crear Nota</h1>

	<form action="/notes" method="POST" role="form" >

		{{ csrf_field() }}
		

	<div>
		<label>Titulo</label><br>
		<input type="text" name="title" placeholder="Escriba el título">
	</div>

	<div>
		<label>Nota</label>
		<textarea name="body" class="form-control" rows="3" placeholder="Escriba el contenido"></textarea>
	</div>

	<div class="checkbox">
		<label>
			<input type="checkbox" value="1" name="important">
			Es importante
		</label>
	</div>

	<button type="submit" >Crear</button>

	</form>

@endsection