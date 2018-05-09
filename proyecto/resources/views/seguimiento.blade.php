@extends('layouts.app');

@section('title')

Seguimiento

@endsection

@section('content')

<table class="table table-bordered SegTabla">

	<thead class="thead-dark">
		<select><option>Todos los estados</option></select>
		<button onclick="nuevaComision();">Nueva comisión</button>
		<tr>
			<th  scope="col">id</th>
			<th>Apellidos, Nombre</th>
			<th>Centro</th>
			<th>Fecha ALta</th>
			<th>Proyecto</th>
			<th>Estado</th>
			<th> </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>856</td>
			<td>CRISTOBO RODRIGUEZ, FRANCISCO J.</td>
			<td>Gijón</td>
			<td>09/04/2018</td>
			<td>50CORU</td>
			<td>En trámite</td>
			<td><button>Borrar</button></td>
		</tr>
	</tbody>
	<tfoot class="thead-dark">
		<tr>
			<td>Total: registros</td>
		</tr>
	</tfoot>
</table>

<div class="options">
	<ul class="list-inline">
		<li><a href="">Memoria Justificada</a></li>
		<li><a href="">Orden de Comisión</a></li>
		<li><a href="">Cuenta Justificada</a></li>
	</ul>
</div>
<div class="divTabla">
	<form id="memoriaForm" name="memoriaForm"  method="post" enctype="multipart/form-data">
	  <table class="table">
	  	<tbody>
	  		<tr>
	  			<td><label>Centro: </label><select name="listCentros"><option>Gijon</option></select></td>
	  		
	  			<td><label>Apellidos, Nombre: </label><select name="listPers"><option>Cristobo Rodriguez, Francisco J.</option></select></td>
	  		</tr>
	  	</tbody>
	  </table>

	  <table class="table table-striped table-sm">
	  	<tbody>
	  		<tr>
	  			<td><label>a)	Las funciones a ejercer que motivan la necesidad de designarle son: </label><br>
	  			<textarea></textarea>
	  			</td>
	  		</tr>
	  		<tr >
		        <td><label>b)</label>
				     <input type="checkbox" name="">
					 <label>Se adjunta convocatoria:</label>
					 <input type="file" name="">
				</td>
			</tr>
			<tr>
		     <td> 
		     	  <label>c)</label>
			      <input type="checkbox" name="">		    
		    	  <label> De no incluirse la convocatoria citada anteriormente, se indicarán las horas de inicio y finalización de las reuniones.<br/></label>
			      <label class="negrita">- No serán resarcibles las antelaciones o prolongaciones de estancia en destino, cuando no estén debidamente justificadas.</label><br> 
			      <label> Fecha y hora de Inicio:</label>		    
			      <input type="date" name="">&nbsp;
			      <label>Fecha y hora de fín:</label>&nbsp;
		          <input type="date" name="">  
			  </td>
	  		</tr>     
	  		<tr>
		     <td> 
		         <label> d)</label>
	  			 <input type="checkbox" name="">
		         <label>Se desplaza más de un funcionario.</label><br>
		         <label  class="negrita">Si se señala especificar la necesidad y relacionar los miembros de la delegación.</label><br>
		         <textarea></textarea>
		     </td>
	  		</tr>
	  		<tr>
		     <td> 
		         <label> e)</label>
	  			 <input type="checkbox" name="">
		         <label>Formando parte de la delegación oficial.</label><br>
		         <label  class="negrita">Si se señala especificar la necesidad y relacionar los miembros de la delegación.</label><br>
		         <textarea></textarea></td>
	  		</tr>
	  		<tr>
		     <td> 
		         <label> f)</label>
	  			 <input type="checkbox" name="">
		         <label>La solicitud de comisión de servicio es inferior a 10 días del inicio de la misma.</label><br>
		         <label  class="negrita">Si se señala indicar el motivo.</label><br>                   
	     		 <textarea></textarea>
     		</td>
	  		</tr> 
	  		<tr>
		     <td> 
		         <label> g)</label>
	  			 <input type="checkbox" name="">
		         <label>La solicitud a la Agencia de Viajes de emisión de los billetes es inferior a 7 días de inicio de la comision de servicios.</label><br>
		         <label  class="negrita" class="negrita">Si se señala indicar el motivo.</label><br>                 
	     		 <textarea></textarea>
     		</td>
	  		</tr> 
	  		<tr>
		     <td> 
		         <label> h)</label>
	  			 <input type="checkbox" name="">
		         <label>La clase de avión/tren es diferente a turista con restricciones.</label><br>
		         <label class="negrita">Si se señala, indicar la necesidad aportando Certificado de Agencia de Viajes.</label> <br>
		         <input type="file" name="">                  
	     	</td>
	  		</tr>
	  		<tr>
		     <td> 
		         <label > i)</label>
	  			 <input type="checkbox" name="">
		         <label>Uso de vehículo particular o agencia de alquiler.</label><br>
		         <input type="checkbox" name="">
		         <label>1.- Si no existe alternativa de transporte público o existen otros motivos.</label><label  class="negrita"> Si se señala, indicar el motivo.</label><br>
		         <textarea></textarea><br>
		         <input type="checkbox" name="">
		         <label>2.- Que resulte más económico que el transporte público.</label><label  class="negrita">Si se señala, aportar certificado de la Agencia de viaje.</label> <br>
		         <input type="file" name="">                    
	     	</td>
	  		</tr>
	  		<tr>
	  			<td> 
		         <label> j)</label>
	  			 <input type="checkbox" name="">
		         <label>Utilización de otro taxi de destino: </label><label  class="negrita">Si se señala justificar la necesidad.</label><br>
		         <textarea></textarea>
		    	 </td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<label> k)</label>
	  				<input type="checkbox" name="">
		         	<label>Utilización de aparcamiento en estaciones/aereopuertos cuando la comisión es superior a 24 horas.</label><br>
		         	<label  class="negrita"> Si se señala, aportar escrito del interesado manifestando que es más económico que la opción del taxi.</label> <br>
		         	<input type="file" name="">                    
	     	</td>
	  		</tr>
	  		<tr>
	  			<td> 
		         <label> l)</label>
	  			 <input type="checkbox" name="">
		         <label>El inicio y finalización de las funciones a realizar no coinciden con el inicio y finalización de la comisión de servicio.</label><br><label class="negrita">	Si se señala, indicar el motivo.</label><br>
		         <textarea></textarea>
		    	 </td>
	  		</tr>
	  		<tr>
	  			<td>
	  				<label> m)</label>
	  				<input type="checkbox" name="">
		         	<label>Utilización de hoteles diferentes a los que ofrece la Agencia de Viajes contratada por el Ministerio. </label><br>
		         	<label  class="negrita">Si se señala, aportar Certificado de la Agencia de Viajes</label><br>
		         	<input type="file" name="">                    
	     	</td>
	  		</tr>
	  		<tr>
	  			<td> 
		         <label> n)</label>
	  			 <input type="checkbox" name="">
		         <label>Invitaciones, comidas o cenas financiadas por organizaciones convocantes y aquellas incluidas en billetes de locomocion.</label><br><label  class="negrita"> Si se señala, detallar.</label><br>
		         <textarea></textarea>
		    	 </td>
	  		</tr>
	  		<tr>
  			<td>
  				<label>o) Datos Adicionales</label><br>
  				<div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Proyecto</label>
				    <div class="col-sm-6">
				    	<select ><option>nombreProyecto</option></select>
				    </div>
				  </div>
				  <div class="form-group row">
				      <label class="col-sm-3 col-form-label">Comisión Internacional:</label>
				      <div class="col-sm-6">
				        <div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label" for="inlineCheckbox1">SI</label>
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label" for="inlineCheckbox2">NO</label>
						</div>
				      </div>
				  </div>
				  <div class="form-group row">
				      <label class="col-sm-3 col-form-label">Financiación Externa:</label>
				      <div class="col-sm-6">
				        <div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label" for="inlineCheckbox1">SI</label>
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label" for="inlineCheckbox2">NO</label>
						</div>
				      </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Principal organismo financiador:</label>
				    <div class="col-sm-6">
				    	<select ><option>organismo</option></select>
				    </div>
				  </div>
				  <div class="form-group row">
				      <label class="col-sm-3 col-form-label">Campaña:</label>
				      <div class="col-sm-6">
				        <div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label" for="inlineCheckbox1">SI</label>
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label" for="inlineCheckbox2">NO</label>
						</div>
				      </div>
				  </div>
				  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Acrónimo Campaña:</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>
				  
				      </div>
				  <div class="form-group row">
				      <label class="col-sm-3 col-form-label">Jefe Campaña:</label>
				      <div class="col-sm-6">
				        <div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label" for="inlineCheckbox1">SI</label>
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label" for="inlineCheckbox2">NO</label>
						</div>
				      </div>
				  </div>
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-3 col-form-label">Principal organismo financiador:</label>
				    <div class="col-sm-6">
				    	<select ><option>organismo</option></select>
				    </div>
				</div>
				    <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Nombre del Barco:</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>
  				
  			</td>		
	  		</tr>
	  		<tr>
	  			<td>
	  				<label>p) Presupuesto</label><br>
	  				<div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Trasporte:</label>
					    <div class="col-sm-2">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Alojamiento:</label>
					    <div class="col-sm-2">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Manutención:</label>
					    <div class="col-sm-2">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Productividad Adicional:</label>
					    <div class="col-sm-2">
					      <input type="text"number" class="form-control" id="inputEmail3">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Gastos:</label>
					    <div class="col-sm-2">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-3 col-form-label">Total:</label>
					    <div class="col-sm-2">
					      <input type="text" class="form-control" id="inputEmail3">
					    </div>
					  </div>

	  			</td>
	  		</tr>
	  		<tr>		     
		    <td>
		    <div class="trans text-center">
		      <button type="submit" class="btn btn-primary" name="Cancelar" id="Cancelar">Cancelar</button>	
		      <button type="submit" class="btn btn-outline-primary" name="Cancelar" id="Cancelar">Aceptar</button>		 
		  	</div>         
		    </td>
		 </tr>	
	  	</tbody>
	  </table>
	</form>
</div>

@endsection