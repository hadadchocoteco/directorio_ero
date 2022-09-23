<?php

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class CuentaController extends Controller
{
    public function index(){
        return view('sitio.cuenta.index');
    }

    public function actualizar(Request $request, $idCuenta){
        try {
            $request->validate([
                'contrasena' => 'required|min:8',
                'nombre' => 'required',
                'apellido' => 'required',
                'sexo' => 'required',
                'fechaNacimiento' => 'required|date',
                'idEstado' => 'required',
                'idMunicipio' => 'required',
                'correo' => 'required|email',
                'idTipoCuenta' => 'required',
            ]);

            $cuenta = Cuenta::findOrFail($idCuenta);

            if($request->has('contrasena')){
                if($request->filled('contrasena')){
                    $cuenta->contrasena = Hash::make($request->contrasena);
                }
            }else{
                $cuenta->nombre = $request->nombre;
                $cuenta->apellido = $request->apellido;
                $cuenta->sexo = $request->sexo;
                $cuenta->fechaNacimiento = $request->fechaNacimiento;
                $cuenta->idPais = $request->idPais;
                $cuenta->idEstado = $request->idEstado;
                $cuenta->idMunicipio = $request->idMunicipio;
                $cuenta->telefono = $request->telefono;
            }

            $cuenta->save();
        } catch (\Throwable $th) {
            return redirect()->with('error','Error en la petición.');
        } catch (ModelNotFoundException $mnfe) {
            return redirect()->with('error','La cuenta no existe.');
        }
    }

    public function inactivar(Request $request, $idCuenta){
        try {
            $cuenta = Cuenta::findOrFail($idCuenta);
            $cuenta->activo = false;
            $cuenta->save();
        } catch (\Throwable $th) {
            return redirect()->with('error','Error en la petición.');
        } catch (ModelNotFoundException $mnfe) {
            return redirect()->with('error','La cuenta no existe.');
        }
    }
}
