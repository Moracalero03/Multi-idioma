<?php
include_once('../includes/funcionesComunes.php');

// VARIABLES GLOBALES
$value = "SolicitudPedidos";
$datasection = "formSolicitudPedidos";
$col8 = "col-8 col-sm-12 col-md-12 col-lg-12";
$col4 = "col-4 col-sm-6 col-md-6 col-lg-6";
$col6 = "col-sm-6 col-md-6 col-lg-6";

include('../includes/cabecera.php');
?>

<div class="col-lg-12">
    <form action="../publico/php/<?php echo key($langs) ?>-procesarProductos.php" method="POST" id="frmDinamico">
        <div class="p-4">
            <div class="<?= $col8 ?>" id="formEncabezado">
                <h3 class="lang" key="DatosCliente" data-section="formSolicitudPedidos" data-value="DatosCliente">Datos del cliente</h3>
            </div>

            <div class="row">
                <div class="<?= $col4 ?>">
                    <p class="lang" key="NomCompleto" data-section="formSolicitudPedidos" data-value="NomCompleto">Nombre completo</p>
                    <input class="form-control" type="text" name="txtNombreSP" id="txtNombreSP" data-seccion="formSolicitudPedidos" data-valor="PLNomCompletoSP" data-validetta="required" ;>

                    <span class="warnings lang"  key="spanNombreCompletoSP" data-target="#txtNombreSP" style="display: none;" id="warningsNombreCompletoSP" data-section="formSolicitudPedidos" data-value="spanNombreCompletoSP"></span>
                </div>

                <div class="<?= $col4 ?>">
                    <p class="lang" key="correo" data-section="formSolicitudPedidos" data-value="correo">Correo electrónico</p>
                    <input class="form-control" type="email" name="txtCorreoSP" id="txtCorreoSP" data-seccion="formSolicitudPedidos" data-valor="PLcorreoSP" data-validetta="required">

                    <span class="warnings lang" key="spanCorreoElectronicoSP" data-target="#txtCorreoSP" style="display: none;" id="warningsCorreoElectronicoSP" data-section="formSolicitudPedidos" data-value="spanCorreoElectronicoSP"></span>
                </div>
            </div>

            <div class="row">
                <div class="<?= $col4 ?>">
                    <p class="lang" key="Nacionalidad" data-section="formSolicitudPedidos" data-value="Nacionalidad">Nacionalidad</p>
                    <select class="form-control" name="sNacionalidad">
                        <option value="Estadounidense" class="lang" key="Estadounidense" data-section="formSolicitudPedidos" data-value="Estadounidense">Estadounidense</option>
                    </select>
                </div>
                <div class="<?= $col4 ?>">
                    <p class="lang" key="NumIndentificacion" data-section="formSolicitudPedidos" data-value="NumIndentificacion">Número de identificación</p>
                    <input class="form-control" type="text" name="txtIdentificacionSP" id="txtIdentificacionSP" data-seccion="formSolicitudPedidos" data-valor="PLNumIndentificacionSP" data-validetta="required">

                    <span class="warnings lang" key="spanNumIndentificacionSP" data-target="#txtIdentificacionSP" style="display: none;" id="warningsNumIndentificacionSP" data-section="formSolicitudPedidos" data-value="spanNumIndentificacionSP"></span>
                </div>
            </div>

            <div class="row">
                <div class="<?= $col4 ?>">
                    <p class="lang" key="NumTelefono" data-section="formSolicitudPedidos" data-value="NumTelefono">Número de teléfono</p>
                    <input class="form-control" type="text" name="txtTelefonoSP" id="txtTelefonoSP" data-seccion="formSolicitudPedidos" data-valor="PLNumTelefonoSP" data-validetta="required">

                    <span class="warnings lang" key="spanTelefonoSP" data-target="#txtTelefonoSP" style="display: none;" id="warningsTelefonoSP" data-section="formSolicitudPedidos" data-value="spanTelefonoSP"></span>
                </div>
                <div class="<?= $col4 ?>">
                    <p class="lang" key="Direccion" data-section="formSolicitudPedidos" data-value="Direccion">Dirección</p>
                    <textarea class="form-control" name="txtDireccionSP" id="txtDireccionSP" cols="15" rows="1" data-seccion="formSolicitudPedidos" data-valor="PLDireccionSP" data-validetta="required"></textarea>

                    <span class="warnings lang" key="spanDireccionSP" data-target="#txtDireccionSP" style="display: none;" id="warningsDireccionSP" data-section="formSolicitudPedidos" data-value="spanDireccionSP"></span>
                </div>
            </div>

        </div>

        <div class="p-4">
            <div class="<?= $col8 ?>" id="formEncabezado">
                <h3 class="lang" key="Productos" data-section="formSolicitudPedidos" data-value="Productos">Productos</h3>
            </div>

            <div class="row">
                <div class="<?= $col8 ?> d-flex justify-content-center p-4">
                    <button type="button" class="btn btn-secondary lang" key="AgregarProducto" data-section="formSolicitudPedidos" data-value="AgregarProducto" id="btnAdd">Agregar producto</button>
                </div>
            </div>

            <div class="row">
                <div class="<?= $col8 ?>">

                    <table class="table table-info table-responsive-sm ">
                        <tr>
                            <th class="lang" key="NombreT" data-section="formSolicitudPedidos" data-value="NombreT">Nombre</th>
                            <th class="lang" key="CantidadT" data-section="formSolicitudPedidos" data-value="CantidadT">Cantidad</th>
                            <th class="lang" key="QuitarT" data-section="formSolicitudPedidos" data-value="QuitarT">Quitar</th>
                        </tr>
                        <tbody id="tblFilas">
                            <tr class="filas">
                                <td>
                                    <select class="form-control" name="sNombreProducto[]">
                                        <option value="Sacos" class="lang" key="Sacos" data-section="formSolicitudPedidos" data-value="Sacos">Sacos</option>
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control" type="number" name="txtCantidadSP[]" min="0" data-validetta="required">
                                </td>
                                <td>
                                    <button type="button" class="btn" id="btnEliminar"><img src="<?= $raiz ?>publico/img/eliminar.png" width="20rem" height="20rem" alt=""></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="<?= $col8 ?> d-flex p-4">
                <button type="submit" class="btn btn-warning ml-auto px-5 lang" id="btnEnviar" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar" onclick="stopDefAction(event, 'form#frmDinamico')">Enviar</button>   
                </div>
            </div>
    </form>

