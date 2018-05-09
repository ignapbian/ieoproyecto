<?php

namespace App\Http\Controllers;

use App\aprobacion;
use Illuminate\Http\Request;

class AprobacionController extends Controller
{
    public function index(){
    	$aproba = aprobacion::all();
    	return view('autorizaciones.index', ['aproba' => $aproba]);
    }
}
