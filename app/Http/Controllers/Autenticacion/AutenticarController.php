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
        return view('autenticacion.inicioSesion');
    }

    public function autenticar(Request $request){
        try {
            $request->validate(
                [
                    'correo' => 'required|email',
                    'contrasena' => 'required|min:8',
                ],
                [
                    'correo.required' => 'Ingrese un correo electrónico',
                    'correo.email' => 'Ingrese un correo electrónico válido',
                    'contrasena.required' => 'Ingrese una contraseña',
                    'contrasena.min' => 'La contraseña debe tener mínimo 8 caracteres',
                ],
            );

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
        } catch (ValidationException $ve) {
            return back()->withErrors($ve->validator);
        } catch (ModelNotFoundException $mnfe) {
            return back()->with('error','La cuenta no existe.');
        }
    }
}