//ALERTA
$.getJSON("../publico/js/lang.json", function(json) {
    //CAMBIO DE IDIOMA CON EL NAVEGADOR
    var lang = sessionStorage.getItem("lang");
    let strings = json;

    function translate(str) {

        if (!strings.hasOwnProperty(lang) || !strings[lang].hasOwnProperty(str)) {
            // El idioma o la cadena a traducir (propiedad) no existe
            return str;
        }

        // Devolver traducción
        return strings[lang][str];

    }

    // module.exports = {
    //     "translate": translate
    // }


    // //TRADUCCION DE PLACEHOLDER
    // if ("<?php $datasection?>" == "formSolicitudPedidos") {
    document.getElementsByName('txtNombre')[0].placeholder = translate('PLNomCompleto');
    document.getElementsByName('txtCorreo')[0].placeholder = translate('PLcorreo');
    document.getElementsByName('txtIdentificacion')[0].placeholder = translate('PLNumIndentificacion');
    document.getElementsByName('txtTelefono')[0].placeholder = translate('PLNumTelefono');
    document.getElementsByName('txtNomTarjeta')[0].placeholder = translate('PLNomTarjeta');
    document.getElementsByName('txtNumTarjeta')[0].placeholder = translate('PLNumTarjeta');
    document.getElementsByName('txtDireccion')[0].placeholder = translate('PLDireccion');
    document.getElementsByName('txtComprobante')[0].placeholder = translate('PLComprobante');
    // }

// //TRADUCCION DE PLACEHOLDER USUARIO
    // if ("<?php $datasection?>" == "formGestionUsuario") {
        
        document.getElementsByName('txtNombre')[0].placeholder = translate('PLNombre');
        document.getElementsByName('txtApellido')[0].placeholder = translate('PLApellido');
        document.getElementsByName('txtNumeroIdentificacion')[0].placeholder = translate('PLNumIndentificacion');
        document.getElementsByName('txtCorreo')[0].placeholder = translate('PLCorreo');
        document.getElementsByName('txtNacionalidad')[0].placeholder = translate('PLNacionalidad');
        document.getElementsByName('txtDireccion')[0].placeholder = translate('PLDireccion');
        document.getElementsByName('txtTelefono')[0].placeholder = translate('PLTelefono');
        // }

// //TRADUCCION DE PLACEHOLDER CONSULTA DE EXISTENCIA
    // if ("<?php $datasection?>" == "formConsultaExistencia") {
       
        document.getElementsByName('txtNombre')[0].placeholder = translate('PLNombre');
        document.getElementsByName('txtCorreo')[0].placeholder = translate('PLCorreo');
        document.getElementsByName('txtNacionalidad')[0].placeholder = translate('PLNacionalidad');
        document.getElementsByName('txtNIdentidad')[0].placeholder = translate('PLNIdentidad');
        document.getElementsByName('txtTelefono')[0].placeholder = translate('PLTelefono');
        document.getElementsByName('txtDireccion')[0].placeholder = translate('PLDireccion');
        document.getElementsByName('txtProducto')[0].placeholder = translate('PLProducto');
        document.getElementsByName('txtCantidad')[0].placeholder = translate('PLCantidad');
        document.getElementsByName('txtPrecioUnitario')[0].placeholder = translate('PLPrecioUnitario');
       
        // }


    //CARGAR EL IDIOMA DE LA PAGINA POR BOTON
    var check = document.querySelector(".check");

    check.addEventListener('click', idioma);

    function idioma() {
        let id = check.checked;
        if (id == true) {

            //TRADUCCIONES DE LOS DATA-SECCION
            const btnElement = document.getElementById("idioma");

            const textsToChange = document.querySelectorAll("[data-seccion]");

            const changeLanguage = async language => {
                const requestJson = await fetch(`../publico/js/es.json`)
                const texts = await requestJson.json();

                for (const textToChange of textsToChange) {
                    const section = textToChange.dataset.seccion;
                    const value = textToChange.dataset.valor;

                    textToChange.placeholder = texts[section][value];
                }

            };

            btnElement.addEventListener("click", (e) => {
                changeLanguage(e.target.parentElement.dataset.language);
            });

        } else if (id == false) {
            //TRADUCCIONES DE LOS DATA-SECCION
            const btnElement = document.getElementById("idioma");

            const textsToChange = document.querySelectorAll("[data-seccion]");

            const changeLanguage = async language => {
                const requestJson = await fetch(`../publico/js/en.json`)
                const texts = await requestJson.json();

                for (const textToChange of textsToChange) {
                    const section = textToChange.dataset.seccion;
                    const value = textToChange.dataset.valor;
                    textToChange.placeholder = texts[section][value];
                }
            };

            btnElement.addEventListener("click", (e) => {
                changeLanguage(e.target.parentElement.dataset.language);
            });
        }
    }
});