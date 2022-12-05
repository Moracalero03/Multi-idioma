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
};