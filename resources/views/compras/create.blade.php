@extends('adminlte::page')

@section('title', 'Mundo Diesel')

@section('content')

<div class="container-fluid">
    <div class="row">        
        <div class="col-lg-2 col-1">

        </div>
        <div class="col-lg-8 col-12">
            <div class="card" style="min-height: 550px">
                <div class="card-header">                    
                    <h3><i class="far fa-file-alt"></i> Compras</h3>                    
                </div>
                <div class="card-body">                
                    <form class="needs-validation form-1" action=" {{ route('compras.store')}}" method="POST" novalidate>
                        @csrf
                        
                        <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">
    
                        <div class="form-row">

                            <div class="col-md-6 mb-6">
                              <label for="identificacion">Fecha</label>
                              <input type="date" class="form-control" id="fecha" name="fecha" required>
                              <div class="invalid-feedback">
                                    Este campo es obligatorio.
                              </div>
                            </div>                                                
    
                        </div>                   
    
                        <div class="form-row">

                            <div class="col-md-6 mb-6 my-3">
                                <label for="nombre">No comprobante</label>
                                <input type="text" class="form-control" id="no_comprobante" name="no_comprobante" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>  

                            <div class="col-md-6 mb-6 my-3">
                                <label for="tipo_cuenta">Tipo Compra</label>
                                <select class="form-control" id="tipo" name="tipo" required>
                                    <option value="" disabled selected>Seleccione una opción</option>                          
                                    <option value="factura de compra">Factura de compra</option>
                                    <option value="orden de pedido">Orden de pedido</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>    
                        
                        </div>

                        <div class="form-row">

                            <div class="col-md-6 mb-6">
                                <label for="banco">Valor total</label>
                                <input type="text" class="form-control" id="total" name="total" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>

                            <div class="col-md-6 mb-6">
                                <label for="tipo_cuenta">Forma de Pago</label>
                                <select class="form-control" id="forma_pago" name="forma_pago"> 
                                    <option value="" disabled selected>Seleccione una opción</option>                         
                                    <option value="contado">Contado</option>
                                    <option value="credito">Credito</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>

                            
                                <div class="col-md-12 mb-12 my-3">
                                  <label for="identificacion">Descripcíon</label>
                                  <textarea class="form-control" name="descripcion" id="descripcion" rows="2" cols="10" required></textarea>
                                  <div class="invalid-feedback">
                                        Este campo es obligatorio.
                                  </div>
                                </div>  
                             
                        
                        </div>    
                                            
                </div>
                
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
                    </form>
            </div>            
        
        </div>   
        {{-- <div class="col-lg-6 col-12">
            <div class="card" style="min-height: 550px">
                <div class="card-header">                    
                    <h3><i class="far fa-file-alt"></i> Creditos</h3>                    
                </div>
                <div class="card-body">                
                    <form class="needs-validation" action=" {{ route('proveedores.store')}}" method="POST" novalidate>
                        @csrf
                        
                        <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">
    
                        <div class="form-row">

                            <div class="col-md-6 mb-6">
                                <label for="tipo_cuenta">No comprobante compra </label>
                                <select class="form-control" id="comCompra" name="comCompra">
                                    <option value="" disabled selected>Seleccione una opción</option> 
                                    @foreach ($compras as $compra)
                                        <option value={{ $compra->id }}>{{ $compra->no_comprobante }}</option>
                                    @endforeach                              
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                        
                            <div class="col-md-6 mb-6 my-3">
                                <label for="nombre">Abono</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-6 my-3">
                                <label for="telefono">Saldo</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                                <div class="invalid-feedback">
                                  Este campo es obligatorio.
                                </div>
                              </div>

    
                        </div>                   

                        <div class="form-row">
    
                            <div class="col-md-6 mb-6">
                                <label for="banco">Plazo de pago (dias)</label>
                                <input type="text" class="form-control" id="banco" name="banco" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-6">
                                <label for="banco">Valor pagos</label>
                                <input type="text" class="form-control" id="banco" name="banco" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>  
                        
                        </div>

                            
                                            
                </div>
                
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
                    </form>
            </div>            
        
        </div>       --}}
    </div>   
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script src="{{ asset('js/inventario.js') }}"></script>
    <script src="{{ asset('js/productos.js') }}"></script> --}}   
@stop