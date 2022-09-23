<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicoController extends Controller
{
    public function index(){
        return view('sitio.inicio');
    }

    public function busqueda(Request $request, $servicio = null){

    }
}
