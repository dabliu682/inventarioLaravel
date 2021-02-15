<div class="modal fade" id="deleteCliente" >
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form  action=" {{ route('proveedores.delete')}}" method="POST">
                @csrf
                <div class="modal-body">  
                    <input id="userDelete" name="userDelete" type="hidden" value="{{ auth()->user()->name }}">              
                    <input id="id" name="id" type="hidden">
                    
                    <div class="deleteContent">
                        ¿Esta seguro de eliminar a <span class="title text-bold" ></span>?
                    </div>                  
                </div>
                <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-danger actionBtn delete">Eliminar</button>  
                </div> 
            </form>    
        </div>      
    </div>    
</div>