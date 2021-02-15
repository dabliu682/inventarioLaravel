$(document).ready(function() {
    $('#clientes').DataTable( {
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


//funcion editar cliente

$(document).on('click', '.edit-modal', function(){

    $('#idCliente').val($(this).data('id'));
    $('#identificacion').val($(this).data('identificacion'));
    $('#nombre').val($(this).data('nombre'));
    $('#telefono').val($(this).data('telefono'));
    $('#direccion').val($(this).data('direccion'));
});

$('.modal-footer').on('click', '.edit', function(){

    const user = $(this).data('user');
    const id = $('#idCliente').val();
    
    $.ajax({
        type: 'POST',
        url: '/clientes/'+id+'/update',
        data:{
            '_token' : $('input[name=_token]').val(),
            'userCreate' : user,
            'identificacion' : $('#identificacion').val(),
            'nombre' : $('#nombre').val(),
            'telefono' : $('#telefono').val(),
            'direccion' : $('#direccion').val(),          
        },
        success: function(respuesta)
        {
            var jsonData = JSON.parse(respuesta);

            if(jsonData.success == 'Ok')
            {
                location.href = 'clientes';
            }
            else
            {
                alert('No se pudo editar el registro');
            }
            
        },
        
    })
});

//funcion eliminar cliente
$(document).on('click', '.delete-modal', function() {

    $('#idCliente').val($(this).data('id')); 
    $('.title').html($(this).data('nombre'));
});

$('.modal-footer').on('click', '.delete', function(){
    const id = $('#idCliente').val();
    console.log(id);
    $.ajax({
    type: 'POST',
    url: '/clientes/'+id+'/delete',
    data: {
    '_token': $('input[name=_token]').val(),
    },
    success: function(respuesta)
    {
        var jsonData = JSON.parse(respuesta);

        if(jsonData.success == 'Ok')
        {
            location.href = 'clientes';
        }
        else
        {
            alert('No se pudo editar el registro');
        }
    },
        
    })
});
