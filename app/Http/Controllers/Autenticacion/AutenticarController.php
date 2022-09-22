<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AutenticarController extends Controller
{
    public function inicioSesion(){

    }

    public function autenticar(Request $request){
        try {
            $request->validate([
                'contrasena' => 'required|min:8',
                'usuario' => 'required',
            ]);

            $cuenta = Cuenta::where('usuario', $request->usuario)->firstOrFail();

            if($cuenta->activo === false){
                return redirect()->with('error', 'Cuenta no activa. Se te ha enviado un correo de activación.');
            }

            if(!Hash::check($request->contrasena, $cuenta->contrasena)){
                return redirect()->with('error', 'Cuenta no activa. Se te ha enviado un correo de activación.');
            }

            session([
                'ERO_ID_USUARIO' => $cuenta->id,
                'ERO_NOMBRE' => $cuenta->nombre,
                'ERO_APELLIDO' => $cuenta->apellido,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        } catch (ValidationException $th) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }
}
