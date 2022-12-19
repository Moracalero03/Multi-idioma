        
//$(document).ready(function(){
        
 
   //$("#mi_formulario").validationEngine();
//})

//Formulario de consulta de existencia 
    jQuery(function() {
        $('#mi_formulario #email').addClass('validate[required,custom[email]]');
        $('#mi_formulario #date').addClass('validate[required,custom[date]],');
        $('#mi_formulario #first_name').addClass('validate[required,custom[onlyLetterSp]]');
        $('#mi_formulario').validationEngine({

           // realTime: true,
            onValidationComplete: function('#mi_formulario #email','true') {
               // e.preventDefault()
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
        })
    })
