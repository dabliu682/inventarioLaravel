<div class="modal fade" id="modal-create-credito">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Nuevo credito</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">                    
                <div class="card-body">                
                    <form class="needs-validation" action=" {{ route('movimientosProveedores.storeCreditos')}}" method="POST" novalidate>
                        @csrf
                        
                        <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">
    
                        <div class="form-row">

                            <div class="col-md-12 mb-12">
                                <label for="tipo_cuenta">No comprobante compra </label>
                                <select class="form-control" id="id_compras" name="id_compras" required>
                                    <option value="" disabled selected>Seleccione una opción</option>  
                                    @foreach ($comprasCredito as $compraCredito)
                                        <option value={{ $compraCredito->id }}>{{ $compraCredito->no_comprobante }}</option>
                                    @endforeach                              
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>

                            <div class="col-md-12 mb-12 my-3">
                                <label for="nombre">Valor Inicial</label>
                                <input type="number" class="form-control" id="abono" name="abono" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>

                        </div> 
                        
                        <div class="form-row"> 
                                               
                            <div class="col-md-12 mb-12">
                                <label for="banco">Numero de cuotas</label>
                                <input type="number" class="form-control" id="no_cuotas" name="no_cuotas" required>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div> 

    
                        </div>
                        
                        <div class="form-row"> 
                                               
                            <div class="col-md-12 mb-12 my-3">
                                <label for="banco">Plazo de pago (dias)</label>
                                <input type="number" class="form-control" id="plazoDias" name="plazoDias" required>
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
        </div>
    </div>
</div>
