@extends('adminlte::page')

@section('title', 'Mundo Diesel-Proveedores')

@section('content')
<div class="container-fluid">
    <div class="row">        
        <div class="col-12">
            <div class="card" style="min-height: 550px">
                <div class="card-header">
                    
                    <h1><i class="fas fa-cash-register"></i> Compras</h1>

                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-create-compra">
                        Registrar compra
                    </button>
                </div>
            <div class="card-body">                
                <table id="compras" class="table table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center">
                            <th>Fecha</th>
                            <th>Tipo</th>
                            <th>No comprobante</th>
                            <th>Forma de pago</th>
                            <th>Total</th>                                      
                            <th></th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compras as $compra)                    
                            <tr  style="text-align: center;">
                                <td>{{ $compra->fecha}}</td>
                                <td>{{ $compra->tipo}}</td>
                                <td>{{ $compra->no_comprobante}}</td>
                                <td>{{ $compra->forma_pago}}</td>
                                <td>{{ $compra->total}}</td>
                                                               
                                <td style="width: 80px">
                                    @if ($compra->credito == 0)
                                        <button type="button" class="edit-modal btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-update-producto">
                                            <i class="fas fa-edit"></i>
                                        </button>                                        
                                    @endif
                                    

                                    <button type="button" class="delete-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteProducto">
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
                    
                    <h1><i class="fas fa-archive"></i> Creditos</h1>

                    <h5>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-create-credito">
                            Registrar Credito
                        </button>                        
                    </h5>
                </div>
            <div class="card-body">                
                <table id="creditos" class="table table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center">
                            <th>No compra</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Valor total</th>
                            <th>Abono</th>
                            <th>Saldo</th>
                            <th># de cuotas</th>                      
                            <th>Valor cuota</th>                      
                            <th>Estado</th>                      
                            <th style="width: 80px"></th>
                            
                        </tr>
                    </thead>
                    <tbody>                             
                        @foreach ($creditos as $credito)                    
                            <tr style="text-align: center">
                                
                                <td>{{ $credito->id_compras}}</td>
                                <td>{{ $credito->fechaInicio}}</td>
                                <td>{{ $credito->fechaFin}}</td>
                                <td>Valor total</td>
                                <td>{{ $credito->abono}}</td>
                                <td>{{ $credito->saldo}}</td>
                                <td>{{ $credito->no_cuotas}}</td>
                                <td>{{ $credito->valor_cuota}}</td>
                                <td>
                                    @if ($credito->estado == '1')
                                        <a href="{{ route('movimientosProveedores.storePlanCuotas', $credito->id) }}">Sin Registro</a>
                                    @else
                                        Activo
                                    @endif
                                   
                                </td>
                                <td style="text-align: center;">                                  
                                    <button type="button" class="delete-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteCliente">
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
                    <h1><i class="fas fa-archive"></i> Pagos-Creditos</h1>                    
                </div>
            <div class="card-body">                
                <table id="PagosCreditos" class="table table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center">
                            <th># credito</th>
                            <th># cuota</th>
                            <th>Valor cuota</th>
                            <th>Fecha de vencimiento</th>
                            <th># Recibo de caja</th>
                            <th>Valor pagado</th>
                            <th>Fecha de Pago</th>                                           
                            <th style="width: 80px"></th>
                            
                        </tr>
                    </thead>
                    <tbody>                             
                        @foreach ($pagos as $pago)                    
                            <tr style="text-align: center">
                                <td>{{ $pago->id_credito_compras}}</td>
                                <td>{{ $pago->no_cuota }}</td>
                                <td>{{ $pago->valor_cuota}}</td>
                                <td>{{ $pago->fecha_cuota}}</td>
                                <td>{{ $pago->no_reciboCaja}}</td>
                                <td>{{ $pago->Valor_pago}}</td>
                                <td>{{ $pago->fecha_pago}}</td>                                
                                <td style="text-align: center;">                                    
                                    <button type="button" class="pagar-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#pagarCuota" data-saldo="{{$pago->saldo}}"  data-id_cuota="{{$pago->id}}" data-id="{{$pago->id_credito_compras}}" data-no_cuota="{{ $pago->no_cuota }}" data-valor_cuota="{{ $pago->valor_cuota }}"  data-fecha_vence="{{ $pago->fecha_cuota }}">
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
</div>


<!-- modal crear compra -->
@include('movimientosProveedores/modals/modalCreateCompra')
<!-- /.modal crear compra -->


<!-- modal crear creditos -->
@include('movimientosProveedores/modals/modalCreateCredito')
<!-- /.modal crear creditos -->

<!-- modal mostrar producto -->
@include('movimientosProveedores/modals/modalPagarCuota')
<!-- /.modal mostrar producto -->
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/compras.js') }}"></script>
    <script src="{{ asset('js/creditos.js') }}"></script>
    <script src="{{ asset('js/PagosCreditos.js') }}"></script>
    <script src="{{ asset('js/pagoCuotas.js') }}"></script>
@stop