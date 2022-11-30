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
            <input class="form-control" type="number" name="txtCantidad[]" data-validetta="required">
        </td>
        <td>
            <button type="button" class="btn" id="btnEliminar"><img src="../publico/img/eliminar.png" width="20rem" height="20rem" alt=""></button>
        </td>
    </tr>`
            $('#tblFilas').append(fila)
        })

        //Guardar personal

        $('#frmDinamico').validetta({
                realTime: true,
                //se ejecutara cuando el formulario sea totalmente valido
                onValid: function(e) {
                    //Previene que se haga el envio antes de confirmar con una alerta
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
                                    // console.log(response)
                                    $('#datos').html(response)
                                    $('#tblFilas > tr').remove()
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
            //se ejecutara cuando el formulario sea totalmente valido
            onValid: function(e) {
                //Previene que se haga el envio antes de confirmar con una alerta
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
                                console.log(response)
                                Swal.fire({
                                    title: translate('TitleFacturarDinamicoSuccess'),
                                    icon: 'success',
                                    html: response
                                })

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
                            text: translate('TitleDinamicoCancelado'),
                        })
                    }
                })
            }
        })
    })
})