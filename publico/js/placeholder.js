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

    

// //TRADUCCION DE PLACEHOLDER CONSULTA DE EXISTENCIA
    // if ("<?php $datasection?>" == "formConsultaExistencia") {
       
        document.getElementsByName('txtNombreCE')[0].placeholder = translate('PLNomCompletoCE');
        document.getElementsByName('txtCorreoCE')[0].placeholder = translate('PLCorreoCE');
        document.getElementsByName('txtNacionalidadCE')[0].placeholder = translate('PLNacionalidadCE');
        document.getElementsByName('txtNIdentidadCE')[0].placeholder = translate('PLNIdentidadCE');
        document.getElementsByName('txtTelefonoCE')[0].placeholder = translate('PLTelefonoCE');
        document.getElementsByName('txtDireccionCE')[0].placeholder = translate('PLDireccionCE');
        document.getElementsByName('txtProductoCE')[0].placeholder = translate('PLProductoCE');
        document.getElementsByName('txtCantidadCE')[0].placeholder = translate('PLCantidadCE');
        document.getElementsByName('txtPrecioUnitarioCE')[0].placeholder = translate('PLPrecioUnitarioCE');
       

        // }

// //TRADUCCION DE PLACEHOLDER USUARIO
    // if ("<?php $datasection?>" == "formGestionUsuario") {
        //id
        document.getElementsByName('txtid')[0].placeholder = translate('placeholderId');
        document.getElementsByName('txtNombreU')[0].placeholder = translate('PLNomCompletoU');
        document.getElementsByName('txtApellidoU')[0].placeholder = translate('PLApellidoU');
        document.getElementsByName('txtNumeroIdentificacionU')[0].placeholder = translate('PLNumIndentificacionU');
        document.getElementsByName('txtCorreoU')[0].placeholder = translate('PLcorreoU');
        document.getElementsByName('txtNacionalidadU')[0].placeholder = translate('PLNacionalidadU');
        document.getElementsByName('txtDireccionU')[0].placeholder = translate('PLDireccionU');
        document.getElementsByName('txtTelefonoU')[0].placeholder = translate('PLNumTelefonoU');
        
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