<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Proveedor;
use App\Http\Requests\ProveedorRequest;

class proveedorController extends Controller
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
        $proveedores = Proveedor::latest()->get();
        
        return view('proveedores/index', compact('proveedores'));
     }

     public function store(ProveedorRequest $request)
     {
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {
            Proveedor::create($request->validated());
            return redirect()->route('proveedores.index');
        }
        else
        {
            return redirect()->route('home');
        }  
     }

     public function update(ProveedorRequest $request)
     {
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        try {

            if($usuario == $textUsuario )
            {
                $id = $request->get('idCliente');
                $proveedor = Proveedor::find($id);

                $proveedor->update($request->validated());
                return redirect()->route('proveedores.index');
            }
            else
            {
                return redirect()->route('home');
            }  
        } 
        catch (\Throwable $th) 
        {
            return redirect()->route('proveedores.index');
        }

        
     }

     public function delete(Request $request)
     {
        Proveedor::find($request->get('id'))->delete();  
        return redirect()->route('proveedores.index'); 
     }
}
