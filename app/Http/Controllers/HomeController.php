<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Cliente;
use App\modelos\Proveedor;

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
        $no_clientes = count(Cliente::latest()->get());
        $no_provedores = count(Proveedor::latest()->get());

        return view('home', compact('no_clientes', 'no_provedores'));
    }
}
