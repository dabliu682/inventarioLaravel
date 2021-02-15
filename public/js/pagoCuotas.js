//enviar datos al modal mostrarProveedor

$(document).on('click', '.pagar-modal', function(){    
 
    $('#no_credito').val($(this).data('id')); 
    $('#no_cuota').val($(this).data('no_cuota'));
    $('#valor_cuota').val($(this).data('valor_cuota'));
    $('#fecha_cuota').val($(this).data('fecha_vence'));
    $('#id_cuota').val($(this).data('id_cuota'));
    $('#id_credito_compras').val($(this).data('id'));
    $('#Valor_pago').attr('max', $(this).data('saldo'));
    
    
    
   

});
