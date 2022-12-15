<?php
require '../../vendor/autoload.php'; #Cargar todas las dependencias
use Valitron\Validator as V;
V::langDir( "../../vendor/vlucas/valitron/lang");
V::lang('es');


$v = new \Valitron\Validator($_POST);
$v->rule("required", ["txtid", "txtNombreU", "txtApellidoU", "txtNumeroIdentificacionU", "txtCorreoU","txtNacionalidadU","txtDireccionU","txtTelefonoU"]);

# el campo sea solo caracteres alfabéticos
$v->rule('alpha',['txtNombreU','txtApellidoU','txtNacionalidadU','txtDireccionU']);

# El correo debe ser un correo
$v->rule("email", "txtCorreoU")->message('XD')->label('txtCorreoU');

#$v = new Valitron\Validator(array());
#$v->rule('required', 'name')->message('{field} is required')->label('Name');
#$v->validate();


if ($v->validate()) {
    echo '<div class="alert alert-success" role="alert">
              OK, datos correctos!
            </div>';
} else {
     $errores = $v->errors();
    echo '<div class="alert alert-danger" role="alert">
              Corrige lo siguiente!
            </div>';
        $lista = '<ul class="list-group">';
    foreach ($errores as $conjuntoDeErrores) {
        foreach ($conjuntoDeErrores as $error) {
           // echo $error . "<br>";
        $lista .= '<li class="list-group-item list-group-item-danger">'. $error.'</li>';
        }
         $lista .= '</ul>';
    }
       
        echo $lista;
    
    
    
}


/*
<?php
$v = new \Valitron\Validator($_POST);
$v->rule("required", ["txtNombreCE", "txtCorreoCE", "txtNacionalidadCE", "txtNIdentidadCE", "txtTelefonoCE","txtDireccionCE","txtProductoCE","txtCantidadCE","txtPrecioUnitarioCE","txtTotalIvaCE"]);

# el campo sea solo caracteres alfabéticos
$v->rule('alpha', 'txtNombreCE','txtApellidoU','txtNacionalidadCE','txtDireccionCE');

# El correo debe ser un correo
$v->rule("email", "txtCorreoU");




if ($v->validate()) {
    echo "OK, datos correctos";
} else {
     $errores = $v->errors();
    echo "<h2>Corrige lo siguiente:</h2>";

    foreach ($errores as $conjuntoDeErrores) {
        foreach ($conjuntoDeErrores as $error) {
            echo $error . "<br>";
        }
    }
}

*/


