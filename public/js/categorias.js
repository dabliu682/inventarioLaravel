//enviar datos al modal eliminarCategoria
$(document).on('click', '.delete-modal', function() {

    $('#idCategoria').val($(this).data('id')); 
    $('.nombreCategoria').html($(this).data('nombre'));
});