<div class="modal fade" id="modal-create-producto">
    <div class="modal-dialog">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Nuevo Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" action=" {{ route('productos.store')}}" method="POST" novalidate>
                    @csrf
                    
                    <input id="userCreate" name="userCreate" type="hidden" value="{{ auth()->user()->name }}">

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="identificacion">Nombre</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" required>
                          <div class="invalid-feedback">
                                Este campo es obligatorio.
                          </div>
                        </div>
                    
                        <div class="col-md-6 mb-3">
                            <label for="tipo_cuenta">Categoria/Linea</label>
                            <select class="form-control" id="id_categorias" name="id_categorias">                          
                              @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre}}/{{ $categoria->lineas->nombre }}</option>
                              @endforeach                             
                            </select>
                            <div class="invalid-feedback">
                              Este campo es obligatorio.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="tipo_cuenta">Marca</label>
                            <select class="form-control" id="id_marca" name="id_marca">                          
                              @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                              @endforeach                             
                            </select>
                            <div class="invalid-feedback">
                              Este campo es obligatorio.
                            </div>
                        </div>
                    
                        <div class="col-md-6 mb-3">
                            <label for="tipo_cuenta">Ubicación</label>
                            <select class="form-control" id="id_ubicacion" name="id_ubicacion">                          
                              @foreach ($estantes as $estante)
                              {{$estante}}
                                <option value="{{ $estante->id }}">{{ $estante->nombre}}/{{ $estante->filas }}</option>
                              @endforeach                             
                            </select>
                            <div class="invalid-feedback">
                              Este campo es obligatorio.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="tipo_cuenta">Estado</label>
                            <select class="form-control" id="estado" name="estado">                             
                                <option value="Nuevo">Nuevo</option>                                                    
                                <option value="Usado">Usado</option>                                                    
                            </select>
                            <div class="invalid-feedback">
                              Este campo es obligatorio.
                            </div>
                        </div>
                    
                        <div class="col-md-6 mb-3">
                            <label for="tipo_cuenta">Proveedor</label>
                            <select class="form-control" id="id_proveedor" name="id_proveedores">                          
                              @foreach ($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre}}</option>
                              @endforeach                             
                            </select>
                            <div class="invalid-feedback">
                              Este campo es obligatorio.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="identificacion">Valor entrada</label>
                          <input type="text" class="form-control" id="valor_entrada" name="valor_entrada" required>
                          <div class="invalid-feedback">
                                Este campo es obligatorio.
                          </div>
                        </div>
                    
                        <div class="col-md-6 mb-3">
                            <label for="identificacion">Valor salida</label>
                            <input type="text" class="form-control" id="valor_salida" name="valor_salida" required>
                            <div class="invalid-feedback">
                                  Este campo es obligatorio.
                            </div>
                          </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-12">
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