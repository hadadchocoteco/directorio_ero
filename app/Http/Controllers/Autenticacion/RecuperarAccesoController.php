<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class RecuperarAccesoController extends Controller
{
    public function index(){

    }

    public function recuperar(Request $request){
        try{
            $token = Str::random(50);
            $request->validate(
                [
                    'correo' => 'required|email'
                ],
                [
                    'correo.required' => 'Ingrese un correo electrónico',
                    'correo.email' => 'Ingrese un correo electrónico válido',
                ]
            );

            $cuenta = Cuenta::where('usuario', $request->correo)->firstOrFail();
            $cuenta->token = $token;
            $cuenta->save();

            return redirect(route('inicioSesion'))->with('exito', 'Se te ha enviado un correo de recuperación, favor de revisarlo.');
        } catch (ValidationException $ve) {
            return back()->withErrors($ve->validator);
        } catch (ModelNotFoundException $mnfe) {
            return redirect(route('inicioSesion'))->with('error','La cuenta no existe.');
        }
    }
}
