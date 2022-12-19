        $(document).ready(function() {
            $('#mi_formulario #email').addClass('validate[required,custom[email]]');
            $('#mi_formulario #date').addClass('validate[required,custom[date]],');
            $('#mi_formulario #first_name').addClass('validate[required,custom[onlyLetterSp]]');
            // $("#mi_formulario").validationEngine();

            jQuery("#mi_formulario").validationEngine('attach', {
                onValidationComplete: function(form, status) {
                    alert("The form status is: " + status + ", it will never submit");
                    if (status == false) {
                        Swal.fire({
                            text: 'No se puede enviar la información',
                            icon: 'error'
                        })
                    } else if (status == true) {
                        Swal.fire({
                            title: 'Desea enviar el formulario',
                            text: 'se enviaran los datos',
                            icon: 'question',
                            confirmButtonText: 'si, enviar',
                            confirmButtonColor: 'orange',
                            showDenyButton: true, //No 
                            denyButtonText: 'no, cancelar',
                            denyButtonColor: ' blue ',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: $('#mi_formulario').attr('method'),
                                    url: $('#mi_formulario').attr('action'),
                                    data: $('#mi_formulario').serialize(),
                                    success: function(response) {
                                        //Imprime la respuesta de php
                                        $('#intento1').html(response)
                                        Swal.fire({
                                            title: 'Enviado con exito',
                                            icon: 'success',

                                        })
                                    },
                                    error: function() {
                                        console.log('Error')
                                    }
                                })
                            } else if (result.isDenied) {
                                Swal.fire({
                                    title: 'Cancelado'
                                })

                            }
                        })
                    }
                }
            });
        })