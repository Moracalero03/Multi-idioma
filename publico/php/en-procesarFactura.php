<?php
    if (!empty($_POST)) {
        $tableFactura = '<table class="table table-info table-responsive" id="factura">
        <tr>
        <th class="lang" key="MetodoPago" data-section="formSolicitudPedidos" data-value="MetodoPago">Payment method</th>
        <th class="lang" key="NomTarjeta" data-section="formSolicitudPedidos" data-value="NomTarjeta">Card name</th>
        <th class="lang" key="NumTarjeta" data-section="formSolicitudPedidos" data-value="NumTarjeta">Card number</th>
        <th class="lang" key="FechaVence" data-section="formSolicitudPedidos" data-value="FechaVence">Expiration date</th>
        <th class="lang" key="Comprobante" data-section="formSolicitudPedidos" data-value="Comprobante">Voucher</th>
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



