<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use App\Models\CuentaRango;
use App\Models\Estado;
use App\Models\Pais;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CuentaAnuncioController extends Controller
{
    public function index(){

    }

    public function nuevo(Request $request){
        try {
            $paises = Pais::all();
            $estados = Estado::all();
            $servicios = Servicio::all();
            $cuentaRangos = CuentaRango::all();
            $cuenta = Cuenta::findOrFail(session('ERO_ID_USUARIO'));


        } catch (\Throwable $th) {
            return redirect()->with('error','Error en la petición.');
        } catch (ModelNotFoundException $mnfe) {
            return redirect()->with('error','La cuenta inicial no existe.');
        }
    }

    public function guardar(Request $request){
        try {

        } catch (\Throwable $th) {
            return redirect()->with('error','Error en la petición.');
        } catch (ModelNotFoundException $mnfe) {
            return redirect()->with('error','La cuenta inicial no existe.');
        }
    }

    public function editar(Request $request, $idCuenta){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }

    public function actualizar(Request $request, $idCuenta){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }

    public function inactivar(Request $request, $idCuenta){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }
}
