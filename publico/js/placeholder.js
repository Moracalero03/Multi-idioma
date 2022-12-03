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

    // //Traduccion de placeholder por formulario
    const data = document.querySelectorAll("[data-section]");

    for (const info of data) {
        const section = info.dataset.section;

        if (section == "formSolicitudPedidos") {
            //datos del cliente
            document.getElementsByName('txtNombreSP')[0].placeholder = translate('PLNomCompletoSP');
            document.getElementsByName('txtCorreoSP')[0].placeholder = translate('PLcorreoSP');
            document.getElementsByName('txtIdentificacionSP')[0].placeholder = translate('PLNumIndentificacionSP');
            document.getElementsByName('txtTelefonoSP')[0].placeholder = translate('PLNumTelefonoSP');
            document.getElementsByName('txtDireccionSP')[0].placeholder = translate('PLDireccionSP');

            //formulario para facturar
            document.getElementsByName('txtNomTarjetaSP')[0].placeholder = translate('PLNomTarjetaSP');
            document.getElementsByName('txtNumTarjetaSP')[0].placeholder = translate('PLNumTarjetaSP');
            document.getElementsByName('txtComprobanteSP')[0].placeholder = translate('PLComprobanteSP');
        }

        if (section == "formGestionUsuario") {
            //formulario de gestion de usuario
            document.getElementsByName('txtid')[0].placeholder = translate('placeholderId');
            document.getElementsByName('txtNombreU')[0].placeholder = translate('PLNomCompletoU');
            document.getElementsByName('txtApellidoU')[0].placeholder = translate('PLApellidoU');
            document.getElementsByName('txtNumeroIdentificacionU')[0].placeholder = translate('PLNumIndentificacionU');
            document.getElementsByName('txtCorreoU')[0].placeholder = translate('PLcorreoU');
            document.getElementsByName('txtNacionalidadU')[0].placeholder = translate('PLNacionalidadU');
            document.getElementsByName('txtDireccionU')[0].placeholder = translate('PLDireccionU');
            document.getElementsByName('txtTelefonoU')[0].placeholder = translate('PLNumTelefonoU');
        }

        if (section == "formConsultaExistencia") {
            //formulario de consulta de existencia
            document.getElementsByName('txtNombreCE')[0].placeholder = translate('PLNombreCE');
            document.getElementsByName('txtCorreoCE')[0].placeholder = translate('PLCorreoCE');
            document.getElementsByName('txtNacionalidadCE')[0].placeholder = translate('PLNacionalidadCE');
            document.getElementsByName('txtNIdentidadCE')[0].placeholder = translate('PLNIdentidadCE');
            document.getElementsByName('txtTelefonoCE')[0].placeholder = translate('PLTelefonoCE');
            document.getElementsByName('txtDireccionCE')[0].placeholder = translate('PLDireccionCE');
            document.getElementsByName('txtProductoCE')[0].placeholder = translate('PLProductoCE');
            document.getElementsByName('txtCantidadCE')[0].placeholder = translate('PLCantidadCE');
            document.getElementsByName('txtPrecioUnitarioCE')[0].placeholder = translate('PLPrecioUnitarioCE');
            document.getElementsByName('txtTotalIvaCE')[0].placeholder = translate('placeholderTotalIva');
        }
    }

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