</div>


<div class="p-4">
    <div class="row">
        <div class="<?= $col8 ?>" id="datos">

        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="row">
        <div class="<?= $col8 ?> d-flex d-flex justify-content-center p-4">
            <button class="btn btn-info px-5 lang" data-toggle="modal" data-target="#ventanaModular" key="Facturar" data-section="formSolicitudPedidos" data-value="Facturar">Facturar</button>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="ventanaModular" tabindex="-1" role="dialog" aria-labelledby="ventanaModularLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title lang" id="ventanaModularLabel" key="InfoTarjeta" data-section="formSolicitudPedidos" data-value="InfoTarjeta">Indique la información de su tarjeta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="bg-light rounded">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../publico/php/<?php echo key($langs) ?>-procesarFactura.php" method="post" id="formFacturar">
                    <div class="row">
                        <div class="<?= $col6 ?>">
                            <p class="lang" key="MetodoPago" data-section="formSolicitudPedidos" data-value="MetodoPago">Método de pago</p>
                            <select class="form-control" name="sMetodoPago">
                                <option value="Tarjeta de crédito" class="lang" key="TarjetaCredito" data-section="formSolicitudPedidos" data-value="TarjetaCredito">Tarjeta de crédito</option>
                                <option value="Tarjeta de débito" class="lang" key="TarjetaDebito" data-section="formSolicitudPedidos" data-value="TarjetaDebito">Tarjeta de débito</option>
                            </select>
                        </div>
                        <div class="<?= $col6 ?>">
                            <p class="lang" key="NomTarjeta" data-section="formSolicitudPedidos" data-value="NomTarjeta">Nombre de la tarjeta</p>
                            <input class="form-control" type="text" name="txtNomTarjetaSP" id="txtNomTarjetaSP" data-seccion="formSolicitudPedidos" data-valor="PLNomTarjetaSP" data-validetta="required">

                            <span class="warnings lang" key="spanNombreTarjeta" data-target="#txtNomTarjetaSP" style="display: none;" id="warningsNombreTarjeta" data-section="formSolicitudPedidos" data-value="spanNombreTarjeta"></span>

                        </div>
                    </div>

                    <div class="row">
                        <div class="<?= $col6 ?>">
                            <p class="lang" key="NumTarjeta" data-section="formSolicitudPedidos" data-value="NumTarjeta">Número de tarjeta</p>
                            <input class="form-control" type="text" name="txtNumTarjetaSP" id="txtNumTarjetaSP" data-seccion="formSolicitudPedidos" data-valor="PLNumTarjetaSP" data-validetta="required">

                            <span class="warnings lang" key="spanNumeroTarjeta" data-target="#txtNumTarjetaSP" style="display: none;" id="warningsNumeroTarjeta" data-section="formSolicitudPedidos" data-value="spanNumeroTarjeta"></span>

                        </div>
                        <div class="<?= $col6 ?>">
                            <p class="lang" key="FechaVence" data-section="formSolicitudPedidos" data-value="FechaVence">Fecha de vencimiento</p>
                            <input type="text" name="txtFechaVenceSP" id="yearpicker">
                            <span class="warnings lang" key="spanFechaVence" data-target="#yearpicker" style="display: none;" id="warningsFechaVence" data-section="formSolicitudPedidos" data-value="spanFechaVence"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="<?= $col6 ?>">
                            <p class="lang" key="Comprobante" data-section="formSolicitudPedidos" data-value="Comprobante">Comprobante</p>
                            <input class="form-control" type="text" name="txtComprobanteSP" data-seccion="formSolicitudPedidos" value="Factura" data-valor="PLComprobanteSP" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="<?= $col6 ?> d-flex justify-content-center p-4">
                            <button class="btn btn-info px-5 lang" type="submit" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar" onclick="stopDefAction(event, 'form#formFacturar')">Enviar</button>
                        </div>
                        <div class="<?= $col6 ?> d-flex d-flex justify-content-center p-4">
                            <button class="btn btn-secondary px-5 lang" type="button" data-dismiss="modal" key="Cancelar" data-section="formSolicitudPedidos" data-value="Cancelar">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>


    </div>
</div>
<style type="text/css">
    select.monthpick {
        margin-right: 3px;
        border: 2px solid blue;
        border-radius: 5px;

        height: 38px;
        width: 100px;

    }

    select.yearpick {
        margin-left: 3px;
        border: 2px solid blue;
        border-radius: 5px;
        height: 38px;
        width: 100px;

    }
</style>

<?php
include('../includes/pie.php');
?>