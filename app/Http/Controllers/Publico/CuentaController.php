<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CuentaController extends Controller
{
    public function index(){

    }

    public function actualizar(Request $request, $idCuenta){
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        } catch (ValidationException $ve) {
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
        } catch (ValidationException $ve) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }
}
