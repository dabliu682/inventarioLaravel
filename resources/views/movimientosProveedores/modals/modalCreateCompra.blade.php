<div class="modal fade" id="modal-create-compra">
    <div class="modal-dialog">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Nueva compra</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="needs-validation form-1" action=" {{ route('movimientosProveedores.storeCompras')}}" method="POST" novalidate>
                    @csrf
                    
                    <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">
                    <input id="credito" name="credito" type="hidden" value= "0">

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
                            <select class="form-control" id="forma_pago" name="forma_pago" required> 
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
    </div>
</div>