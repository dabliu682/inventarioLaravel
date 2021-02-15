<?php

namespace App\Http\Controllers;
use App\modelos\Estante;
use App\Http\Requests\EstanteRequest;

use Illuminate\Http\Request;

class estanteController extends Controller
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

    public function store(EstanteRequest $request)
     {   
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {            
            Estante::create($request->validated());
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
                Estante::find($request->get('id'))->delete();  
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
