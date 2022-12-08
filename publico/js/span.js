 spanNombreCompletoSP = document.getElementById('warningsNombreCompletoSP');

            function stopDefAction (evt) {
                if ($('#txtNombreSP').val() == "") {
                    spanNombreCompletoSP.setAttribute('style', 'display: inline;')
                }else if ($('#txtNombreSP').val() != "") {
                    spanNombreCompletoSP.setAttribute('style', 'display: none;')
                }
                
            }                
