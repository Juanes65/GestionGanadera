<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = animal::all();

        return view('Animals.index', compact('animals'));
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
        $request->validate([
            'nombre' => 'required',
            'tipoAnimal' =>'required',
            'raza' =>'required',
            'edad' => 'required',
            'marcacion' => 'required'
        ]);

        $animals = new animal();

        $animals->nombre = $request->nombre;
        $animals->tipoAnimal = $request->tipoAnimal;
        $animals->raza = $request->raza;
        $animals->edad = $request->edad;
        $animals->marcacion = $request->marcacion;

        $animals->save();

        return redirect()->route('index.animals')->with('success', '¡Registro insertado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, animal $animals)
    {
        $animals->nombre = $request->nombre;
        $animals->tipoAnimal = $request->tipoAnimal;
        $animals->raza = $request->raza;
        $animals->edad = $request->edad;
        $animals->marcacion = $request->marcacion;

        $animals->update();

        return redirect()->back()->with('success', '¡Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(animal $animals)
    {
        $animals->delete();

        return redirect()->back()->with('success', '¡Registro eliminado correctamente!');
    }
}
