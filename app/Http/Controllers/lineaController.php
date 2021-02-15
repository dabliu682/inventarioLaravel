<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Linea;
use App\Http\Requests\LineaRequest;

class lineaController extends Controller
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

    public function store(LineaRequest $request)
     {        
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {            
            Linea::create($request->validated());
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
                Linea::find($request->get('id'))->delete();  
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
