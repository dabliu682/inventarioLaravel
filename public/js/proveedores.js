$(document).ready(function() {
    $('#table-proveedores').DataTable( {
        "language": 
        {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": 
            {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "<i class='fa fa-angle-right'></i>",
                "sPrevious": "<i class='fa fa-angle-left'></i>"
            }
        
        },
        "bSort": false,            
    });
} );

(function(){
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
})();

//enviar datos al modal editProveedor

$(document).on('click', '.edit-modal', function(){

    $('#idCliente').val($(this).data('id'));
    $('#identificacion').val($(this).data('identificacion'));
    $('#nombre').val($(this).data('nombre'));
    $('#telefono').val($(this).data('telefono'));
    $('#email').val($(this).data('email'));
    $('#ciudad').val($(this).data('ciudad'));  
    $('#no_cuenta').val($(this).data('no_cuenta')); 
    $('#banco').val($(this).data('banco')); 
    $('#tipo_cuenta').val($(this).data('tipo_cuenta')); 
    $('#nom_cuenta').val($(this).data('nombre_cuenta'));
    
});


//enviar datos al modal eliminarProveedor
$(document).on('click', '.delete-modal', function() {

    $('#id').val($(this).data('id')); 
    $('.title').html($(this).data('nombre'));
});

//enviar datos al modal mostrarProveedor

$(document).on('click', '.mostrar-modal', function(){    
 
$('#mostrar_no_cuenta').val($(this).data('no_cuenta')); 
$('#mostrar_banco').val($(this).data('banco')); 
$('#mostrar_tipo_cuenta').val($(this).data('tipo_cuenta')); 
$('#mostrar_nom_cuenta').val($(this).data('nombre_cuenta'));

});