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
    $('#formGestionUsuario').validetta({
    realTime: true,
    //se ejecutara cuando el formulario sea totalmente valido
    onValid: function(e) {
        //Previene que se haga el envio antes de confirmar con una alerta
        e.preventDefault()
        console.log(e)
        console.log('ok')
        Swal.fire({
            title: translate('Title'),
            text: translate('Text'),
            icon: 'question',
            confirmButtonText: translate('confirmButtonText'),
            confirmButtonColor: 'orange',
            showDenyButton: true, //No 
            denyButtonText: translate('negacionButtonText'),
            denyButtonColor: ' blue ',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: $('#formGestionUsuario').attr('method'),
                    url: $('#formGestionUsuario').attr('action'),
                    data: $('#formGestionUsuario').serialize(),
                    success: function(response) {
                        console.log(response)
                        $('#prueba2').html(response)
                       Swal.fire({
                        title: translate('successTitle'),
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
            }
        })
    }
})
})
})