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
            <td>'.$_POST["txtNombre"].'</td>
            <td>'.$_POST["txtApellido"].'</td>
            <td>'.$_POST["txtNumeroIdentificacion"].'</td>
            <td>'.$_POST["txtCorreo"].'</td>
            <td>'.$_POST["txtNacionalidad"].'</td>
            <td>'.$_POST["txtDireccion"].'</td>
            <td>'.$_POST["txtTelefono"].'</td>
        </tr>';
   $tableUsuario.= '</table>';

    }
    echo $tableUsuario;
?>     