<?php

namespace App\Http\Controllers;

use App\Note;
use App\aprobacion;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
   public function aprobacion(Request $request){
   	 aprobacion::create(request()->all());

      return redirect('/aprobacion');  
   }
   public function seguimiento(){
      return view('seguimiento');
   }
   public function liquidacion(){
      return view('liquidacion');
   }
   public function NuevaComision(){
      return view('NuevaComision');
   }

   public function perfil(){
   	return 'perfil';
   }
   public function reporte(){
   	return 'reporte';
   }

   public function create(){
   	return view('notes.create');
   }

   public function store(Request $request){

   Note::create(request()->all());

   /*	$note = new Note;
   	$note->title = request()->title;
	$note->body = request()->body;
	$note->important = is_null(request()->important) ? 0 : 1;
	$note-> save();*/

   	return redirect('/home');  

   }
}
