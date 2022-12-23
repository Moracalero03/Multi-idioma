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

            $('#file').fileinput({
                language: 'es',
                uploadUrl: '#',
                allowedFileExtensions: ['CSV']
            });

            $('.datepicker').datepicker('destroy', '');
            $('.datepicker').datepicker({
                language: 'es'

            });

            //SELECTOR DE IDIOMA DINAMICO PARA PROCESAR UN FORMULARIO EN ESPAÑOL
            const formulario = document.querySelectorAll('form');
            const idioma = 'es';
            // if (formulario != null) {
            //     procesarDinamico(idioma, formulario);
            // }

            const cdn = document.getElementById('validationIdioma');
            if (cdn != null) {
                validationIdioma(idioma, cdn);
            }

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


            let fileLoading = document.querySelector('.file-loading');
            let file = document.querySelector('#file');
            // let hidden = document.querySelector('.hidden-xs');

            console.log(fileLoading);
            console.log(file);
            // console.log(hidden);

            if (fileLoading != null && file) {
                fileLoading.remove();
                file.remove();
                $('#file').fileinput({
                    language: 'en',
                    uploadUrl: '#',
                    allowedFileExtensions: ['csv']
                })
            }

            $('.datepicker').datepicker('destroy', '');
            $('.datepicker').datepicker({
                language: 'en-CA'

            });


            //SELECTOR DE IDIOMA DINAMICO PARA PROCESAR UN FORMULARIO EN INGLES
            const formulario = document.querySelectorAll('form');
            const idioma = 'en';
            // if (formulario != null) {
            //     procesarDinamico(idioma, formulario);
            // }

            const cdn = document.getElementById('validationIdioma');
            if (cdn != null) {
                validationIdioma(idioma, cdn);
            }

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

    //FUNCION PARA CAMBIAR DINAMICAMENTE EL ATRIBUTO ACTION DE UNA FORMULARIO
    // function procesarDinamico(idioma, form) {
    //     for (const formulario of form) {

    //         //Variable que toma el valor del action por cada etiqueta de formulario
    //         const action = formulario.getAttribute('action');

    //         //Variable con la extraccion del contenido despues de 18 caracteres(nombre del archivo para procesar)
    //         const namePhp = action.substr(18);

    //         //Variable que contiene el enlace con los parametros dinamicos de idioma 
    //         const attr = '../publico/php/' + idioma + '-' + namePhp;

    //         //Setea el atributo action con los nuevos valores
    //         formulario.setAttribute('action', attr);
    //     }

    // }

    function validationIdioma(idioma, cdn) {
        console.log(cdn);
        const src = 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-' + idioma + '.min.js'
        cdn.setAttribute('src', src);

    }

};