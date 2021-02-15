<div class="modal fade" id="modal-create-proveedor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Nuevo Proveedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" action=" {{ route('proveedores.store')}}" method="POST" novalidate>
                    @csrf
                    
                    <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">

                    <div class="form-row">
                        <div class="col-md-4 mb-2">
                          <label for="identificacion">Cc/Nit</label>
                          <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                          <div class="invalid-feedback">
                                Este campo es obligatorio.
                          </div>
                        </div>
                    
                      <div class="col-md-4 mb-2">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <div class="invalid-feedback">
                            Este campo es obligatorio.
                        </div>
                      </div>

                      <div class="col-md-4 mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                        <div class="invalid-feedback">
                          Este campo es obligatorio.
                        </div>
                      </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4 mb-2">
                          <label for="email">Correo Electronico</label>
                          <input type="email" class="form-control" id="email" name="email">                          
                        </div>
                    
                        <div class="col-md-4 mb-2">
                          <label for="direccion">Direccion</label>
                          <input type="text" class="form-control" id="direccion" name="ciudad" required>
                          <div class="invalid-feedback">
                            Este campo es obligatorio.
                          </div>
                        </div>

                        <div class="col-md-4 mb-2">
                          <label for="no_cuenta"># de Cuenta</label>
                          <input type="text" class="form-control" id="no_cuenta" name="no_cuenta" required>
                          <div class="invalid-feedback">
                            Este campo es obligatorio.
                          </div>
                        </div>

                    </div>

                    <div class="form-row">

                      <div class="col-md-4 mb-2">
                        <label for="banco">Banco</label>
                        <input type="text" class="form-control" id="banco" name="banco" required>
                        <div class="invalid-feedback">
                          Este campo es obligatorio.
                        </div>
                      </div>
                  
                      <div class="col-md-4 mb-2">
                        <label for="tipo_cuenta">Tipo de Cuenta</label>
                        <select class="form-control" id="tipo_cuenta" name="tipo_cuenta">                          
                          <option value="ahorro">Ahorros</option>
                          <option value="debito">Debito</option>
                        </select>
                        <div class="invalid-feedback">
                          Este campo es obligatorio.
                        </div>
                      </div>

                      <div class="col-md-4 mb-2">
                        <label for="nom_cuenta">Nombre cuenta</label>
                        <input type="text" class="form-control" id="nom_cuenta" name="nombre_cuenta" required>
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