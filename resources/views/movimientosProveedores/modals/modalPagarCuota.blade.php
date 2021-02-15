<div class="modal fade" id="pagarCuota" >
    <div class="modal-dialog">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Pagar cuota</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" action=" {{ route('movimientosProveedores.pagoCuota')}}" method="POST" novalidate>
                    @csrf

                    <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">
                    <input id="id_cuota" name="id_cuota" type="hidden">
                    <input id="fecha_pago" name="fecha_pago" type="hidden" value="{{ now()->toDateString('Y-m-d') }}">
                    <input id="id_credito_compras" name="id_credito_compras" type="hidden">
                    

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="identificacion"># de Credito</label>
                          <input type="text" class="form-control" id="no_credito" name="no_credito" disabled>
                          <div class="invalid-feedback">
                                Este campo es obligatorio.
                          </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="identificacion"># de Cuota</label>
                            <input type="text" class="form-control" id="no_cuota" name="no_cuota" required disabled>
                            <div class="invalid-feedback">
                                  Este campo es obligatorio.
                            </div>
                        </div>

                    </div>   
                    
                    <div class="form-row">                       

                        <div class="col-md-6 mb-3">
                          <label for="identificacion">Valor cuota</label>
                          <input type="text" class="form-control" id="valor_cuota" name="valor_cuota" disabled>
                          <div class="invalid-feedback">
                                Este campo es obligatorio.
                          </div>
                        </div> 
                        
                        <div class="col-md-6 mb-3">
                            <label for="identificacion">Fecha de vencimiento</label>
                            <input type="text" class="form-control" id="fecha_cuota" name="fecha_cuota" required disabled>
                            <div class="invalid-feedback">
                                  Este campo es obligatorio.
                            </div>
                        </div>
                          
                    </div>  
                    
                    <div class="form-row">                        

                        <div class="col-md-6 mb-3">
                          <label for="identificacion"># Recibo de caja</label>
                          <input type="text" class="form-control" id="no_reciboCaja" name="no_reciboCaja">
                          <div class="invalid-feedback">
                                Este campo es obligatorio.
                          </div>
                        </div>   
                        
                        <div class="col-md-6 mb-3">
                            <label for="identificacion">Valor pagado</label>
                            <input type="number" class="form-control" id="Valor_pago" name="Valor_pago" >
                            <div class="invalid-feedback">
                                El valor no puede ser 0 o mayor que el saldo.
                            </div>
                          </div> 
                          
                    </div>  
                                                
            </div>

            <div class="modal-footer justify-content-between">
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
        </form>        
      </div>
    </div>
</div>