<?php
include_once('../includes/funcionesComunes.php');
$value="Calidad";
$datasection="vistaCalidad";

include('../includes/cabecera.php');
?>
<div class="col-lg-8 mx-auto mt-3"> 
<script>
                document.write($.fn.fileinputBsVersion);
            </script>
    <form enctype="multipart/form-data">
            <div class="file-loading">
                <input id="file" name="file[]" type="file" multiple>
            </div>
    </form>
</div>

<?php
    include('../includes/pie.php');
?>