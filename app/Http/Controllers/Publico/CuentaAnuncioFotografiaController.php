<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CuentaAnuncioFotografiaController extends Controller
{
    public function index(){

    }

    public function nuevo(Request $request){
        try {

        } catch (\Throwable $th) {
            //throw $th;
        } catch (ValidationException $ve) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }

    public function guardar(Request $request){
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

    public function editar(Request $request, $idCuenta){
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
