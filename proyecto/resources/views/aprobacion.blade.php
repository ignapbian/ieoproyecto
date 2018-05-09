

@extends('layouts.app');

@section('title')

Aprobación

@endsection

@section('content')

	<table class="table table-bordered">
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
      <li>
        {{ $aprob->id }}
        {{ $aprob->proponente }} 
          
        </a>
        
      </li>
    @endforeach
  
    <tr>
      <th scope="row">1</th>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
      <td>prueba</td>
    </tr>
    
  </tbody>
</table>



@endsection