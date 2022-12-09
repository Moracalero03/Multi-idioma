<?php
    if (!empty($_POST)) {

        $tableExistencia = '<table class="table table-info table-responsive">
        <tr>
        <th class="lang" key="nombre" data-section="formConsultaExistencia" data-value="nombre">Nombre</th>
        <th class="lang" key="correo" data-section="formConsultaExistencia" data-value="correo">Correo</th>
        <th class="lang" key="nacionalidad" data-section="formConsultaExistencia" data-value="nacionalidad">Nacionalidad</th>
        <th class="lang" key="nIdentidad" data-section="formConsultaExistencia" data-value="nIdentdad">Numero de Identidad</th>
        <th class="lang" key="telefono" data-section="formConsultaExistencia" data-value="telefono">Telefono</th>
        <th class="lang" key="direccion" data-section="formConsultaExistencia" data-value="direccion">Direccion</th>
        <th class="lang" key="producto" data-section="formConsultaExistencia" data-value="producto">Producto</th>
        <th class="lang" key="cantidad" data-section="formConsultaExistencia" data-value="cantidad">Cantidad</th>
        <th class="lang" key="precioUnitario" data-section="formConsultaExistencia" data-value="precioUnitario">Precio Unitario</th>
        <th class="lang" key="totalIva" data-section="formConsultaExistencia" data-value="totalIva">Total con IVA</th>
        <th class="lang" key="metodoPago" data-section="formConsultaExistencia" data-value="metodoPago">Metodo de Pago</th>
        <th class="lang" key="estado" data-section="formConsultaExistencia" data-value="estado">Estado</th>
        </tr>';

        $tableExistencia .= '<tr>
            
            <td>'.$_POST["txtNombreCE"].'</td>
            <td>'.$_POST["txtCorreoCE"].'</td>
            <td>'.$_POST["txtNacionalidadCE"].'</td>
            <td>'.$_POST["txtNIdentidadCE"].'</td>
            <td>'.$_POST["txtTelefonoCE"].'</td>
            <td>'.$_POST["txtDireccionCE"].'</td>
            <td>'.$_POST["txtProductoCE"].'</td>
            <td>'.$_POST["txtCantidadCE"].'</td>
            <td>'.$_POST["txtPrecioUnitarioCE"].'</td>
            <td>'.$_POST["txtTotalIvaCE"].'</td>
            <td>'.$_POST["metodoPagoCE"].'</td>
            <td>'.$_POST["estado"].'</td>
        </tr>';
        
        $tableExistencia.= '</table>';

    }
    echo $tableExistencia;
?>