<?php
include_once('../includes/funcionesComunes.php');
$value="ConsultaExistencia";
$datasection="formConsultaExistencia";
$col11="col-11 col-lg-12";
$col10="col-7 col-lg-7";

include('../includes/cabecera.php');

?>
            
            <div class="<?=$col11?> p-4 mx-auto" >    
            <table id="example" class="table table-light table-striped table-bordered dt-responsive wrap" style="width:100%">
        <thead>
            <tr>
                <th class="lang" key="numeroFactura" data-section="formConsultaExistencia" data-value="numeroFactura">Numero de factura</th>
                <th class="lang" key="cliente" data-section="formConsultaExistencia" data-value="cliente">Cliente</th>
                <th class="lang" key="comprobante" data-section="formConsultaExistencia" data-value="comprobante">Comprobante</th>
                <th class="lang" key="impuesto" data-section="formConsultaExistencia" data-value="impuesto">Impuesto</th>
                <th class="lang" key="total" data-section="formConsultaExistencia" data-value="total">Total</th>
                <th class="lang" key="estado" data-section="formConsultaExistencia" data-value="estado">Estado</th>
                <th class="lang" key="acciones" data-section="formConsultaExistencia" data-value="acciones" data-priority="1">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010-02-12</td>
                <td>$109,850</td>
                <td>
                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
                </td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009-02-14</td>
                <td>$452,500</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>

            </td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008-12-11</td>
                <td>$136,200</td>
                <td>


                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
                

</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008-09-26</td>
                <td>$645,750</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
                

</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011-02-03</td>
                <td>$234,500</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>

            </td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011-05-03</td>
                <td>$163,500</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
                

</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009-08-19</td>
                <td>$139,575</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
   
            </td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013-08-11</td>
                <td>$98,540</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
                   
            </td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009-07-07</td>
                <td>$87,500</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>

            </td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012-04-09</td>
                <td>$138,575</td>
                <td>

                <button type="button" class="btnDetalleExistencia bi bi-pen lang" key="detalles"  data-section="formConsultaExistencia" data-value="detalles" data-toggle="modal" data-target="#modal1" >Detalles</button>
                <button type="button" class="btnReporteExistencia bi bi-pencil-square lang" key="reporte"  data-section="formConsultaExistencia" data-value="reporte">Reporte</button>
                <button type="button" class="btnAnularExistencia  bi bi-x-circle lang"  key="anular"  data-section="formConsultaExistencia" data-value="anular">Anular</button>
   
            </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>




