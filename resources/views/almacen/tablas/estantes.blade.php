<div class="col-lg-6 col-12">
    <!-- small box -->
    <div class="card text-center">
      <div class="card-header bg-success" style="align-items: center;">
        <button style="float:left; border:none;" class="btn btn-outline-light "  data-toggle="modal" data-target="#modal-create-estante"><i class="fas fa-plus" style="font-size: 23px" ></i></button>
        <h3 style="float:right" class="text-bold">Estantes</h3>
      </div>
      <div class="card-body" style="min-height: 440px" >
          <table id="tabla3" class="table table-bordered table-striped">
              <thead>
                  <tr>                            
                      <th>Estante</th>    
                      <th>Fila</th>                    
                      <th style="width: 70px"></th>                            
                  </tr>
              </thead>
              <tbody>
                  @foreach ($estantes as $estante)                    
                      <tr>
                        <td>{{ $estante->nombre}}</td>
                        <td>{{ $estante->filas}}</td>                          
                        <td style="text-align: center; width: 60px">
                            <button type="button" class="delete-modal btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete-estante" data-id="{{$estante->id}}" data-nombre="{{$estante->nombre}}">
                                <i class="fas fa-trash-alt"></i>
                            </button>                                    
                        </td>
                      </tr>                           
                  @endforeach                                              
              </tbody>                    
          </table>
      </div>
      
    </div>
  </div>