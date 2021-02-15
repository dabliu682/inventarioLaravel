<div class="modal fade" id="deleteCliente" >
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Editar Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body">                
                    <input id="idCliente" name="idCliente" type="hidden">
                    
                    <div class="deleteContent">
                        ¿Esta seguro de eliminar a <span class="title"></span>?
                    </div>                  
                </div>
                <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-danger actionBtn delete">Eliminar</button>  
                </div> 
            </form>    
        </div>      
    </div>    
</div>