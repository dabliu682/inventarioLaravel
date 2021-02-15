<div class="modal fade" id="modal-create-linea">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Nueva Linea</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" action=" {{ route('linea.store')}}" method="POST" novalidate>
                    @csrf                    
                    <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">

                    <div class="form-row">
                        <div class="col-md-12 mb-12">
                          <label for="identificacion">Nombre</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" required>
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