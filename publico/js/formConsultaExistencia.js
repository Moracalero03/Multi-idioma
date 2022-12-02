jQuery(function() {
    $('#formConsultaExistencia').validetta({
    realTime: true,
    //se ejecutara cuando el formulario sea totalmente valido
    onValid: function(e) {
        //Previene que se haga el envio antes de confirmar con una alerta
        e.preventDefault()
        console.log(e)
        console.log('ok')
        Swal.fire({
            title: 'Desea enviar el formulario',
            text: 'La informacion sera guardada',
            icon: 'question',
            confirmButtonText: 'Si, enviar',
            confirmButtonColor: 'orange',
            showDenyButton: true, //No 
            denyButtonText: 'No, salir',
            denyButtonColor: ' blue ',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: $('#formConsultaExistencia').attr('method'),
                    url: $('#formConsultaExistencia').attr('action'),
                    data: $('#formConsultaExistencia').serialize(),
                    success: function(response) {
                        console.log(response)
                        $('#prueba').html(response)
                       Swal.fire({
                        title: ' Consulta de existencia',
                        icon: 'success',
                        
                       })
                    },
                    error: function() {
                        console.log('Error')
                    }
                })
            } else if (result.isDenied) {
                Swal.fire({
                    text: 'Cancelado'
                })
                $('#exampleModal').modal('hide')
            }
        })
    }
})
})