<?php
include_once('../includes/funcionesComunes.php');
$value="Inicio";
$datasection="formInicio";
include('../includes/cabecera.php');
?>
            <div id="body" >
                    <img src="<?=$raiz?>publico/img/saco2.jpeg" alt="Sacos">
                    <p class="lang" key="texto" data-section="<?=$datasection?>" data-value="texto">En Sacos Sintéticos Centroamericanos ofrecemos soluciones de empaque, 
                        productos tejidos y no tejidos de polipropileno actaundo como líderes 
                        en el mercado salavadoreño, basando nuestro crecimiento en el mercado 
                        de la exportación.
                    </p>
                    </div>
            <?php
                include('../includes/seccion.php');
            ?>
<?php
    include('../includes/pie.php');
?>