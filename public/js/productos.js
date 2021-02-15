//enviar datos al modal editProveedor
$(document).on('click', '.edit-modal', function(){

    $('#idProducto').val($(this).data('id'));
    $('#nombre').val($(this).data('nombre'));
    $("#id_categorias > option[value="+$(this).data('categorias')+"]").attr("selected",true);
    $("#id_marca > option[value="+$(this).data('marcas')+"]").attr("selected",true);
    $("#id_ubicacion > option[value="+$(this).data('estantes')+"]").attr("selected",true);
    $('#estado').val($(this).data('estado'));  
    $("#id_proveedor > option[value="+$(this).data('proveedores')+"]").attr("selected",true);
    $('#valor_entrada').val($(this).data('valor_entrada')); 
    $('#valor_salida').val($(this).data('valor_salida')); 
    $('#descripcion').val($(this).data('descripcion'));    

});

$(document).on('click', '.cerrar', function(){    

    $("#id_categorias option:selected").removeAttr("selected");   
    $("#id_marca option:selected").removeAttr("selected");   
    $("#id_ubicacion option:selected").removeAttr("selected");   
    $("#id_proveedor option:selected").removeAttr("selected");   
});

//enviar datos al modal eliminarProducto
$(document).on('click', '.delete-modal', function() {

    $('#idPro').val($(this).data('id')); 
    $('.titleProducto').html($(this).data('nombre'));
});

//enviar datos al modal mostrarProducto

$(document).on('click', '.mostrar-modal', function(){    
 
    $('#MostrarDescripcion').val($(this).data('descripcion'));     
});