<?php

namespace App\Http\Controllers;
use App\modelos\Categoria;
use App\modelos\Marca;
use App\modelos\Estante;
use App\modelos\Proveedor;
use App\modelos\Producto;
use Illuminate\Http\Request;

class inventarioController extends Controller
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
        $categorias = Categoria::latest()->get();
        $marcas = Marca::latest()->get();
        $estantes = Estante::latest()->get();   
        $proveedores = Proveedor::latest()->get();
        $productos = Producto::latest()->get();     

        return view('inventario/index', compact('categorias', 'marcas', 'estantes', 'proveedores', 'productos'));
     }
}
