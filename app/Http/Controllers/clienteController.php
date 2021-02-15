<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelos\Cliente;
use App\Http\Requests\CreateClientRequest;

class clienteController extends Controller
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
        $clientes = Cliente::latest()->get();

        return view('clientes/index', compact('clientes'));
    }

    public function store(CreateClientRequest $request)
    {
        $textUsuario = $request->get('userCreate');
        $usuario = auth()->user()->name;

        if($usuario == $textUsuario )
        {
            Cliente::create($request->validated());
            return redirect()->route('clientes.index');
        }
        else
        {
            return redirect()->route('home');
        }    
    }

    public function update(CreateClientRequest $request, $clienteId)
    {
        $cliente = Cliente::find($clienteId); 
        
        if($request->validated())
        {
            $cliente->update($request->validated());
            Session::flash('message', 'El usuario se creo exitosamente.');
            
            return json_encode(array('success' => 'Ok', 'message'=>'cliente editado correctamente'));
        }       
    }

    public function delete($clienteId)
    {
        $cliente = Cliente::find($clienteId)->delete();       
        
        return json_encode(array('success' => 'Ok', 'message'=>'cliente editado correctamente'));
             
    }
}
