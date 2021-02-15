<div class="modal fade" id="deleteProducto" >
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form  action=" {{ route('productos.delete')}}" method="POST">
                @csrf
                <div class="modal-body">  
                    <input id="productoDelete" name="productoDelete" type="hidden" value="{{ auth()->user()->name }}">              
                    <input id="idPro" name="idPro" type="hidden">
                    
                    <div class="deleteContent">
                        ¿Esta seguro de eliminar el producto <span class="titleProducto text-bold" ></span>?
                    </div>                  
                </div>
                <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-danger actionBtn delete">Eliminar</button>  
                </div> 
            </form>    
        </div>      
    </div>    
</div>