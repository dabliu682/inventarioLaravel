@extends('adminlte::page')

@section('title', 'Mundo Diesel-Proveedores')

@section('content')
<div class="container-fluid">
    <div class="row">        
        <div class="col-12">
            <div class="card" style="min-height: 550px">
                <div class="card-header">
                    
                    <h1><i class="fas fa-archive"></i> Listado Productos</h1>

                    <h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-create-producto">
                            Crear producto
                        </button>
                        <button type="button" class="btn btn-danger btn-sm">
                            Descargar Pdf
                        </button>
                    </h5>
                </div>
            <div class="card-body">                
                <table id="tabla-productos" class="table table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center">
                            <th></th>
                            <th>Nombre</th>
                            <th>Categoria/Linea</th>
                            <th>Marca</th>
                            <th>Ubicacion</th> 
                            <th>Estado</th>                         
                            <th>Proveedor</th>                         
                            <th>Valor Entrada</th>                         
                            <th>Valor Salida</th>                         
                            <th style="width: 60px"></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)                    
                            <tr>
                                <td style="text-align: center; width: 20px">
                                    <button type="button" class="mostrar-modal btn btn-success btn-xs" data-toggle="modal" data-target="#modal-mostrar-producto" data-descripcion="{{$producto->descripcion}}">
                                        <i class="far fa-file"></i>
                                    </button>
                                </td>
                                <td>{{ $producto->nombre}}</td>
                                <td>{{ $producto->categorias->nombre}}/{{ $producto->categorias->lineas->nombre}}</td>
                                <td>{{ $producto->marcas->nombre}}</td>
                                <td>{{ $producto->estantes->nombre}}/{{ $producto->estantes->filas}}</td>
                                <td>{{ $producto->estado}}</td>
                                <td>{{ $producto->proveedores->nombre}}</td>
                                <td>{{ $producto->valor_entrada}}</td>
                                <td>{{ $producto->valor_salida}}</td>
                                <td style="text-align: center; width: 60px">

                                    <button type="button" class="edit-modal btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-update-producto" data-id="{{$producto->id}}" data-nombre="{{$producto->nombre}}" data-categorias="{{$producto->categorias->id}}" data-marcas="{{$producto->marcas->id}}" data-estantes="{{$producto->estantes->id}}" data-estado="{{$producto->estado}}" data-proveedores="{{$producto->proveedores->id}}" data-valor_entrada="{{$producto->valor_entrada}}" data-valor_salida="{{$producto->valor_salida}}" data-descripcion="{{$producto->descripcion}}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button" class="delete-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteProducto" data-id="{{$producto->id}}" data-nombre="{{$producto->nombre}}">
                                        <i class="fas fa-trash"></i>
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
    <div class="row">        
        <div class="col-12">
            <div class="card" style="min-height: 570px">
                <div class="card-header">
                    
                    <h1><i class="fas fa-archive"></i> Inventario</h1>

                    <h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-create-proveedor">
                            Registrar Entrada
                        </button>
                        <button type="button" class="btn btn-danger btn-sm">
                            Descargar Pdf
                        </button>
                    </h5>
                </div>
            <div class="card-body">                
                <table id="table-proveedores" class="table table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center">
                            <th>Fecha</th>
                            <th>Producto</th>
                            <th>No comprobante</th>
                            <th>Cant Entrada</th>
                            <th>Cant Salida</th>
                            <th>Stock</th>                            
                            <th style="width: 60px"></th>
                            
                        </tr>
                    </thead>
                    <tbody>                             
                        {{-- @foreach ($proveedores as $proveedor)                    
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
                        @endforeach                                               --}}
                    </tbody>                    
                </table>
            </div>            
            </div>
        </div>       
    </div>
</div>

 <!-- modal editar producto -->
 @include('productos/modals/modalUpdateProducto')
 <!-- /.modal editar producto -->

<!-- modal crear producto -->
@include('productos/modals/modalCreateProducto')
<!-- /.modal crear producto -->

<!-- modal eliminar producto -->
@include('productos/modals/modalDeleteProducto')
<!-- /.modal eliminar producto -->

<!-- modal mostrar producto -->
@include('productos/modals/modalMostrarProducto')
<!-- /.modal mostrar producto -->
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/inventario.js') }}"></script>
    <script src="{{ asset('js/productos.js') }}"></script>
@stop