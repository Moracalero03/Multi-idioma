<?php
    if (!empty($_POST)) {

        $tableExistencia = '<table class="table table-info table-responsive">
        <tr>
        <th class="lang" key="nombre" data-section="formConsultaExistencia" data-value="nombre">Nombre</th>
        <th class="lang" key="correo" data-section="formConsultaExistencia" data-value="correo">Correo</th>
        <th class="lang" key="nacionalidad" data-section="formConsultaExistencia" data-value="nacionalidada">Nacionalidad</th>
        <th class="lang" key="nIdentidad" data-section="formConsultaExistencia" data-value="nIdentidad">Numero de Identidad</th>
        <th class="lang" key="telefono" data-section="formConsultaExistencia" data-value="telefono">Telefono</th>
        <th class="lang" key="direccion" data-section="formConsultaExistencia" data-value="direccion">Direccion</th>
        <th class="lang" key="producto" data-section="formConsultaExistencia" data-value="producto">Producto</th>
        <th class="lang" key="cantidad" data-section="formConsultaExistencia" data-value="cantidad">Cantidad</th>
        <th class="lang" key="precioUnitario" data-section="formConsultaExistencia" data-value="precioUnitario">Método de pago</th>
        <th class="lang" key="totalIva" data-section="formConsultaExistencia" data-value="totalIva">Precio Unitario</th>
        <th class="lang" key="metodoPago" data-section="formConsultaExistencia" data-value="metodoPago">Metodo de Pago</th>
        <th class="lang" key="estado" data-section="formConsultaExistencia" data-value="estado">Estado</th>
        </tr>';

        $tableExistencia .= '<tr>
            
            <td>'.$_POST["txtNombre"].'</td>
            <td>'.$_POST["txtCorreo"].'</td>
            <td>'.$_POST["txtNacionalidad"].'</td>
            <td>'.$_POST["txtNIdentidad"].'</td>
            <td>'.$_POST["txtTelefono"].'</td>
            <td>'.$_POST["txtDireccion"].'</td>
            <td>'.$_POST["txtProducto"].'</td>
            <td>'.$_POST["txtCantidad"].'</td>
            <td>'.$_POST["txtPrecioUnitario"].'</td>
            <td>'.$_POST["txtTotalIva"].'</td>
            <td>'.$_POST["metodoPago"].'</td>
            <td>'.$_POST["estado"].'</td>
        </tr>';
        
        $tableExistencia.= '</table>';

    }
    echo $tableExistencia;
?>