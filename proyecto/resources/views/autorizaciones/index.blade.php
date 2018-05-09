
@extends('layouts.app');
@extends('layouts.modal');

@section('title')

Aprobación

@endsection

@section('content')

	<table id="tablaAut" class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Memoria</th>
      <th scope="col">Comisión</th>
      <th scope="col">Proponente</th>
      <th scope="col">Validado Pro.</th>
      <th scope="col">Fecha</th>
      <th scope="col">Validado S.D.</th>
      <th scope="col">Fecha</th>
      <th scope="col">Autorizado</th>
      <th scope="col">Validado Aut.</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($aproba as $aprob)
      <tr>
      	 <td id="id"> {{ $aprob->id }}</td>
   		<td> {{ $aprob->memoria }} </td>
		<td> {{ $aprob->comision }} </td> 
		<td id="nomProp"> {{ $aprob->proponente }} </td>
		<td> {{ $aprob->Validado_pro }} </td>
		<td> {{ $aprob->fecha_pro }} </td>
		<td> {{ $aprob->Validado_sd }} </td>
		<td> {{ $aprob->fecha_sd }} </td>
		<td> {{ $aprob->autorizado }} </td>
		<td> {{ $aprob->Validado_aut }} </td>
		<td> {{ $aprob->fecha_aut }} </td>      
          
      </tr>
    @endforeach
  </tbody>
</table>

<table id="tablaFirm" class="table">
	<thead>
		<tr>
			<th >Id comisión</th>
			<th >Firmante</th>
		</tr>
	</thead>
	<tbody>
		<tr class="selected">
			<td id="idFirm"> </td>
			<td id="nombreFirm"></td>
			<td><button id="botonFirmar" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Firmar</button></td>
		</tr>
	</tbody>
	
</table>



@endsection