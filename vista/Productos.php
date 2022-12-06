<?php
include_once('../includes/funcionesComunes.php');
$value="Productos";
$datasection="vistaProductos";
$col11="col-9 col-lg-12";
include('../includes/cabecera.php');
?>
<div class="col-lg-12">                   
        <div class="p-4">
<hr>

<div class="card border-light mb-3" style="max-width: 18rem, height: 600px;">
    <center><div class="card-header lang" key="tituloP" data-section="vistaProductos" data-value="tituloP">Nuestros productos</div></center>
  <div class="card-body">
    
    <p class=" lang card-text text-dark " key="textP" data-section="vistaProductos" data-value="textP">En SASICASA te brindamos soluciones de empaque para el envasado de productos utilizando tecnología de punta para la fabricación de cada saco.Nos adaptamos a las necesidades y requerimientos de nuestros clientes en cuanto a material,medidas, colores,construcción,logotipo e impresión. Te brindamos calidad y resistencia en cada saco.</p>
  </div> 
</div>

<div class="container">
    <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco2.jpeg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta1" data-section="vistaProductos" data-value="tarjeta1">Sacos laminados</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco11.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta2" data-section="vistaProductos" data-value="tarjeta2">Sacos laminados con Bopp</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                  <img class="card-img-top" src="<?=$raiz?>publico/img/saco3.jpeg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-dark lang" key="tarjeta3" data-section="vistaProductos" data-value="tarjeta3">Sacos tejidos</p>
                  </div>
                </div>
        </div>
    </div>

    <!--segunda fila de card-->

    
    <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco10.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta4" data-section="vistaProductos" data-value="tarjeta4">Tela de polipropileno</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco9.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta5" data-section="vistaProductos" data-value="tarjeta5">Lienzos y toldos</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                  <img class="card-img-top" src="<?=$raiz?>publico/img/saco5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-dark lang" key="tarjeta6" data-section="vistaProductos" data-value="tarjeta6">Lazo de polipropileno</p>
                  </div>
                </div>
        </div>

    
    
</div>
<!--tercera fila de card-->

 <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco5.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta7" data-section="vistaProductos" data-value="tarjeta7">Hielos de polipropileno</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta8" data-section="vistaProductos" data-value="tarjeta8">Bolsas jumbo sack</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                  <img class="card-img-top" src="<?=$raiz?>publico/img/saco7.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-dark lang" key="tarjeta9" data-section="vistaProductos" data-value="tarjeta9">Bolsas jumbo liner</p>
                  </div>
                </div>
        </div>
    </div>

<!--cuarta fila de card-->
    <div class="row p-2">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco8.png" height="200px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta10" data-section="vistaProductos" data-value="tarjeta10">Bolsas Promocionales</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="<?=$raiz?>publico/img/saco4.jpeg" height="200px" alt="Card image cap">
              <div class="card-body">
                <p class="card-text text-dark lang" key="tarjeta11" data-section="vistaProductos" data-value="tarjeta11">Saco fondo plano (Sacos AD STAR)</p>
              </div>
            </div>
        </div>
        
    </div>
</div>

</div>
</div>

<?php
    include('../includes/pie.php');
?>