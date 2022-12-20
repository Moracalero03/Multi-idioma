</div>
        </div>
<footer >
		<div class="footer-copy-redes sticky-bottom">
			<div class="main-copy-redes">
				<div class="footer-copy">
                <span> &copy;</span> <span class="lang" key="Derechos" data-section="global" data-value="Derechos"> 2022, SACOS EL SALVADOR | Reservados todos los derechos.</span>
				</div>
				<div class="footer-redes">
					<a target="_blank" href="https://www.facebook.com/sacoselsalvador/" rel="noopener noreferrer" class="fa fa-facebook"></a>
					<a target="_blank" href="https://twitter.com/sasicasa?lang=es" rel="noopener noreferrer" class="fa fa-twitter"></a>
					<a target="_blank" href="https://sv.linkedin.com/company/sasicasa" rel="noopener noreferrer" class="fa fa-linkedin"></a>
				</div>
			</div>
		</div>
</footer> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        // $.getJSON('http://ip-api.com/json', function(data) {
        //     $('#pais').val(data.country);
        //     $('#ip').val(data.query);
        //     $('#codigoPais').val(data.countryCode);
        // })

        $(document).ready(function (e) {
        var jsvar='<?=$lang?>';

        if ( jsvar=='es') {
            window.onload= check();
            $(document).ready(function () {
            //Idioma del datatable
			$('#example').DataTable({
                "language": {
        		"url":"//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"},
                stateSave: true,
                "bDestroy": true})
            }); 

           //Idioma del select monthPicker
            $('#yearpicker').monthpicker({
                'lang': 'es',
                'minYear': 2022,
                'maxYear': 2050
            });  

            addScript("https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-es.min.js")
            
        }else if (jsvar=='en') {
            window.onload= uncheck();
            $(document).ready(function () {
            //Idioma del datatable
			$('#example').DataTable({
                stateSave: true,
                "bDestroy": true
            }) 

            //Idioma del select monthPicker
            $('#yearpicker').monthpicker({
                'minYear': 2022,
                'maxYear': 2050
            });

            const url = document.querySelector('#validation');
            if (url != null) {
                url.remove()
                addScript("https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js")
            }

            });  

        }

        function uncheck() {
            document.querySelector(".check").checked = false;
        }

        function check() {
            document.querySelector(".check").checked = true;
        } 

        });
        
        function addScript(url) {
            var script = $("<script>", {
                    src: url,
                    type: "text/javascript", 
                    id: "validation"
                });

            $("head").append(script);
        }   

    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
    
    <script src="../publico/js/placeholder.js"></script>
    <script src="../publico/js/traduccion.js"></script>    
    
    <script src="../publico/js/fcAlerta.js"></script>
    <!-- <script src="../publico/js/span.js"></script>  -->
    <!-- <script type="text/javascript" src="../publico/js/global.js"></script> -->
</body>
</html>