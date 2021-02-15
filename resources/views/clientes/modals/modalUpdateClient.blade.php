<div class="modal fade" id="EditarCliente" >
    <div class="modal-dialog">
        <div class="modal-content bg-default">
          <div class="modal-header">
              <h4 class="modal-title">Editar Cliente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <form class="needs-validation" novalidate>
            <div class="modal-body">                
                  <input id="idCliente" name="idCliente" type="hidden">

                  <div class="form-row">

                    <div class="col-md-6 mb-3">
                      <label for="identificacion">Identificacion</label>
                      <input type="text" class="form-control" id="identificacion"  required>
                      <div class="invalid-feedback">
                            Este campo es obligatorio.
                      </div>
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                      <div class="invalid-feedback">
                          Este campo es obligatorio.
                      </div>
                    </div>

                  </div>

                  <div class="form-row">

                    <div class="col-md-6 mb-3">
                      <label for="telefono">Telefono</label>
                      <input type="text" class="form-control" id="telefono" name="telefono"  required>
                      <div class="invalid-feedback">
                        Este campo es obligatorio.
                      </div>
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label for="direccion">Direccion</label>
                      <input type="text" class="form-control" id="direccion" name="direccion" required>
                      <div class="invalid-feedback">
                        Este campo es obligatorio.
                      </div>
                    </div>

                  </div>  
            </div>

            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary actionBtn edit" data-user= "{{ auth()->user()->name }}">Editar</button>  
            </div> 
          </form>     
        </div>      
    </div>    
</div>