<div class="modal" tabindex="-1" role="dialog" id="modal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title lang" key="consultaExistencia"  data-section="formConsultaExistencia" data-value="consultaExistencia">Consulta de existencia</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form   action="../publico/php/procesarConsultaExistencia.php"  method="POST" id="formConsultaExistencia">
    <div class="modal-body">
        
    <div class="row">

    <div class="col-md-12  form-group mt-1 mb-1">
    <h5 class="modal-title text-center text-dark lang" key="detallesCliente"  data-section="formConsultaExistencia" data-value="detallesCliente">Detalles del cliente</h5>
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="nombre" data-section="formConsultaExistencia"  data-value="nombre">Nombre</label>
        <input type="text" name="txtNombre" data-seccion="formConsultaExistencia"  data-valor="placeholderNombre" data-validetta="required">
        <span class="warnings" id="warningsnombre"  data-section="formConsultaExistencia"  data-value="spannombre"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="correo" data-section="formConsultaExistencia"  data-value="correo">Correo</label>
        <input type="email" name="txtCorreo" data-seccion="formConsultaExistencia"  data-valor="placeholderCorreo" data-validetta="required">
        <span class="warnings" id="warningscorreo"  data-section="formConsultaExistencia"  data-value="spancorreo"></span>
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="nacionalidad" data-section=""  data-value="nacionalidad">Nacionalidad</label>
        <input type="text" name="txtNacionalidad" data-seccion="formConsultaExistencia"  data-valor="placeholderNacionalidad">
        <span class="warnings" id="warningsnacionalidad"  data-section="formConsultaExistencia"  data-value="spannacionalidad"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="nIdentdad" data-section="formConsultaExistencia"  data-value="nIdentdad">Numero de Identidad</label>
        <input type="text" name="txtNIdentidad" data-seccion="formConsultaExistencia"  data-valor="placeholderNIdentidad" data-validetta="required">
        <span class="warnings" id="warningsnumeroidentidad"  data-section="formConsultaExistencia"  data-value="spannumeroidentidad"></span>
    </div>                        

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="telefono" data-section="formConsultaExistencia"  data-value="telefono">Telefono</label>
        <input type="text" name="txtTelefono" data-seccion="formConsultaExistencia"  data-valor="placeholderTelefono" data-validetta="required">
        <span class="warnings" id="warningstelefono"  data-section="formConsultaExistencia"  data-value="spantelefono"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="direccion" data-section="formConsultaExistencia"  data-value="direccion">Direccion</label>
        <input type="text" name="txtDireccion" data-seccion="formConsultaExistencia"  data-valor="placeholderDireccion" data-validetta="required">
        <span class="warnings" id="warningsdireccion"  data-section="formConsultaExistencia"  data-value="spandireccion"></span>
    </div>

    <div class="col-md-12  form-group mt-1 mb-1">
    <h5 class="modal-title text-center text-dark lang" class="lang" key="detalleProducto" data-section="formConsultaExistencia"  data-value="detalleProducto">Detalles del producto</h5>
    </div>


    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="producto" data-section="formConsultaExistencia"  data-value="producto">Producto</label>
        <input type="text" name="txtProducto" data-seccion="formConsultaExistencia"  data-valor="placeholderProducto" data-validetta="required">
        <span class="warnings" id="warningsproducto"  data-section="formConsultaExistencia"  data-value="spanproducto"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="cantidad" data-section="formConsultaExistencia"  data-value="cantidad">Cantidad</label>
        <input type="text" name="txtCantidad" data-seccion="formConsultaExistencia"  data-valor="placeholderCantidad" data-validetta="required">
        <span class="warnings" id="warningscantidad"  data-section="formConsultaExistencia"  data-value="spancantidad"></span>
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="precioUnitario" data-section="formConsultaExistencia"  data-value="precioUnitario">Precio Unitario</label>
        <input type="text" name="txtPrecioUnitario" data-seccion="formConsultaExistencia"  data-valor="placeholderPrecioUnitario" data-validetta="required,precioUnitario">
        <span class="warnings" id="warningsprecioUnitario"  data-section="formConsultaExistencia"  data-value="spanprecioUnitario"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="totalIva" data-section="formConsultaExistencia"  data-value="totalIva">Total con IVA</label>
        <input type="text" name="txtTotalIva" data-seccion="formConsultaExistencia"  data-valor="placeholderTotalIva" data-validetta="required">
        <span class="warnings" id="warningstotalIva"  data-section="formConsultaExistencia"  data-value="spantotalIva"></span>
    </div>

    <div class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="metodoPago" data-section="formConsultaExistencia"  data-value="metodoPago">Metodo de pago</label><br>
        <select name="metodoPago" data-seccion="formConsultaExistencia"  data-valor="">
        <option class="lang" key="efectivo" data-section="formConsultaExistencia" data-value="efectivo" value="Efectivo">Efectivo</option>
        <option class="lang" key="tarjeta" data-section="formConsultaExistencia"  data-value="tarjeta" value="Tarjeta">Tarjeta</option>
    </select>
    </div>

    <div id="" class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="estado" data-section="formConsultaExistencia"  data-value="estado">Estado</label><br>
        <select  name="estado" data-seccion="formConsultaExistencia"  data-valor="">
        <option class="lang" key="activo" data-section="formConsultaExistencia"  data-value="activo" value="Activo ">Activo</option>
        <option class="lang" key="noActivo" data-section="formConsultaExistencia"  data-value="noActivo" value="No activo">No activo</option>
    
    </select>
    </div>
    
</div>

</div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary lang"  key="enviar" data-section="formConsultaExistencia"  data-value="enviar">Enviar</button>
       <button type="button" class="btn btn-secondary lang" data-dismiss="modal"  key="cerrar" data-section="formConsultaExistencia"  data-value="cerrar">Cerrar</button>
        
    </div>
    </form> 



</div>
</div>
</div>

<div class="p-4">
    <div class="row">
        <div class="<?=$col10?>" id="prueba">
        </div>                
    </div>
</div>


<?php
    include('../includes/pie.php');
?>


