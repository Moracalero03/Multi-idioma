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




    <!-- s<script src="https://code.jquery.com/jquery-3.6.0.min.js" -->

    <!-- integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $.getJSON('http://ip-api.com/json', function(data) {
            $('#pais').val(data.country);
            $('#ip').val(data.query);
            $('#codigoPais').val(data.countryCode);
        })

        $(document).ready(function (e) {
        var jsvar='<?=$lang?>';

        if ( jsvar=='es') {
            window.onload= check();
            $(document).ready(function () {
			$('#example').DataTable({
                "language": {
        		"url":"//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"},
                stateSave: true,
                "bDestroy": true})
            }); 

            addScript("../publico/js/validettaLang-es-ES.js");

        }else if (jsvar=='en') {
            window.onload= uncheck();
            $(document).ready(function () {
			$('#example').DataTable({
                stateSave: true,
                "bDestroy": true
            })
            });  

            
            // const validetta = document.getElementById('validetta');
            // if(validetta!=null){
            //     // validetta.remove();
            //     validetta.setAttribute('disable', '');
            // } 

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
                    id: "validetta"
                });

            $("footer").append(script);
        }  

    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
    <script src="../publico/js/validaciones.js"></script> 
    <script src="../publico/js/validetta.min.js"></script>
    <script src="../publico/js/placeholder.js"></script>
    <script src="../publico/js/traduccion.js"></script>    
    <script src="../publico/js/alertas.js"></script> 


</body>
</html>