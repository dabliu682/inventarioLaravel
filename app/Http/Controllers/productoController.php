<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\modelos\Producto;

class productoController extends Controller
{
    public function store(ProductoRequest $request )
    {
        
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {
            Producto::create($request->validated());
            return redirect()->route('inventario.index');
        }
        else
        {
            return redirect()->route('home');
        }
    }

    public function update(ProductoRequest $request)
    {
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {
            $id = $request->get('idProducto');
            $producto = Producto::find($id);

            $producto->update($request->validated());
            return redirect()->route('inventario.index');
        }
        else
        {
            return redirect()->route('home');
        }  
    }

    public function delete(Request $request)
    {
        Producto::find($request->get('idPro'))->delete();
        return redirect()->route('inventario.index');
    }
}
