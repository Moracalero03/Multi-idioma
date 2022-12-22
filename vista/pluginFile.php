<?php
include_once('../includes/funcionesComunes.php');
$value="Calidad";
$datasection="vistaCalidad";

$col8="col-8 col-sm-12 col-md-12 col-lg-12";
include('../includes/cabecera.php');
?>
<div class="col-lg-12"> 

	 <form enctype="multipart/form-data">
        
        <label>Spanish Input</label>
            <div class="file-loading">
                <input id="file" name="file[]" type="file" multiple>
            </div>
     
    </form>

</div>

<?php
    include('../includes/pie.php');
?>