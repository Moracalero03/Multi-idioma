<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>intento</title>
  <link rel="stylesheet" href="../publico/js/jQuery-Validation-Engine-master/css/validationEngine.jquery.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../publico/js/jQuery-Validation-Engine-master/js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="../publico/js/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-es.js"></script>

    <script type="text/javascript" src="../publico/js/global.js"></script>
</head>
<body>
  

<form  action="../publico/php/procesarP.php" id="mi_formulario" method="POST">
  correo
<input id="email" type="text" name="email" ><br>
fecha
<input id="date" type="text" name="date" ><br>
Nombre
<input id="first_name" type="text" name="first_name" ><br>

<button type="submit">Enviar Datos</button>
</form>
<div id="intento1">
  
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>



