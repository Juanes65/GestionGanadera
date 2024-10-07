<?php

namespace App\Http\Controllers;

use App\Models\resolucione;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ResolucioneController extends Controller
{
    public function index()
    {
        $resolucione = resolucione::all();

        return view('Resoluciones.index', compact('resolucione'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_archivo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|mimes:pdf|max:2048',
        ]);

        $arch = $request->file('url')->store('PDF', 'public');
        $file = Storage::url($arch);

        $resolucione = new resolucione();
        $resolucione->nombre_archivo = $request->nombre_archivo;
        $resolucione->descripcion = $request->descripcion;
        $resolucione->url = $file;

        $resolucione->save();

        return redirect()->route('index.resolucion')->with('success', '¡Registro ingresado correctamente!');
    }

    public function update(Request $request, resolucione $resolucione)
    {
        $data = $request->only('nombre_archivo', 'descripcion');
        $resolucione->update($data);

        if ($request->hasFile('url')) {
            if ($resolucione->url) {
                $oldFile = str_replace('/storage', '', $resolucione->url); // Elimina "/storage" para obtener la ruta relativa
                if (Storage::disk('public')->exists($oldFile)) {
                    Storage::disk('public')->delete($oldFile);
                }
            }

            // Almacenar el nuevo archivo
            $arch = $request->file('url')->store('PDF', 'public');

            // Actualizar la URL en la base de datos con la nueva ruta
            $resolucione->update(['url' => '/storage/' . $arch]);
        }

        return redirect()->back()->with('success', '¡Registro actualizado correctamente!');
    }


    public function destroy(resolucione $resolucione)
    {
        $url = str_replace('/storage', '', $resolucione->url);
        Storage::disk('public')->delete($url);

        $resolucione->delete();

        return redirect()->back()->with('success', '¡Registro eliminado correctamente!');
    }
}
