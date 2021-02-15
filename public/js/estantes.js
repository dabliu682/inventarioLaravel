//enviar datos al modal eliminarEstante
$(document).on('click', '.delete-modal', function() {

    $('#idEstante').val($(this).data('id')); 
    $('.nombreUser').html($(this).data('nombre'));
});