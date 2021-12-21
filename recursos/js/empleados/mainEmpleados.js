$(function() {

    // Paginación de la tabla con el cambio de lenguaje a español
    $('#tabla_empleados').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });

    // Evento en btn_eliminar
    $('.btn_eliminar').click(function() {
        Swal.fire({
            title: 'Eliminar empleado',
            text: "¿Estás seguro de eliminar este empleado?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'No eliminar'
        }).then((result) => {
            if (result.value) {
                deleteEmpleado(this.id)
            } else {
                Swal.fire(
                    'Cancelado',
                    'No se ha eliminado el empleado',
                    'error'
                )
            }
        })

    });

    // Elimina un registro
    function deleteEmpleado(id) {

        $.ajax({
            url: base_url('deleteEmpleado/') + id,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            async: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Content-Type', 'application/json');
            },
            success: function(response) {
                if (response) {
                    Swal.fire({
                        title: 'Empleado eliminado',
                        text: 'El empleado se ha eliminado correctamente',
                        type: 'success',
                    }).then(function() {
                        window.location.replace(base_url('mainEmpleados'));
                    });
                } else {
                    Swal.fire(
                        'Error',
                        'No se ha podido eliminar el empleado',
                        'error'
                    )
                }
            },
            error: function() {
                Swal.fire(
                    'Error',
                    'No se ha podido eliminar el empleado',
                    'error'
                )
            }
        });

    }

});