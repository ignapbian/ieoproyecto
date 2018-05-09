<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aprobacion extends Model
{
	protected $fillable = ['id','memoria','comision','proponente','Validado_pro','fecha_pro','Validado_sd','fecha_sd','autorizado','Validado_aut','fecha_aut'];

   

}