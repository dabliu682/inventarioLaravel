<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Marca;
use App\Http\Requests\MarcaRequest;

class marcaController extends Controller
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

    public function store(MarcaRequest $request)
     {        
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {            
            Marca::create($request->validated());
            return redirect()->route('almacen.index');           
        }
        else
        {
            return redirect()->route('home');
        }    
     }

     public function delete(Request $request)
     {
              
        $textUser = $request->get('userDelete');       
        $user = auth()->user()->name;
        
        if($textUser == $user)
        {
            $id = $request->get('id');
          
            try 
            {
                Marca::find($request->get('id'))->delete();  
                return redirect()->route('almacen.index');
            } 
            catch (\Throwable $th) 
            {
                return redirect()->route('almacen.index');
            }
        }
        else
        {
            return redirect()->route('home');
        }
        
     }
}
