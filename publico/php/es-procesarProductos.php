<?php
require '../../vendor/autoload.php'; #Cargar todas las dependencias
use Valitron\Validator as V;
V::langDir( "../../vendor/vlucas/valitron/lang");
V::lang('es');


$v = new \Valitron\Validator($_POST);
$v->rule("required", ["txtNombreSP", "txtCorreoSP", "sNacionalidad", "txtIdentificacionSP", "txtTelefonoSP", "txtDireccionSP","sNombreProducto", "txtCantidadSP"]);

#permite solo  poner en entero 
$v->rule('integer', '"txtCantidadSP"');

$v->rule('regex', ["txtNombreSP", ], '/^[a-zA-ZñÑáéíóúäëïöü]+(\s*[a-zA-ZñÑáéíóúäëïöü]*)*[a-zA-ZñÑáéíóúäëïöü]+$/');

# Permite  tener caracteres especiales a la hora de escribir la direccion 
$v->rule('regex', 'txtDireccionSP', '/^([a-zA-ZñÑáéíóúäëïöü#0-9\s]*)+/');

#permite ingresar el nuero de identificacion 00000000-0
$v->rule('regex', 'txtIdentificacionSP', '/^[0-9]{8}-[0-9]{1}$/');

#permite ingresar el numero de telefono 0000-0000
$v->rule('regex', 'txtTelefonoSP', '/^[0-9]{4}-[0-9]{4}$/');

# El correo debe ser un correo
$v->rule("email", "txtCorreoSP");

$v->labels(array(
    'txtNombreSP' => 'El nombre',
    'txtCorreoSP' => 'El campo',
    'sNacionalidad' => 'El campo nacionalidad',
    'txtIdentificacionSP' => 'El número de DUI',
    'txtTelefonoSP' => 'El teléfono',
    'txtDireccionSP' => 'El campo dirección',
    'sNombreProducto' => 'El nombre del producto',
    'txtCantidadSP' => 'La cantidad'
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
        if (!empty($_POST)) {
        $tableCliente = '<table class="table table-info table-responsive-sm" id="tblCliente">
        <tr>
            <th class="lang" key="NomCompleto" data-section="formSolicitudPedidos" data-value="NomCompleto">Nombre Completo</th>
            <th class="lang" key="correo" data-section="formSolicitudPedidos" data-value="correo">Correo electrónico</th>
            <th class="lang" key="Nacionalidad" data-section="formSolicitudPedidos" data-value="Nacionalidad">Nacionalidad</th>
            <th class="lang" key="NumIndentificacion" data-section="formSolicitudPedidos" data-value="NumIndentificacion">Número de identificación</th>
            <th class="lang" key="NumTelefono" data-section="formSolicitudPedidos" data-value="NumTelefono">Número teléfono</th>
            <th class="lang" key="Direccion" data-section="formSolicitudPedidos" data-value="Direccion">Dirección</th>
        </tr>';

        $tableCliente .= '<tr>
            <td>'.$_POST["txtNombreSP"].'</td>
            <td>'.$_POST["txtCorreoSP"].'</td>
            <td>'.$_POST["sNacionalidad"].'</td>
            <td>'.$_POST["txtIdentificacionSP"].'</td>
            <td>'.$_POST["txtTelefonoSP"].'</td>
            <td>'.$_POST["txtDireccionSP"].'</td>
        </tr>';
        
        $tableCliente.= '</table>';

        $tableProducto = '<table class="table table-info table-responsive-sm" id="tblPedido">
        <tr>
            <th class="lang" key="productoT" data-section="formSolicitudPedidos" data-value="productoT">Producto</th>
            <th class="lang" key="CantidadT" data-section="formSolicitudPedidos" data-value="CantidadT">Cantidad</th>
            <th class="lang" key="precioUniT" data-section="formSolicitudPedidos" data-value="precioUniT">Precio Unitario</th>
            <th class="lang" key="totalIVA" data-section="formSolicitudPedidos" data-value="totalIVA">Total con IVA</th>
        </tr>';

        $preciouni="2";
        
        $count = count($_POST["sNombreProducto"]);

        for ($i=0; $i < $count; $i++) { 
            $nombre = $_POST["sNombreProducto"][$i];
            $cantidad = $_POST["txtCantidadSP"][$i]; 
            $totaliva = $cantidad*$preciouni;

            $tableProducto .= '<tr>
                <td>'.$nombre.'</td>
                <td>'.$cantidad.'</td>
                <td>'.$preciouni.'</td>
                <td>'.$totaliva.'</td>
            </tr>';
        }
        
        $tableProducto.= '</table>';
    } 

    
    echo $tableCliente;
    echo  $tableProducto;
     
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
