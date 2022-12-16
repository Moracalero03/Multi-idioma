<?php
include_once('../includes/funcionesComunes.php');

// VARIABLES GLOBALES
$value = "SolicitudPedidos";
$datasection = "formSolicitudPedidos";
$col8 = "col-8 col-sm-12 col-md-12 col-lg-12";
$col4 = "col-4 col-sm-6 col-md-6 col-lg-6";
$col6 = "col-sm-6 col-md-6 col-lg-6";

$raiz = "../";
require_once('../publico/php/lenguaje.php'); //vista del formulario
require_once('../publico/php/db.php'); //creacion de archivos json
?>
<!DOCTYPE html>
<html lang="<?php echo key($langs) ?>" dir="ltr" class="translate" id="<?php echo key($langs) ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="lang" key="<?= $value ?>" data-section="global" data-value="<?= $value ?>"></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script> -->
    <script src="../publico/js/jqBootstrapValidation/jqBootstrapValidation.js"></script>
    <link rel="stylesheet" href="<?= $raiz ?>publico/css/estilos.css">
    <link rel="stylesheet" href="<?= $raiz ?>publico/css/validetta.css">
    <link rel="stylesheet" href="<?= $raiz ?>publico/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/jspdf-autotable"></script>
    <script src="<?= $raiz ?>publico/js/monthpicker-master/jquery.monthpicker.min.js" type="text/javascript"></script>
</head>

<body>
    <?php
    include('../includes/barraMenu.php');
    ?>
    <div class="col-lg-12" id="banner">
        <h1 class="lang" key="<?= $value ?>" data-section="global" data-value="<?= $value ?>"></h1>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="container">
                <br>
                <div class="row" id="idioma">
                    <div class="col-2 d-flex justify-content-end" data-language="es">
                        <span class="translate es lang" key="Español" data-section="global" data-value="Español">Español</span>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <input type="checkbox" class="check">
                    </div>
                    <div class="col-9" data-language="en">
                        <span class="translate en lang" key="Inglés" data-section="global" data-value="Inglés">Inglés</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <form action="../publico/php/<?php echo key($langs) ?>-procesarProductos.php" method="POST" id="frmDinamico" novalidate="novalidate">
                    <div class="p-4">
                        <div class="<?= $col8 ?>" id="formEncabezado">
                            <h3 class="lang" key="DatosCliente" data-section="formSolicitudPedidos" data-value="DatosCliente">Datos del cliente</h3>
                        </div>

                        <div class="row">
                            <div class="<?= $col4 ?>">
                                <p class="lang" key="NomCompleto" data-section="formSolicitudPedidos" data-value="NomCompleto">Nombre completo</p>
                                <input class="form-control" type="text" name="txtNombreSP" id="txtNombreSP" data-seccion="formSolicitudPedidos" data-valor="PLNomCompletoSP" required="required" data-validation-required-message="Ingrese su nombre">
                                <p class="text-danger help-block"></p>
                                <span class="warnings lang" key="spanNombreCompletoSP" data-target="#txtNombreSP" style="display: none;" id="warningsNombreCompletoSP" data-section="formSolicitudPedidos" data-value="spanNombreCompletoSP"></span>
                            </div>

                            <div class="<?= $col4 ?>">
                                <p class="lang" key="correo" data-section="formSolicitudPedidos" data-value="correo">Correo electrónico</p>
                                <input class="form-control" type="email" name="txtCorreoSP" id="txtCorreoSP" data-seccion="formSolicitudPedidos" data-valor="PLcorreoSP" required="required" data-validation-required-message="Ingrese su correo electronico">
                                <p class="text-danger help-block"></p>
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
                                <input class="form-control" type="text" name="txtIdentificacionSP" id="txtIdentificacionSP" data-seccion="formSolicitudPedidos" data-valor="PLNumIndentificacionSP" required="required" data-validation-required-message="Ingrese su numero de identificacion">
                                <p class="text-danger help-block"></p>
                                <span class="warnings lang" key="spanNumIndentificacionSP" data-target="#txtIdentificacionSP" style="display: none;" id="warningsNumIndentificacionSP" data-section="formSolicitudPedidos" data-value="spanNumIndentificacionSP"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="<?= $col4 ?>">
                                <p class="lang" key="NumTelefono" data-section="formSolicitudPedidos" data-value="NumTelefono">Número de teléfono</p>
                                <input class="form-control" type="text" name="txtTelefonoSP" id="txtTelefonoSP" data-seccion="formSolicitudPedidos" data-valor="PLNumTelefonoSP" required="required" data-validation-required-message="Ingrese su numero de telefono">
                                <p class="text-danger help-block"></p>
                                <span class="warnings lang" key="spanTelefonoSP" data-target="#txtTelefonoSP" style="display: none;" id="warningsTelefonoSP" data-section="formSolicitudPedidos" data-value="spanTelefonoSP"></span>
                            </div>
                            <div class="<?= $col4 ?>">
                                <p class="lang" key="Direccion" data-section="formSolicitudPedidos" data-value="Direccion">Dirección</p>
                                <textarea class="form-control" name="txtDireccionSP" id="txtDireccionSP" cols="15" rows="1" data-seccion="formSolicitudPedidos" data-valor="PLDireccionSP" required="required" data-validation-required-message="Ingrese su direccion"></textarea>
                                <p class="text-danger help-block"></p>
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
                                                <input class="form-control" type="number" name="txtCantidadSP[]" min="0" required="required" data-validation-required-message="Inserte una cantidad">
                                                <p class="text-danger help-block"></p>
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
                            <button type="submit" class="btn btn-warning ml-auto px-5 lang" id="btnEnviar" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar"  id="enviar">Enviar</button>
                            <!-- <button type="submit" class="btn btn-warning ml-auto px-5 lang" id="btnEnviar" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar" onclick="stopDefAction(event, 'form#frmDinamico')">Enviar</button> -->
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
                            <div id="success"></div>
                                <div class="<?= $col6 ?> d-flex justify-content-center p-4">
                                <!-- <button class="btn btn-info px-5 lang" type="submit" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar" onclick="stopDefAction(event, 'form#formFacturar')">Enviar</button>     -->
                                <button class="btn btn-info px-5 lang" type="submit" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar">Enviar</button>
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
        <script>
            $(document).ready(function() {

                $('#frmDinamico input, #frmDinamico textarea').jqBootstrapValidation({
                    preventSubmit: true,
                    submitSuccess: function($form, event) {
                        event.preventDefault();
                        $this = $('#enviar');
                        $this.prop('disabled', true);
                        // var form_data = $("#frmDinamico").serialize();
                        $.ajax({
                            // url: "../publico/php/send.php",
                            // method: "POST",
                            // data: form_data, 
                            type: $('#frmDinamico').attr('method'),
                            url: $('#frmDinamico').attr('action'),
                            data: $('#frmDinamico').serialize(),
                            success: function(response) {
                                $('#success').html("<div class='alert alert-success'><strong>Los datos se han enviado</strong></div>");
                                $('#frmDinamico').trigger('reset');
                                console.log(response)
                            },
                            error: function() {
                                $('#success').html("<div class='alert alert-danger'>Ha ocurrido un error</div>");
                                $('#frmDinamico').trigger('reset');
                            },
                            complete: function() {
                                setTimeout(function() {
                                    $this.prop("disabled", false);
                                    $('#success').html('');
                                }, 5000);
                            }
                        });
                    },
                });

            });
        </script>
        <?php
        include('../includes/pie.php');
        ?>