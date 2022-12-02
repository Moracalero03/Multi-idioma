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
            document.getElementsByName('txtNombreP')[0].placeholder = translate('PLNomCompletoP');
            document.getElementsByName('txtCorreoP')[0].placeholder = translate('PLcorreoP');
            document.getElementsByName('txtIdentificacionP')[0].placeholder = translate('PLNumIndentificacionP');
            document.getElementsByName('txtTelefonoP')[0].placeholder = translate('PLNumTelefonoP');
            document.getElementsByName('txtDireccionP')[0].placeholder = translate('PLDireccionP');

            //formulario para facturar
            document.getElementsByName('txtNomTarjetaP')[0].placeholder = translate('PLNomTarjetaP');
            document.getElementsByName('txtNumTarjetaP')[0].placeholder = translate('PLNumTarjetaP');
            document.getElementsByName('txtComprobanteP')[0].placeholder = translate('PLComprobanteP');
        } else if (section == "formGestionUsuario") {
            //formulario de gestion de usuario
            document.getElementsByName('txtNombre')[0].placeholder = translate('PLNomCompleto');
            document.getElementsByName('txtApellido')[0].placeholder = translate('PLApellido');
            document.getElementsByName('txtNumeroIdentificacion')[0].placeholder = translate('PLNumIndentificacion');
            document.getElementsByName('txtCorreo')[0].placeholder = translate('PLCorreo');
            document.getElementsByName('txtNacionalidad')[0].placeholder = translate('PLNacionalidad');
            document.getElementsByName('txtDireccion')[0].placeholder = translate('PLDireccion');
            document.getElementsByName('txtTelefono')[0].placeholder = translate('PLTelefono');
        } else if (section == "formConsultaExistencia") {
            //formulario de consulta de existencia
            document.getElementsByName('txtNombre')[0].placeholder = translate('PLNombre');
            document.getElementsByName('txtCorreo')[0].placeholder = translate('PLCorreo');
            document.getElementsByName('txtNacionalidad')[0].placeholder = translate('PLNacionalidad');
            document.getElementsByName('txtNIdentidad')[0].placeholder = translate('PLNIdentidad');
            document.getElementsByName('txtTelefono')[0].placeholder = translate('PLTelefono');
            document.getElementsByName('txtDireccion')[0].placeholder = translate('PLDireccion');
            document.getElementsByName('txtProducto')[0].placeholder = translate('PLProducto');
            document.getElementsByName('txtCantidad')[0].placeholder = translate('PLCantidad');
            document.getElementsByName('txtPrecioUnitario')[0].placeholder = translate('PLPrecioUnitario');
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