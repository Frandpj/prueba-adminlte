$(function() {

    // Paginación de la tabla con el cambio de lenguaje a español
    $('#tabla_empresas').DataTable({
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
            title: 'Eliminar empresa',
            text: "¿Estás seguro de eliminar esta empresa?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'No eliminar'
        }).then((result) => {
            if (result.value) {
                deleteEmpresa(this.id)
            } else {
                Swal.fire(
                    'Cancelado',
                    'No se ha eliminado la empresa',
                    'error'
                )
            }
        })

    });

    // Elimina un registro
    function deleteEmpresa(id) {

        $.ajax({
            url: base_url('deleteEmpresa/') + id,
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
                        title: 'Empresa eliminado',
                        text: 'La empresa se ha eliminado correctamente',
                        type: 'success',
                    }).then(function() {
                        window.location.replace(base_url('mainEmpresas'));
                    });
                } else {
                    Swal.fire(
                        'Error',
                        'No se ha podido eliminar la empresa',
                        'error'
                    )
                }
            },
            error: function() {
                Swal.fire(
                    'Error',
                    'No se ha podido eliminar la empresa',
                    'error'
                )
            }
        });

    }

});