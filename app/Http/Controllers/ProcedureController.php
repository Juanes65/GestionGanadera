<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\inventory;
use App\Models\procedure;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProcedureController extends Controller
{
    public function index()
    {
        $procedure = procedure::with(['inventory', 'animal', 'users'])->get();

        $insumos = inventory::all();
        $animales = animal::all();
        $usuarios = User::all();

        return view('Procediminetos.index', compact('procedure','insumos','animales','usuarios'));
    }

    public function validarFecha($id)
    {
        $fecha_insumo = inventory::select("fechaVencimiento")->where("id", $id)->first();

        // Verifica si la cita es null
        if ($fecha_insumo == null) {
            return true; // Si no existe, retorna true
        }

        // Obtén la fecha de vencimiento
        $fechaVencimiento = Carbon::parse($fecha_insumo->fechaVencimiento);

        // Compara con la fecha actual
        if ($fechaVencimiento->isPast()) {
            return false; // La fecha de vencimiento ya pasó
        }

        return true; // La fecha de vencimiento es válida
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreProcedimiento' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'id_inventario' => 'required',
            'id_animal' => 'required',
            'id_usuario' => 'required'
        ]);

        $input = $request->all();

        // Obtener la cantidad actual del inventario
        $inventario = inventory::select("cantidad")->where("id", $input['id_inventario'])->first();

        if ($inventario === null) {
            return redirect()->route('index.procedimiento')->with('danger', 'Inventario no encontrado.');
        }

        // Validar la fecha de vencimiento
        if ($this->validarFecha($input["id_inventario"])) {
            $procedure = new Procedure();
            $procedure->nombreProcedimiento = $request->nombreProcedimiento;
            $procedure->descripcion = $request->descripcion;
            $procedure->cantidad = $request->cantidad;
            $procedure->id_inventario = $request->id_inventario;
            $procedure->id_animal = $request->id_animal;
            $procedure->id_usuario = $request->id_usuario;

            // Calcular la nueva cantidad
            $nuevaCantidad = $inventario->cantidad - $input['cantidad'];

            if ($inventario->cantidad >= $input['cantidad']) {
                $procedure->save();

                // Actualizar la tabla de inventories
                DB::table('inventories')->where('id', $input['id_inventario'])->update(['cantidad' => $nuevaCantidad]);

                return redirect()->route('index.procedimiento')->with('success', '¡Registro insertado correctamente!');
            } else {
                return redirect()->route('index.procedimiento')->with('danger', 'La cantidad solicitada supera a la cantidad disponible');
            }
        } else {
            return redirect()->route('index.procedimiento')->with('danger', 'El medicamento ya se venció');
        }
    }


    public function update(Request $request, procedure $procedure)
    {
        $request->validate([
            'nombreProcedimiento' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'id_inventario' => 'required',
            'id_animal' => 'required',
            'id_usuario' => 'required'
        ]);

        $input = $request->all();

        $inventario = inventory::select("cantidad")->where("id", $input['id_inventario'])->first();

        if ($inventario === null) {
            return redirect()->route('index.procedimiento')->with('danger', 'Inventario no encontrado.');
        }

        if ($this->validarFecha($input["id_inventario"])) {
            $procedure->nombreProcedimiento = $request->nombreProcedimiento;
            $procedure->descripcion = $request->descripcion;
            $procedure->id_inventario = $request->id_inventario;
            $procedure->id_animal = $request->id_animal;
            $procedure->id_usuario = $request->id_usuario;

            // Calcular la nueva cantidad
            $nuevaCantidad_sumada = $procedure->cantidad + $input['cantidad'];

            $nuevaCantidad = $inventario->cantidad - $input['cantidad'];

            if ($inventario->cantidad >= $input['cantidad']) {

                $procedure->cantidad = $nuevaCantidad_sumada;

                $procedure->update();

                // Actualizar la tabla de inventories
                DB::table('inventories')->where('id', $input['id_inventario'])->update(['cantidad' => $nuevaCantidad]);

                return redirect()->back()->with('success', '¡Registro Actualizado correctamente!');
            } else {
                return redirect()->back()->with('danger', 'La cantidad solicitada supera a la cantidad disponible');
            }
        } else {
            return redirect()->back()->with('danger', 'La cantidad solicitada supera a la cantidad disponible');
        }
    }

    public function destroy(procedure $procedure)
    {
        $procedure->delete();

        return redirect()->back()->with('success', '¡Registro eliminado correctamente!');
    }
}
