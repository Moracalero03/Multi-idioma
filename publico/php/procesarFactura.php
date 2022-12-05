<?php
    if (!empty($_POST)) {
        $tableFactura = '<table class="table table-info table-responsive">
        <tr>
        <th class="lang" key="MetodoPago" data-section="formSolicitudPedidos" data-value="MetodoPago">Método de pago</th>
        <th class="lang" key="NomTarjeta" data-section="formSolicitudPedidos" data-value="NomTarjeta">Nombre de la tarjeta</th>
        <th class="lang" key="NumTarjeta" data-section="formSolicitudPedidos" data-value="NumTarjeta">Número de tarjeta</th>
        <th class="lang" key="FechaVence" data-section="formSolicitudPedidos" data-value="FechaVence">Fecha de vencimiento</th>
        <th class="lang" key="Comprobante" data-section="formSolicitudPedidos" data-value="Comprobante">Comprobante</th>
        </tr>';

        $tableFactura .= '<tr>
            <td>'.$_POST["sMetodoPago"].'</td>
            <td>'.$_POST["txtNomTarjetaSP"].'</td>
            <td>'.$_POST["txtNumTarjetaSP"].'</td> 
            <td>'.$_POST["txtAnio"]."/".$_POST["txtMes"].'</td>
            <td>'.$_POST["txtComprobanteSP"].'</td>
        </tr>';
        
        $tableFactura.= '</table>';

    }
    echo $tableFactura;
?>
