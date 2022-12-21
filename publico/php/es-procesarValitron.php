<?php
require '../../vendor/autoload.php'; #Cargar todas las dependencias
use Valitron\Validator as V;
V::langDir( "../../vendor/vlucas/valitron/lang");
V::lang('es');


$v = new \Valitron\Validator($_POST);
$v->rule("required", ["txtid", "txtNombreU", "txtApellidoU", "txtNumeroIdentificacionU", "txtCorreoU","txtNacionalidadU","txtDireccionU","txtTelefonoU"]);

#permite solo  poner en entero 
$v->rule('integer', 'txtid');

$v->rule('regex', ['txtNombreU','txtApellidoU','txtNacionalidadU'], '/^[a-zA-ZñÑáéíóúäëïöü]+(\s*[a-zA-ZñÑáéíóúäëïöü]*)*[a-zA-ZñÑáéíóúäëïöü]+$/');

# Permite  tener caracteres especiales a la hora de escribir la direccion 
$v->rule('regex', 'txtDireccionU', '/^([a-zA-ZñÑáéíóúäëïöü#0-9\s]*)+/');

#permite ingresar el nuero de identificacion 00000000-0
$v->rule('regex', 'txtNumeroIdentificacionU', '/^[0-9]{8}-[0-9]{1}$/');

#permite ingresar el numero de telefono 0000-0000
$v->rule('regex', 'txtTelefonoU', '/^[0-9]{4}-[0-9]{4}$/');

# El correo debe ser un correo
$v->rule("email", "txtCorreoU");

$v->labels(array(
    'txtid' => 'ID',
    'txtNombreU' => 'Nombre',
    'txtApellidoU' => 'Apellido',
    'txtNumeroIdentificacionU' => 'Numero de Identidad',
    'txtCorreoU' => 'El campo',
    'txtNacionalidadU' => 'Nacionalidad',
    'txtDireccionU' => 'Direccion',
    'txtTelefonoU' => 'Telefono'
));


if ($v->validate()) {
            echo "<script>
            var Toast = Swal.mixin({ toast: true, position: 'top-end', 
              showConfirmButton: false, 
              timer: 3000, 
              timerProgressBar: 
              true, 
              didOpen: (toast) => { 
                toast.addEventListener('mouseenter', Swal.stopTimer) 
                toast.addEventListener('mouseleave', Swal.resumeTimer) } 
              }) 
                Toast.fire({ icon: 'success', title: 'Datos enviados correctamente' })
                </script>";
} else {
  echo "<script>
  var Toast = Swal.mixin({ toast: true, position: 'top-end', 
    showConfirmButton: false, 
    timer: 3000, 
    timerProgressBar: 
    true, 
    didOpen: (toast) => { 
      toast.addEventListener('mouseenter', Swal.stopTimer) 
      toast.addEventListener('mouseleave', Swal.resumeTimer) } 
    }) 
      Toast.fire({ icon: 'error', title: 'Tiene errores en el formulario' })
      </script>";

  $errores = $v->errors();
  $lista = '<p>
    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="colapsar">Correcciones(Dar click)</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="colapsar">';
    foreach ($errores as $conjuntoDeErrores) {
        foreach ($conjuntoDeErrores as $error) {
           // echo $error . "<br>";
        $lista .= '<div class="card card-body">' .
  $error .'     
      </div>';
        }
         $lista.= 
'</div>
  </div>
  </div>';
    }
       
        echo $lista;
    
    
    
}



