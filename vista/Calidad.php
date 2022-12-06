<?php
include_once('../includes/funcionesComunes.php');
$value="Calidad";
$datasection="vistaCalidad";

$col8="col-8 col-sm-12 col-md-12 col-lg-12";
include('../includes/cabecera.php');
?>
<div class="col-lg-12">                   
                <div class="p-4">
                   
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner ">
			    <div class="carousel-item active center-block">
			      <!--<img class="d-block w-100"   height="425" src="../publico/img/FINAL CALIDAD.jpg" alt="First slide">-->
			      <img class="rounded mx-auto d-block w-75"   height="400" src="../publico/img/FINAL CALIDAD.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="rounded mx-auto d-block w-75"   height="400" src="../publico/img/FINAL RSE.png" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="rounded mx-auto d-block w-75"   height="400" src="../publico/img/FINAL FILOSOFIA.png" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		</div>



<div class="container border-primary">
	<p class="lang" key="textoC" data-section="<?=$datasection?>" data-value="textoC" style="text-align: justify;">Somos una empresa comprometida con la calidad, elaborando productos con la mejor tecnología y personal más competente.En el año 2008, Sacos Sintéticos Centroamericanos incursionó en el proceso de certificación de su Sistema de Gestión de la Calidad bajo la norma ISO 9001:2008, logrando convertirse en “Empresa Certificada” en el año 2009. El compromiso con la CALIDAD es una de nuestras principales fortalezas, lo cual nos ha permitido crear la base para ser líderes en la región, controlando cada uno de los factores importantes en el proceso productivo. Logramos un alto nivel de calidad que supera las expectativas de nuestros clientes, cumpliendo el objetivo de satisfacerles con soluciones completas y confiables, que garantizan la preservación de los productos que ellos envasan y contribuyendo con el posicionamiento de su marca.</p>
	<br>
</div>
 
<br>
<?php
    include('../includes/pie.php');
?>