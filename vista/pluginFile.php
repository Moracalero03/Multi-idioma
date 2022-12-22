<?php
include_once('../includes/funcionesComunes.php');
$value="Calidad";
$datasection="vistaCalidad";

include('../includes/cabecera.php');
?>
<div class="col-lg-8 mx-auto mt-3"> 
    <form enctype="multipart/form-data">
            <div class="file-loading">
                <input id="file" name="file[]" type="file" multiple>
            </div>
            <!-- <div class="file-loading"  style="display: none;" >
                <input id="file2" style="display: none;" name="file[]" type="file" multiple>
            </div> -->
    </form>
</div>

<?php
    include('../includes/pie.php');
?>