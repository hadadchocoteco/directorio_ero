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
        $estados = Estado::all();
        $tipoCuentas = TipoCuenta::all();
    }

    public function guardar(Request $request){
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
            }else{
                return redirect()->with('error','Este correo ya está registrado.');
            }
        } catch (\Throwable $th) {
            //throw $th;
        } catch (ValidationException $ve) {
            //throw $th;
        } catch (ModelNotFoundException $mnfe) {
            //throw $th;
        }
    }
}
