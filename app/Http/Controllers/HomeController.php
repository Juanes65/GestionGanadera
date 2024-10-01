<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fechaActual = Carbon::now();
        
        $usuarios = DB::table('users')->get(); // Obtener usuarios
        $animales = DB::table('animals')->get(); // Obtener animales
        $inventarios = DB::table('inventories')->where('cantidad', '>', 0)->get(); // Obtener inventarios

        $total_animals = DB::table('animals')->count();
        $total_procedure = DB::table('procedures')->whereDate('created_at', $fechaActual)->count();;
        $total_medicamentos = DB::table('inventories')->where('fechaVencimiento','<',$fechaActual )->count();

        return view('home', compact('usuarios','animales','inventarios','total_animals','total_procedure','total_medicamentos'));
    }
}
