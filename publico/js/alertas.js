//ALERTA
$.getJSON("../publico/js/lang.json", function(json) {
    //CAMBIO DE IDIOMA CON EL NAVEGADOR
    var lang = sessionStorage.getItem("lang");
    let strings = json;

    //CAMBIO DE IDIOMA A LAS ALERTAS CON BOTON
    var check = document.querySelector(".check");

    function translate(str) {
        if (!strings.hasOwnProperty(lang) || !strings[lang].hasOwnProperty(str)) {
            // El idioma o la cadena a traducir (propiedad) no existe
            return str;
        }

        //Evalua el estado del checkbox y cambia el idioma de la alerta
        let id = check.checked;

        if (id == true) {
            return strings["es"][str];
        } else if (id == false) {
            return strings["en"][str];
        }

        // Devolver traducción
        return strings[lang][str];
    }

    //FORMULARIO DINAMICO EN SOLICITUD DE PEDIDOS
    jQuery(function() {
        //Agregar mas personal
        $('#btnAdd').on('click', function() {
            // var i = $('.filas').length //nos manda la cantidad de filas
            var fila = `<tr class="filas">
            <td>
                <select class="form-control" name="sNombreProducto[]">
                    <option value="Sacos" class="lang" key="Sacos" data-section="formSolicitudPedidos" data-value="Sacos">Sacos</option>
                </select>
            </td>
            <td>
                <input class="form-control" type="number" name="txtCantidadSP[]" min="0" data-validetta="required">
            </td>
            <td>
                <button type="button" class="btn" id="btnEliminar"><img src="../publico/img/eliminar.png" width="20rem" height="20rem" alt=""></button>
            </td>
        </tr>`
            $('#tblFilas').append(fila)
        })

        //Formulario de solicitud de productos
        $('#frmDinamico').validetta({
            realTime: true,
            onValid: function(e) {
                e.preventDefault()
                Swal.fire({
                    title: translate('TitleDinamico'),
                    text: translate('TextDinamico'),
                    icon: 'question',
                    confirmButtonText: translate('ConfirmDinamico'),
                    confirmButtonColor: 'orange',
                    showDenyButton: true, //No 
                    denyButtonText: translate('DenyDinamico'),
                    denyButtonColor: ' blue ',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $('#frmDinamico').attr('method'),
                            url: $('#frmDinamico').attr('action'),
                            data: $('#frmDinamico').serialize(),
                            success: function(response) {
                                $('#datos').html(response)
                                    // $('#tblFilas > tr').remove()
                            },
                            error: function() {
                                Swal.fire({
                                    title: translate('TitleDinamicoError'),
                                    icon: 'error',
                                })

                            }
                        })
                    } else if (result.isDenied) {
                        Swal.fire({
                            title: translate('TitleDinamicoCancelado')
                        })

                    }
                })
            }
        })

        //Boton eliminar
        $('body').on('click', '#btnEliminar', function() {
            $(this).closest('tr').remove() //closest busca un elemento mas cercano
        })

        $('#formFacturar').validetta({
            realTime: true,
            onValid: function(e) {
                e.preventDefault()
                Swal.fire({
                    title: translate('TitleFacturarDinamico'),
                    text: translate('TextFacturarDinamico'),
                    icon: 'question',
                    confirmButtonText: translate('ConfirmDinamico'),
                    showDenyButton: true,
                    denyButtonText: translate('DenyDinamico'),
                    denyButtonColor: ' blue ',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $('#formFacturar').attr('method'),
                            url: $('#formFacturar').attr('action'),
                            data: $('#formFacturar').serialize(),
                            success: function(response) {
                                Swal.fire({
                                    title: translate('TitleFacturarDinamicoSuccess'),
                                    icon: 'success',
                                    html: response + ' <button type="button" id="btnpdf" class="btn btn-warning" value="Export To PDF">Descarga de PDF</button> 	'

                                })

                                $('#ventanaModular').modal('hide');
                                $('#btnpdf').click(function() {


                                    window.jsPDF = window.jspdf.jsPDF;

                                    var pdf = new jsPDF();


                                    pdf.text(70, 20, "COMPROBANTE DE PEDIDO");

                                    pdf.text(10, 30, "Comprobante de Facturacion");
                                    pdf.autoTable({
                                        theme: 'striped',
                                        html: '#factura',
                                        startY: 40
                                    });

                                    pdf.text(10, 70, "Datos del cliente");
                                    pdf.autoTable({
                                        theme: 'striped',
                                        html: '#tblCliente',
                                        startY: 80
                                    })

                                    pdf.text(10, 110, "Lista de productos");
                                    pdf.autoTable({
                                        theme: 'grid',
                                        html: '#tblPedido',
                                        startY: 120
                                    })

                                    pdf.save('mipdf.pdf');



                                });

                            },
                            error: function() {
                                Swal.fire({
                                    title: translate('TitleDinamicoError'),
                                    icon: 'error',
                                })
                            }
                        })
                    } else if (result.isDenied) {
                        Swal.fire({
                            title: translate('TitleDinamicoCancelado'),
                        })
                        $('#ventanaModular').modal('hide');
                    }
                })
            }
        })
    })

    //Formulario de consulta de existencia 
    jQuery(function() {
        $('#formConsultaExistencia').validetta({
            realTime: true,
            onValid: function(e) {
                e.preventDefault()
                Swal.fire({
                    title: translate('TitleDinamico'),
                    text: translate('TextDinamico'),
                    icon: 'question',
                    confirmButtonText: translate('ConfirmDinamico'),
                    confirmButtonColor: 'orange',
                    showDenyButton: true, //No 
                    denyButtonText: translate('DenyDinamico'),
                    denyButtonColor: ' blue ',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: $('#formConsultaExistencia').attr('method'),
                            url: $('#formConsultaExistencia').attr('action'),
                            data: $('#formConsultaExistencia').serialize(),
                            success: function(response) {
                                //Imprime la respuesta de php
                                $('#prueba').html(response)
                                Swal.fire({
                                        title: translate('TitleSuccessDinamico'),
                                        icon: 'success',

                                    })
                                    //Cierra la modal
                                $('#modal1').modal('hide')
                            },
                            error: function() {
                                console.log(translate('TitleDinamicoError'))
                            }
                        })
                    } else if (result.isDenied) {
                        Swal.fire({
                            title: translate('TitleDinamicoCancelado')
                        })
                        $('#modal1').modal('hide')
                    }
                })
            }
        })
    })

    //Formulario de gestion de usuario 
    $('#formGestionUsuario').validetta({
        realTime: true,
        onValid: function(e) {
            e.preventDefault()
            Swal.fire({
                title: translate('Title'),
                text: translate('Text'),
                icon: 'question',
                confirmButtonText: translate('confirmButtonText'),
                confirmButtonColor: 'orange',
                showDenyButton: true, //No 
                denyButtonText: translate('denyButtonText'),
                denyButtonColor: ' blue ',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: $('#formGestionUsuario').attr('method'),
                        url: $('#formGestionUsuario').attr('action'),
                        data: $('#formGestionUsuario').serialize(),
                        success: function(response) {
                            $('#prueba2').html(response)
                            Swal.fire({
                                    title: translate('successTitle'),
                                    icon: 'success',

                                })
                                //Cierra la modal
                            $('#modal2').modal('hide');
                        },
                        error: function() {
                            console.log(translate('TitleDinamicoError'))
                        }
                    })
                } else if (result.isDenied) {
                    Swal.fire({
                        title: translate('TitleDinamicoCancelado')
                    })
                    $('#modal2').modal('hide');
                }
            })
        }
    })

    //Al momento de enviar el formulario
    $('#formularioIngreso').validetta({
        realTime: true,
        onValid: function(e) {
            e.preventDefault()
            Swal.fire({
                title: translate('Title'),
                text: translate('Text'),
                icon: 'question',
                confirmButtonText: translate('confirmButtonText'),
                confirmButtonColor: 'lila',
                showDenyButton: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: $('#formularioIngreso').attr('method'),
                        url: $('#formularioIngreso').attr('action'),
                        data: $('#formularioIngreso').serialize(),
                        success: function() {
                            Swal.fire({
                                    title: translate('successTitle'),
                                    text: translate('successText'),
                                    icon: 'success'
                                })
                                // window.location = '../php/procesar.php'
                        },
                        error: function() {
                            Swal.fire({
                                title: translate('errorTitle'),
                                icon: 'error'
                            })
                        }
                    })
                }
            })
        }
    });
})