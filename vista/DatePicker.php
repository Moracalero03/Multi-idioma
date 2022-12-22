<?php
include_once('../includes/funcionesComunes.php');
$value="Calidad";
$datasection="vistaCalidad";

$col8="col-8 col-sm-12 col-md-12 col-lg-12";
include('../includes/cabecera.php');
?>
             

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatePicker</title> 


     

</head>
<body> 

<div class="container-fluid">
    <div class="row">
    <div class="col-lg-4">
        <label>Seleccione una fecha</label>
        <div class="input-group date">
            <input type="text" class="form-control datepicker">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    
</body>
</html>





<?php
    include('../includes/pie.php');
?>