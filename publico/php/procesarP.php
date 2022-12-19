<?php
    if (!empty($_POST)) {
        $tableI= '<table class="table table-info table-responsive-sm">
        <tr>
            <th class="lang" key="" data-section="" data-value="nombre">Correo</th>
            <th class="lang" key="" data-section="" data-value="date">Fecha</th>
            <th class="lang" key="" data-section="" data-value="first_name">Primer nombre</th>
            
        </tr>';

        $tableI .= '<tr>
            <td>'.$_POST["email"].'</td>
            <td>'.$_POST["date"].'</td>
            <td>'.$_POST["first_name"].'</td>
            
        </tr>';
   $tableI.= '</table>';

    }
    echo $tableI;
?>     