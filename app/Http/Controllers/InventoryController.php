<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventory = inventory::all();
        
        return view('Inventario.index', compact('inventory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventory = new inventory();

        $inventory->nombreMedicamento = $request->nombreMedicamento;
        $inventory->cantidad = $request->cantidad;
        $inventory->fechaVencimiento = $request->fechaVencimiento;
        $inventory->categoria = $request->categoria;

        $inventory->save();

        return redirect()->route('index.inventario')->with('success', '¡Registro insertado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inventory $inventory)
    {
        $inventory->nombreMedicamento = $request->nombreMedicamento;
        $inventory->cantidad = $request->cantidad;
        $inventory->fechaVencimiento = $request->fechaVencimiento;
        $inventory->categoria = $request->categoria;

        $inventory->update();

        return redirect()->back()->with('success', '¡Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inventory $inventory)
    {
        $inventory->delete();

        return redirect()->back()->with('success', '¡Registro eliminado correctamente!');
    }
}
