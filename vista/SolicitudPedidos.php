<?php
include_once('../includes/funcionesComunes.php');

// VARIABLES GLOBALES
$value="SolicitudPedidos";
$datasection="formSolicitudPedidos";
$col8="col-8 col-sm-12 col-md-12 col-lg-12";
$col4="col-4 col-sm-6 col-md-6 col-lg-6";
$col6="col-sm-6 col-md-6 col-lg-6";

include('../includes/cabecera.php');
?>
    <div class="col-lg-12">
    <form action="../publico/php/procesarProductos.php" method="POST" id="frmDinamico">                    
                <div class="p-4">
                    <div class="<?=$col8?>" id="formEncabezado">
                    <h3 class="lang" key="DatosCliente" data-section="formSolicitudPedidos" data-value="DatosCliente">Datos del cliente</h3>
                    </div>

                    <div class="row">
                    <div class="<?=$col4?>">
                    <p class="lang" key="NomCompleto" data-section="formSolicitudPedidos" data-value="NomCompleto">Nombre completo</p>
                    <input class="form-control" type="text" name="txtNombre" data-seccion="formSolicitudPedidos"  data-valor="PLNomCompleto" data-validetta="required">
                    </div>

                    <div class="<?=$col4?>">
                    <p class="lang" key="correo" data-section="formSolicitudPedidos" data-value="correo">Correo electrónico</p>
                    <input class="form-control" type="email" name="txtCorreo" data-seccion="formSolicitudPedidos"  data-valor="PLcorreo" data-validetta="required">
                    </div>  
                    </div>

                    <div class="row">
                    <div class="<?=$col4?>">
                    <p class="lang" key="Nacionalidad" data-section="formSolicitudPedidos" data-value="Nacionalidad">Nacionalidad</p>
                    <select class="form-control" name="sNacionalidad">
                        <option value="Estadounidense" class="lang" key="Estadounidense" data-section="formSolicitudPedidos" data-value="Estadounidense">Estadounidense</option>
                    </select>
                    </div>
                    <div class="<?=$col4?>">
                    <p class="lang" key="NumIndentificacion" data-section="formSolicitudPedidos" data-value="NumIndentificacion">Número de identificación</p>
                    <input class="form-control" type="text" name="txtIdentificacion" data-seccion="formSolicitudPedidos"  data-valor="PLNumIndentificacion" data-validetta="required">
                    </div>
                    </div>

                    <div class="row">
                    <div class="<?=$col4?>">
                    <p class="lang" key="NumTelefono" data-section="formSolicitudPedidos" data-value="NumTelefono">Número de teléfono</p>
                    <input class="form-control" type="text" name="txtTelefono" data-seccion="formSolicitudPedidos"  data-valor="PLNumTelefono" data-validetta="required">
                    </div>
                    <div class="<?=$col4?>">
                    <p class="lang" key="Direccion" data-section="formSolicitudPedidos" data-value="Direccion">Dirección</p>
                    <textarea class="form-control" name="txtDireccion" cols="15" rows="1" data-seccion="formSolicitudPedidos"  data-valor="PLDireccion" data-validetta="required"></textarea>
                    </div>
                    </div>
            <!-- </form> -->
                </div> 

                <div class="p-4">
                    <div class="<?=$col8?>" id="formEncabezado">
                    <h3 class="lang" key="Productos" data-section="formSolicitudPedidos" data-value="Productos">Productos</h3>
                    </div>

                    <div class="row">
                    <div class="<?=$col8?> d-flex justify-content-center p-4">
                    <button type="button" class="btn btn-secondary lang" key="AgregarProducto" data-section="formSolicitudPedidos" data-value="AgregarProducto" id="btnAdd">Agregar producto</button>
                    </div> 
                    </div>

                    <div class="row">
                    <div class="<?=$col8?>">
                <!-- <form action="../publico/php/procesarProductos.php" method="POST" id="frmDinamico">                     -->
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
                                <input class="form-control" type="number" name="txtCantidad[]" data-validetta="required">
                            </td>
                            <td>
                                <button type="button" class="btn" id="btnEliminar"><img src="<?=$raiz?>publico/img/eliminar.png" width="20rem" height="20rem" alt=""></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    </div>

                    <div class="row">
                    <div class="<?=$col8?> d-flex p-4">
                    <button type="submit" class="btn btn-warning ml-auto px-5 lang" id="btnEnviar" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar">Enviar</button>
                    </div> 
                    </div>
                    </form> 

                </div>
            
        
            <div class="p-4">
                    <div class="row">
                    <div class="<?=$col8?>" id="datos">
                    
                    </div>
                    </div>

                <!-- Button trigger modal -->
                    <div class="row">
                    <div class="<?=$col8?> d-flex d-flex justify-content-center p-4">
                    <button class="btn btn-info px-5 lang"  data-toggle="modal" data-target="#ventanaModular" key="Facturar" data-section="formSolicitudPedidos" data-value="Facturar">Facturar</button>
                    </div> 
                    </div>
                </div> 
                </div>

                <!-- Modal -->
                <div class="modal fade" id="ventanaModular" tabindex="-1" role="dialog" aria-labelledby="ventanaModularLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ventanaModularLabel" class="lang" key="InfoTarjeta" data-section="formSolicitudPedidos" data-value="InfoTarjeta">Indique la información de su tarjeta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="bg-light rounded">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="../publico/php/procesarFactura.php" method="post" id="formFacturar">
                            <div class="row">
                            <div class="<?=$col6?>">
                                <p class="lang" key="MetodoPago" data-section="formSolicitudPedidos" data-value="MetodoPago">Método de pago</p>
                                <select class="form-control" name="sMetodoPago">
                                <option value="Tarjeta de crédito" class="lang" key="TarjetaCredito" data-section="formSolicitudPedidos" data-value="TarjetaCredito">Tarjeta de crédito</option>
                                <option value="Tarjeta de débito" class="lang" key="TarjetaDebito" data-section="formSolicitudPedidos" data-value="TarjetaDebito">Tarjeta de débito</option>
                                </select> 
                            </div>
                            <div class="<?=$col6?>">
                                <p class="lang" key="NomTarjeta" data-section="formSolicitudPedidos" data-value="NomTarjeta">Nombre de la tarjeta</p>
                                <input class="form-control" type="text" name="txtNomTarjeta" data-seccion="formSolicitudPedidos"  data-valor="PLNomTarjeta" data-validetta="required">
                            </div>
                            </div>

                            <div class="row">
                            <div class="<?=$col6?>">
                                <p class="lang" key="NumTarjeta" data-section="formSolicitudPedidos" data-value="NumTarjeta">Número de tarjeta</p>
                                <input class="form-control" type="text" name="txtNumTarjeta" data-seccion="formSolicitudPedidos"  data-valor="PLNumTarjeta" data-validetta="required">
                            </div>
                            <div class="<?=$col6?>">
                                <p class="lang" key="FechaVence" data-section="formSolicitudPedidos" data-value="FechaVence">Fecha de vencimiento</p>
                                <input class="form-control" type="month" name="txtFechaVence"></input>
                            </div>
                            </div>
                            <div class="row">
                            <div class="<?=$col6?>">
                                <p class="lang" key="Comprobante" data-section="formSolicitudPedidos" data-value="Comprobante">Comprobante</p>
                                <input class="form-control" type="text" name="txtComprobante" data-seccion="formSolicitudPedidos"  data-valor="PLComprobante" readonly>
                            </div>
                            </div>

                            <div class="row">
                            <div class="<?=$col6?> d-flex justify-content-center p-4">
                            <button class="btn btn-info px-5 lang"  type="submit" key="Enviar" data-section="formSolicitudPedidos" data-value="Enviar">Enviar</button>
                            </div>
                            <div class="<?=$col6?> d-flex d-flex justify-content-center p-4">
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
                
<?php
    include('../includes/pie.php');
?>
