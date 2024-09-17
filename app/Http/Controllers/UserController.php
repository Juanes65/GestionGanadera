<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();

        return view('User.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:users',
            'cedula' => 'required',
            'password' => 'required',
        ]);

        $user = User::create($request->only('name', 'apellido', 'cedula', 'email') + [
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('menu_usuarios')->with('success', '¡Registro insertado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);

        return view('User.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = User::find($id);

        $data = $request->only('name', 'apellido', 'cedula', 'email');

        if ($password = $request->input('password')) {
            $data['password'] = bcrypt($password);
        }

        $usuario->update($data);

        return redirect()->back()->with('success', '¡Registro actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return redirect()->back()->with('success', '¡Registro eliminado correctamente!');
    }
}
