//VALIDACIONES
$.getJSON("../publico/js/lang.json", function(json) {

    //CAMBIO DE IDIOMA CON EL NAVEGADOR
    var lang = sessionStorage.getItem("lang");
    let strings = json;


    //CAMBIO DE IDIOMA A LOS PLACEHOLDER CON BOTON
    var check = document.querySelector(".check");

    function translate(str) {
        //Evalua el estado del checkbox y cambia el idioma de la alerta
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
    correo = document.getElementsByName("txtCorreo").value;
    contra = document.getElementsByName("txtContraseña").value;

    //span
    spancorreo = document.getElementById('warnings');
    spancontra = document.getElementById('warningscontra');

    if (correo == null) {
        spancorreo.innerHTML = translate('spancorreo');
    }

    if (contra == null) {
        spancontra.innerHTML = translate('spancontra');
    }
})