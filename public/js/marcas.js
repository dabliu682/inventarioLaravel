//enviar datos al modal eliminarMarca
$(document).on('click', '.delete-modal', function() {

    $('#id').val($(this).data('id')); 
    $('.title').html($(this).data('nombre'));
});