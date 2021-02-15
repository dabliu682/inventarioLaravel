<div class="modal fade" id="modal-delete-linea" >
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Marca</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form  action=" {{ route('linea.delete')}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">  
                    <input id="userDelete" name="userDelete" type="hidden" value="{{ auth()->user()->name }}">           
                    <input id="idLinea" name="id" type="hidden">
                    
                    <div class="deleteContent">
                        ¿Esta seguro de eliminar la linea <span class="nombreUserLinea text-bold" ></span>?
                    </div>                  
                </div>
                <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-danger actionBtn delete">Eliminar</button>  
                </div> 
            </form>    
        </div>      
    </div>    
</div>