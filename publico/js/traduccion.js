//CARGAR LA PAGINA CON EL IDIOMA DEL NAVEGADOR
$.getJSON("../publico/js/lang.json", function(json) {

    if (!sessionStorage.getItem("lang")) {
        sessionStorage.setItem("lang", $('.translate').attr('id'));

    }

    var lang = sessionStorage.getItem("lang");
    var doc = json;

    $('.lang').each(function() {
        $(this).text(doc[lang][$(this).attr('key')]);
    });
});


//CARGAR EL IDIOMA DE LA PAGINA POR BOTON
var check = document.querySelector(".check");

check.addEventListener('click', idioma);

function idioma() {
    let id = check.checked;
    let monthPicker = document.querySelector('.monthpick');
    let yearPicker = document.querySelector('.yearpick');
    const btnElement = document.getElementById("idioma");
    const textsToChange = document.querySelectorAll("[data-section]");

    if (id == true) {

        $(document).ready(function() {
            // $("#box").load("/file.php");

            //Idioma del datatable
            $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
                },
                stateSave: true,
                "bDestroy": true
            })

            //Idioma del select monthPicker
            if (monthPicker != null && yearPicker != null) {
                monthPicker.remove();
                yearPicker.remove();
                $('#yearpicker').monthpicker({
                    'lang': 'es',
                    'minYear': 2022,
                    'maxYear': 2050
                });
            }

            // loadScript("../publico/js/validettaLang-es-ES.js", MiArchivoCargado);

            //Añade el paquete de validetta en español
            // addScript("../publico/js/validettaLang-es-ES.js");

            const lenguaje = document.querySelector('#frmDinamico');
            lenguaje.setAttribute('action', '../publico/php/es-procesarProductos.php')

        });

        //TRADUCCIONES DE LOS DATA-SECTION
        const changeLanguage = async language => {
            const requestJson = await fetch(`../publico/js/es.json`)
            const texts = await requestJson.json();

            for (const textToChange of textsToChange) {
                const section = textToChange.dataset.section;
                const value = textToChange.dataset.value;

                textToChange.innerHTML = texts[section][value];
            }

        };

        btnElement.addEventListener("click", (e) => {
            changeLanguage(e.target.parentElement.dataset.language);
        });

    } else if (id == false) {

        $(document).ready(function() {

            //Idioma del datatable
            $('#example').DataTable({
                stateSave: true,
                "bDestroy": true
            })

            //Idioma del select monthPicker
            if (monthPicker != null && yearPicker != null) {
                monthPicker.remove();
                yearPicker.remove();
                $('#yearpicker').monthpicker({
                    'minYear': 2022,
                    'maxYear': 2050
                });
            }

            // const validar = document.getElementById('validar');
            // if (validar != null) {
            //     validar.remove();
            //     // validetta.setAttribute('disable', '');
            // }

            // const validetta = document.getElementById('validetta');
            // if (validetta != null) {
            //     validetta.remove();
            //     // validetta.setAttribute('disable', '');
            // }

            const lenguaje = document.querySelector('#frmDinamico');
            lenguaje.setAttribute('action', '../publico/php/en-procesarProductos.php')


        });
        //TRADUCCIONES DE LOS DATA-SECTION
        const changeLanguage = async language => {
            const requestJson = await fetch(`../publico/js/en.json`)
            const texts = await requestJson.json();

            for (const textToChange of textsToChange) {
                const section = textToChange.dataset.section;
                const value = textToChange.dataset.value;

                textToChange.innerHTML = texts[section][value];
            }
        };

        btnElement.addEventListener("click", (e) => {
            changeLanguage(e.target.parentElement.dataset.language);
        });
    }

    function addScript(url) {
        var script = $("<script>", {
            src: url,
            type: "text/javascript",
            id: "validetta"
        });

        $("footer").append(script);
    }

    // function loadScript(url, callback) {

    //     var head = document.getElementsByTagName('head')[0];
    //     var script = document.createElement('script');
    //     script.type = 'text/javascript';
    //     script.src = url;
    //     script.id = 'validar';
    //     script.onreadystatechange = callback;
    //     script.onload = callback;
    //     head.appendChild(script);
    // }

    // function MiArchivoCargado() {
    //     alert('../publico/js/validettaLang-es-ES.js ya ha sido cargado');
    // }
};