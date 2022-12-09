function stopDefAction(evt, form) {
    const span = document.querySelectorAll(form + " span.warnings")
    const input = document.querySelectorAll(form + " input[name], textarea[name]");

    //BUCLE PARA ETIQUETAS SPAN
    for (const id of span) {
        const spanId = id;
        //Variable que obtiene solo valor del atributo data-target
        const spanData = id.getAttribute('data-target').slice(1);
        //Variable que tiene el valor del data-target sin el # que referencia al id

        //BUCLE PARA INPUT Y TEXTAREA
        for (const name of input) {
            //Variable que obtiene solo el valor del name de los input y textarea
            const inputName = name.getAttribute('name');
            //Variable que obtiene solo el valor del id de los input y textarea
            const inputId = name.getAttribute('id');

            //Condicion que evalua si muestra o esconde el elemento span 
            if ($('input[name="' + inputName + '"]').val() == "" || $('textarea[name="' + inputName + '"]').val() == "") {
                if (spanData == inputId) {
                    //Realiza un cambio en el atributo style para que muestre el elemento span
                    spanId.setAttribute('style', 'display: inline;');
                }

            } else if ($('input[name="' + inputName + '"]').val() != "" || $('textarea[name="' + inputName + '"]').val() == "") {
                if (spanData == inputId) {
                    //Realiza el cambio en el atributo style para que oculte el elemento span
                    spanId.setAttribute('style', 'display: none;');
                }

            }

        }
    }
}