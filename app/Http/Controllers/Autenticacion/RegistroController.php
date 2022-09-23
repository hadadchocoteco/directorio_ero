<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use App\Models\Estado;
use App\Models\TipoCuenta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegistroController extends Controller
{
    public function index(){
        $tipoCuentas = TipoCuenta::all();
    }

    public function guardar(Request $request){
        try {
            $request->validate(
                [
                    'correo' => 'required|email',
                    'contrasena' => 'required|min:8',
                    'nombre' => 'required',
                    'apellido' => 'required',
                    'sexo' => 'required',
                    'fechaNacimiento' => 'required|date',
                    'idPais' => 'required',
                    'idEstado' => 'required',
                    'idMunicipio' => 'required',
                    'idTipoCuenta' => 'required',
                ],
                [
                    'correo.required' => 'Ingrese un correo electrónico',
                    'correo.email' => 'Ingrese un correo electrónico válido',
                    'contrasena.required' => 'Ingrese una contraseña',
                    'contrasena.min' => 'La contraseña debe tener mínimo 8 caracteres',
                    'nombre.required' => 'Ingrese su nombre',
                    'apellido.required' => 'Ingrese su apellido',
                    'sexo.required' => 'Ingrese su sexo',
                    'fechaNacimiento.required' => 'Ingrese su fecha de nacimiento',
                    'fechaNacimiento.date' => 'Ingrese una fecha válida',
                    'idPais.required' => 'Ingrese su país',
                    'idEstado.required' => 'Ingrese su estado',
                    'idMunicipio.required' => 'Ingrese su municipio',
                    'idTipoCuenta.required' => 'Seleccione un tipo de cuenta',
                ],
            );

            if(!Cuenta::where('usuario', $request->correo)->exists()){
                Cuenta::create([
                    'usuario' => $request->correo,
                    'contrasena' => Hash::make($request->contrasena),
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'sexo' => $request->sexo,
                    'fechaNacimiento' => $request->fechaNacimiento,
                    'idPais' => 1,
                    'idEstado' => $request->idEstado,
                    'idMunicipio' => $request->idMunicipio,
                    'correo' => $request->correo,
                    'telefono' => $request->telefono,
                    'fechaHoraRegistro' => date('Y-m-d H:i:s'),
                    'idTipoCuenta' => $request->idTipoCuenta,
                ]);

                return redirect(route('inicioSesion'))->with('exito','Cuenta creada exitosamente. Se te ha enviado un correo para su activación.');
            }else{
                return back()->with('error','Este correo ya está registrado.');
            }
        } catch (ValidationException $ve) {
            return back()->withErrors($ve->validator);
        } catch (\Exception $mnfe) {
            return back()->with('error','Error en la petición.');
        }
    }
}
