<?php 
$raiz ="../";
require_once('../publico/php/lenguaje.php'); //vista del formulario
require_once('../publico/php/db.php'); //creacion de archivos json
?>
<!DOCTYPE html>
<html lang="<?php echo key($langs) ?>" dir="ltr"  class="translate" id="<?php echo key($langs) ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="lang" key="<?=$value?>" data-section="global" data-value="<?=$value?>"></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$raiz?>publico/css/estilos.css">
    <link rel="stylesheet" href="<?=$raiz?>publico/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Estilo ValidationEngine -->
    <link rel="stylesheet" href="<?=$raiz?>publico/js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../publico/js/jQuery-Validation-Engine-master/js/jquery.validationEngine.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-<?php echo key($langs) ?>.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../publico/js/alertas.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf-autotable"></script>
    <script src="<?=$raiz?>publico/js/monthpicker-master/jquery.monthpicker.min.js" type="text/javascript"></script>  

</head>
<body>
    <?php
        include('../includes/barraMenu.php');
    ?>
            <div class="col-lg-12" id="banner">
                <h1 class="lang" key="<?=$value?>" data-section="global" data-value="<?=$value?>"></h1>
            </div>
        
            <div class="container-fluid ">

            <div class="container">
            <br>
                <div class="row" id="idioma">
            <div class="col-2 d-flex justify-content-end" data-language="es">
                <span class="translate es lang" key="Español" data-section="global" data-value="Español">Español</span>
            </div>
            <div class="col-1 d-flex justify-content-center">
                <input type="checkbox" class="check">
            </div>
            <div class="col-9" data-language="en">
                <span class="translate en lang" key="Inglés" data-section="global" data-value="Inglés">Inglés</span>
            </div>
            </div>
            </div>
