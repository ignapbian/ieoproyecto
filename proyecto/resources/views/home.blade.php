@extends('layouts.app')
<?php 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$hora= date('H:i')." hr";
$fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>
@section('content')

    <div class="clearfix">
    <div class="center-block">
        <div class="caja">
            <h2><b>Bienvenido {{ Auth::user()->name }},<br>
        Son las {{ $hora }}  <br>{{ $fecha }}</b></h2>
        </div>
        
    </div>
</div>
@endsection
