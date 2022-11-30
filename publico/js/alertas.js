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

    jQuery(function() {
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

    });
});