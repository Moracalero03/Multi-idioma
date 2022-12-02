<?php
    if (!empty($_POST)) {
        $tableUsuario = '<table class="table table-info table-responsive-sm">
        <tr>
            <th class="lang" key="nombre" data-section="formGestionUsuario" data-value="nombre">Nombre</th>
            <th class="lang" key="apellido" data-section="formGestionUsuario" data-value="apellido">Apellido</th>
            <th class="lang" key="numeroIdentificacion" data-section="formGestionUsuario" data-value="numeroIdentificacion">Numero de identificacion</th>
            <th class="lang" key="correo" data-section="formGestionUsuario" data-value="correo">Correo</th>
            <th class="lang" key="nacionalidad" data-section="formGestionUsuario" data-value="nacionalidad">Nacionalidad</th>
            <th class="lang" key="direccion" data-section="formGestionUsuario" data-value="direccion">Dirección</th>
            <th class="lang" key="telefono" data-section="formGestionUsuario" data-value="telefono">Telefono</th>
        </tr>';

        $tableUsuario .= '<tr>
            <td>'.$_POST["txtNombreU"].'</td>
            <td>'.$_POST["txtApellidoU"].'</td>
            <td>'.$_POST["txtNumeroIdentificacionU"].'</td>
            <td>'.$_POST["txtCorreoU"].'</td>
            <td>'.$_POST["txtNacionalidadU"].'</td>
            <td>'.$_POST["txtDireccionU"].'</td>
            <td>'.$_POST["txtTelefonoU"].'</td>
        </tr>';
   $tableUsuario.= '</table>';

    }
    echo $tableUsuario;
?>     