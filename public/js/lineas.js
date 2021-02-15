//enviar datos al modal eliminarLinea
$(document).on('click', '.delete-modal', function() {

    $('#idLinea').val($(this).data('id')); 
    $('.nombreUserLinea').html($(this).data('nombre'));
});