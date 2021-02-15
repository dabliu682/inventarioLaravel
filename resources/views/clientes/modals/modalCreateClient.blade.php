<div class="modal fade" id="modal-create-client">
    <div class="modal-dialog">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Nuevo Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" action=" {{ route('cliente.store')}}" method="POST" novalidate>
                    @csrf
                    
                    <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="identificacion">Identificacion</label>
                          <input type="text" class="form-control" id="identificacion" name="identificacion" required>
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
                          <input type="text" class="form-control" id="telefono" name="telefono" required>
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
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>        
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>