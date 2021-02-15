<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Marca;
use App\modelos\Estante;
use App\modelos\Linea;
use App\modelos\Categoria;

class almacenController extends Controller
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
        $marcas = Marca::latest()->get();
        $estantes = Estante::latest()->get();
        $lineas = Linea::latest()->get();
        $categorias = Categoria::latest()->get();
        return view('almacen/index', compact('marcas', 'estantes', 'lineas', 'categorias'));
     }     
     
}
