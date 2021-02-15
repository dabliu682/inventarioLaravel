@extends('adminlte::page')

@section('title', 'Mundo Diesel-Proveedores')

@section('content')
<div class="container-fluid">
    <div class="row">        
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    
                    <h1><i class="fas fa-luggage-cart"></i> Listado Proveedores</h1>

                    <h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-create-proveedor">
                            Crear proveedores
                        </button>
                        <button type="button" class="btn btn-danger btn-sm">
                            Descargar Pdf
                        </button>
                    </h5>
                </div>
            <div class="card-body">                
                <table id="table-proveedores" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Correo Electronico</th>                            
                            <th style="width: 60px"></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)                    
                            <tr>
                                <td style="text-align: center; width: 20px">
                                    <button type="button" class="mostrar-modal btn btn-success btn-xs" data-toggle="modal" data-target="#modal-mostrar-proveedor" data-no_cuenta ="{{$proveedor->no_cuenta}}" data-banco ="{{$proveedor->banco}}" data-tipo_cuenta ="{{$proveedor->tipo_cuenta}}" data-nombre_cuenta ="{{$proveedor->nombre_cuenta}}">
                                        <i class="fas fa-briefcase"></i>
                                    </button>
                                </td>
                                <td>{{ $proveedor->identificacion}}</td>
                                <td>{{ $proveedor->nombre}}</td>
                                <td>{{ $proveedor->telefono}}</td>
                                <td>{{ $proveedor->ciudad}}</td>
                                <td>{{ $proveedor->email}}</td>
                                <td style="text-align: center; width: 60px">

                                    <button type="button" class="edit-modal btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-update-proveedor" data-id="{{$proveedor->id}}" data-identificacion="{{$proveedor->identificacion}}" data-nombre="{{$proveedor->nombre}}" data-telefono="{{$proveedor->telefono}}" data-direccion="{{$proveedor->direccion}}" data-email="{{$proveedor->email}}" data-ciudad ="{{$proveedor->ciudad}}" data-no_cuenta ="{{$proveedor->no_cuenta}}" data-banco ="{{$proveedor->banco}}" data-tipo_cuenta ="{{$proveedor->tipo_cuenta}}" data-nombre_cuenta ="{{$proveedor->nombre_cuenta}}">
                                        <i class="fas fa-user-edit"></i>
                                    </button>

                                    <button type="button" class="delete-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteCliente" data-id="{{$proveedor->id}}" data-nombre="{{$proveedor->nombre}}">
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

 <!-- modal editar proveedor -->
 @include('proveedores/modals/modalUpdateProveedor')
 <!-- /.modal editar proveedor -->

<!-- modal crear proveedor -->
@include('proveedores/modals/modalCreateProveedor')
<!-- /.modal crear proveedor -->

<!-- modal eliminar proveedor -->
@include('proveedores/modals/modalDeleteProveedor')
<!-- /.modal eliminar proveedor -->

<!-- modal mostrar proveedor -->
@include('proveedores/modals/modalMostrarProveedor')
<!-- /.modal mostrar proveedor -->
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{ asset('js/proveedores.js') }}"></script>
@stop