<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ActivaCuenta extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try{
            $request->validate([
                'token' => 'required'
            ]);

            $cuenta = Cuenta::where('token', $request->token)->firstOrFail();

            if($cuenta->activo === false){
                $cuenta->token = null;
                $cuenta->cantidadAnunciosPermitidos = 1;
                $cuenta->anunciosDisponibles = 1;
                $cuenta->anunciosGratisDisponibles = 1;
                $cuenta->activo = true;
                $cuenta->save();

                return redirect()->with('exito','Cuenta activada exitosamente.');
            }else{
                return redirect()->with('error','La cuenta ya se encontraba activada.');
            }
        } catch (\Throwable $th) {
            return redirect()->with('error','Error en la petición.');
        } catch (ValidationException $ve) {
            return redirect()->with('error','La cuenta ya se encontraba activada.');
        } catch (ModelNotFoundException $mnfe) {
            return redirect()->with('error','La cuenta no existe.');
        }
    }
}
