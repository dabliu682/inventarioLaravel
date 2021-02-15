@extends('adminlte::page')

@section('title', 'Mundo Diesel-Clientes')

@section('content')
    <div class="container-fluid">
        <div class="row">        
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h1><i class="fas fa-user"></i> Listado Clientes</h1>

                        <h5>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-create-client">
                                Crear cliente
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">
                                Descargar Pdf
                            </button>
                        </h5>
                    </div>
                <div class="card-body">                
                    <table id="clientes" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Identificación</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th style="width: 70px"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)                    
                                <tr>
                                    <td>{{ $cliente->identificacion}}</td>
                                    <td>{{ $cliente->nombre}}</td>
                                    <td>{{ $cliente->telefono}}</td>
                                    <td>{{ $cliente->direccion}}</td>
                                    <td style="text-align: center; width: 60px">

                                        <button type="button" class="edit-modal btn btn-primary btn-xs" data-toggle="modal" data-target="#EditarCliente" data-id="{{$cliente->id}}" data-identificacion="{{$cliente->identificacion}}" data-nombre="{{$cliente->nombre}}" data-telefono="{{$cliente->telefono}}" data-direccion="{{$cliente->direccion}}">
                                            <i class="fas fa-user-edit"></i>
                                        </button>

                                        <button type="button" class="delete-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteCliente" data-id="{{$cliente->id}}" data-identificacion="{{$cliente->identificacion}}" data-nombre="{{$cliente->nombre}}" data-telefono="{{$cliente->telefono}}" data-direccion="{{$cliente->direccion}}">
                                            <i class="fas fa-user-times"></i>
                                        </button>                                    
                                    </td>
                                </tr>                           
                            @endforeach                                              
                        </tbody>                    
                    </table>
                </div>            
                </div>
            </div>       
        </div>
    </div>

    <!-- modal editar clientes -->
    @include('clientes/modals/modalUpdateClient')
    <!-- /.modal editar clientes -->

    <!-- modal crear clientes -->
    @include('clientes/modals/modalCreateClient')
    <!-- /.modal crear clientes -->

    <!-- modal eliminar clientes -->
    @include('clientes/modals/modalDeleteClient')
    <!-- /.modal eliminar clientes -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{ asset('js/clientes.js') }}"></script>
@stop