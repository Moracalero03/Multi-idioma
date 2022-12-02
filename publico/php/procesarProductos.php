<?php
    if (!empty($_POST)) {
        $tableCliente = '<table class="table table-info table-responsive-sm">
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

        $tableProducto = '<table class="table table-info table-responsive-sm ">
        <tr>
            <th class="lang" key="productoT" data-section="formSolicitudPedidos" data-value="productoT">Producto</th>
            <th class="lang" key="CantidadT" data-section="formSolicitudPedidos" data-value="CantidadT">Cantidad</th>
            <th class="lang" key="precioUniT" data-section="formSolicitudPedidos" data-value="precioUniT">Precio Unitario</th>
            <th class="lang" key="totalIVA" data-section="formSolicitudPedidos" data-value="totalIVA">Total con IVA</th>
        </tr>';

        $preciouni="2";
        

        for ($i=0; $i <count($_POST["sNombreProducto"]); $i++) { 
        $tableProducto .= '<tr>
            <td>'.$_POST["sNombreProducto"][$i].'</td>
            <td>'.$_POST["txtCantidadSP"][$i].'</td>
            <td>'.$preciouni.'</td>
            <td>'.$totaliva=$_POST['txtCantidadSP'][$i]*$preciouni.'</td>
        </tr>';
        }
        
        $tableProducto.= '</table>';
    }
    echo $tableCliente;
    echo  $tableProducto;
?>
