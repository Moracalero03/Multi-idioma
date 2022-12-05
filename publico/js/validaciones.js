//VALIDACIONES
$.getJSON("../publico/js/lang.json", function(json) {

    //CAMBIO DE IDIOMA CON EL NAVEGADOR
    var lang = sessionStorage.getItem("lang");
    let strings = json;


    //CAMBIO DE IDIOMA A LOS PLACEHOLDER CON BOTON
    var check = document.querySelector(".check");

    function translate(str) {
        //Evalua el estado del checkbox y cambia el idioma 
        let id = check.checked;

        if (id == true) {
            return strings["es"][str];
        } else if (id == false) {
            return strings["en"][str];
        }

        if (!strings.hasOwnProperty(lang) || !strings[lang].hasOwnProperty(str)) {
            // El idioma o la cadena a traducir (propiedad) no existe
            return str;
        }

        // Devolver traducción
        return strings[lang][str];

    }

    //input
    //correo = document.getElementsByName("txtCorreo").value;
    //contra = document.getElementsByName("txtContraseña").value;

    //span
    // spancorreo = document.getElementById('warnings');
    // spancontra = document.getElementById('warningscontra');

    /*
        if (correo == null) {
            spancorreo.innerHTML = translate('spancorreo');
        }

        if (contra == null) {
            spancontra.innerHTML = translate('spancontra');
        }
    */
    const data = document.querySelectorAll("[data-section]");

    for (const info of data) {
        const section = info.dataset.section;

        if (section == 'formGestionUsuario') {
            //input de  gestion de usuario 
            txtid = document.getElementsByName("txtid").value;
            txtNombreU = document.getElementsByName("txtNombreU").value;
            txtApellidoU = document.getElementsByName("txtApellidoU").value;
            txtNumeroIdentificacionU = document.getElementsByName("txtNumeroIdentificacionU").value;
            txtCorreoU = document.getElementsByName("txtCorreoU").value;
            txtNacionalidadU = document.getElementsByName("txtNacionalidadU").value;
            txtDireccionU = document.getElementsByName("txtDireccionU").value;
            txtTelefonoU = document.getElementsByName("txtTelefonoU").value;

            //span de usuario
            spanId = document.getElementById('warningsId');
            spanNombre = document.getElementById('warningsNombre');
            spanApellido = document.getElementById('warningsApellido');
            spanNumeroIdentificacion = document.getElementById('warningsNumeroIdentificacion');
            spanCorreo = document.getElementById('warningstCorreo');
            spanNacionalidad = document.getElementById('warningsNacionalidad');
            spanDireccion = document.getElementById('warningsDireccion');
            spanTelefono = document.getElementById('warningsTelefono');

            if (txtid == null) {
                spanId.innerHTML = translate('spanId');
            }

            if (txtNombreU == null) {
                spanNombre.innerHTML = translate('spanNombre')
            }
            if (txtApellidoU == null) {
                spanApellido.innerHTML = translate('spanApellido')
            }
            if (txtNumeroIdentificacionU == null) {
                spanNumeroIdentificacion.innerHTML = translate('spanNumeroIdentificacion');
            }
            if (txtCorreoU == null) {
                spanCorreo.innerHTML = translate('spanCorreo');
            }
            if (txtNacionalidadU == null) {
                spanNacionalidad.innerHTML = translate('spanNacionalidad');
            }
            if (txtDireccionU == null) {
                spanDireccion.innerHTML = translate('spanDireccion');
            }

            if (txtTelefonoU == null) {
                spanTelefono.innerHTML = translate('spanTelefono');
            }
        }

        if (section == 'formConsultaExistencia') {
            //input de consulta de existencia
            txtNombreCE = document.getElementsByName("txtNombreCE").value;
            txtCorreoCE = document.getElementsByName("txtCorreoCE").value;
            txtNacionalidadCE = document.getElementsByName("txtNacionalidadCE").value;
            txtNIdentidadCE = document.getElementsByName("txtNIdentidadCE").value;
            txtTelefonoCE = document.getElementsByName("txtTelefonoCE").value;
            txtDireccionCE = document.getElementsByName("txtDireccionCE").value;
            txtProductoCE = document.getElementsByName("txtProductoCE").value;
            txtCantidadCE = document.getElementsByName("txtCantidadCE").value;
            txtPrecioUnitarioCE = document.getElementsByName("txtPrecioUnitarioCE").value;
            txtTotalIvaCE = document.getElementsByName("txtTotalIvaCE").value;

            //span de consulta de existencia 

            spannombreCE = document.getElementById('warningsnombreCE');
            spancorreoCE = document.getElementById('warningscorreoCE');
            spannacionalidadCE = document.getElementById('warningsnacionalidadCE');
            spannumeroidentidadCE = document.getElementById('warningsnumeroidentidadCE');
            spantelefonoCE = document.getElementById('warningstelefonoCE');
            spandireccionCE = document.getElementById('warningsdireccionCE');
            spanproductoCE = document.getElementById('warningsproductoCE');
            spancantidadCE = document.getElementById('warningscantidadCE');
            spanprecioUnitarioCE = document.getElementById('warningsprecioUnitarioCE');
            spantotalIvaCE = document.getElementById('warningstotalIvaCE');

            if (txtNombreCE == null) {
                spannombreCE.innerHTML = translate('spannombreCE');
            }
            if (txtCorreoCE == null) {
                spancorreoCE.innerHTML = translate('spancorreoCE');
            }
            if (txtNacionalidadCE == null) {
                spannacionalidadCE.innerHTML = translate('spannacionalidadCE');
            }
            if (txtNIdentidadCE == null) {
                spannumeroidentidadCE.innerHTML = translate('spannumeroidentidadCE');
            }
            if (txtTelefonoCE == null) {
                spantelefonoCE.innerHTML = translate('spantelefonoCE');
            }
            if (txtDireccionCE == null) {
                spandireccionCE.innerHTML = translate('spandireccionCE');
            }
            if (txtProductoCE == null) {
                spanproductoCE.innerHTML = translate('spanproductoCE');
            }
            if (txtCantidadCE == null) {
                spancantidadCE.innerHTML = translate('spancantidadCE');
            }
            if (txtPrecioUnitarioCE == null) {
                spanprecioUnitarioCE.innerHTML = translate('spanprecioUnitarioCE');
            }
            if (txtTotalIvaCE == null) {
                spantotalIvaCE.innerHTML = translate('spantotalIvaCE');
            }
        }

        if (section == 'formSolicitudPedidos') {
            //input de solicitud de pedidos 
            txtNombreSP = document.getElementsByName("txtNombreSP").value;
            txtCorreoSP = document.getElementsByName("txtCorreoSP").value;
            txtIdentificacionSP = document.getElementsByName("txtIdentificacionSP").value;
            txtTelefonoSP = document.getElementsByName("txtTelefonoSP").value;
            txtDireccionSP = document.getElementsByName("txtDireccionSP").value;
            txtCantidadSP = document.getElementsByName("txtCantidadSP").value;
            txtNomTarjetaSP = document.getElementsByName("txtNomTarjetaSP").value;
            txtNumTarjetaSP = document.getElementsByName("txtNumTarjetaSP").value;
            txtFechaVenceSP = document.getElementsByName("txtFechaVenceSP").value;
            txtComprobanteSP = document.getElementsByName("txtComprobanteSP").value;

            //span de solicitud de pedidos
            spanNombreCompletoSP = document.getElementById('warningsNombreCompletoSP');
            spanCorreoElectronicoSP = document.getElementById('warningsCorreoElectronicoSP');
            spanNumIndentificacionSP = document.getElementById('warningsNumIndentificacionSP');
            spanTelefonoSP = document.getElementById('warningsTelefonoSP');
            spanDireccionSP = document.getElementById('warningsDireccionSP');
            spanNombreTarjeta = document.getElementById('warningsNombreTarjeta');
            spanNumeroTarjeta = document.getElementById('warningsNumeroTarjeta');
            spanFechaVence = document.getElementById('warningsFechaVence');

            if (txtNombreSP == null) {
                spanNombreCompletoSP.innerHTML = translate('spanNombreCompletoSP');
            }

            if (txtCorreoSP == null) {
                spanCorreoElectronicoSP.innerHTML = translate('spanCorreoElectronicoSP');
            }
            if (txtIdentificacionSP == null) {
                spanNumIndentificacionSP.innerHTML = translate('spanNumIndentificacionSP');
            }
            if (txtTelefonoSP == null) {
                spanTelefonoSP.innerHTML = translate('spanTelefonoSP');
            }
            if (txtDireccionSP == null) {
                spanDireccionSP.innerHTML = translate('spanDireccionSP');
            }
            if (txtNomTarjetaSP == null) {
                spanNombreTarjeta.innerHTML = translate('spanNombreTarjeta');
            }
            if (txtNumTarjetaSP == null) {
                spanNumeroTarjeta.innerHTML = translate('spanNumeroTarjeta');
            }
            if (txtFechaVenceSP == null) {
                spanFechaVence.innerHTML = translate('spanFechaVence');
            }
        }
    }
})