<?php
include_once('../includes/funcionesComunes.php');
$value="GestionUsuarios";
$datasection="formGestionUsuario";
$col11="col-9 col-lg-12";
include('../includes/cabecera.php');
?>
            <div class="<?=$col11?> p-4 mx-auto" >
            <div class="col-6 col-md-12  d-flex ml-auto p-4 flex-row-reverse">
                <button type="button" class="btnGuardarUsuario  bi bi-check-lg lang" key="guardar" data-section="formGestionUsuario" data-value="guardar"data-toggle="modal" data-target="#modal2">Guardar</button>
            </div>

    <table id="example" class="table table-light table-striped table-bordered dt-responsive wrap" style="width:100%">
        <thead>
            <tr>
                
                <th class="lang" key="id" data-section="formGestionUsuario" data-value="id">ID</th>
                <th class="lang" key="nombre" data-section="formGestionUsuario" data-value="">Nombre</th>
                <th class="lang" key="apellido" data-section="formGestionUsuario" data-value="apellido">Apellido</th>
                <th class="lang" key="numeroidentificacion" data-section="formGestionUsuario" data-value="numeroidentificacion">Numero de identificacion</th>
                <th class="lang" key="correo" data-section="formGestionUsuario" data-value="correo">Correo</th>
                <th class="lang" key="nacionalidad" data-section="formGestionUsuario" data-value="nacionalidad">Nacionalidad</th>
                <th class="lang" key="direccion" data-section="formGestionUsuario" data-value="direccion">Direccion</th>
                <th class="lang" key="telefono" data-section="formGestionUsuario" data-value="telefono">Telefono</th>
                <th class="lang" key="accionModificar" data-section="formGestionUsuario" data-value="accionModificar" data-priority="1">Accion de modificar</th>
                <th class="lang" key="accionDeshabilitar" data-section="formGestionUsuario" data-value="accionDeshabilitar" data-priority="1">Accion de deshabilitar</th>

            </tr>
        </thead>
        <tbody>
        <tr>
                <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen lang" key="modificar" data-section="formGestionUsuario" data-value="modificar" data-toggle="modal" data-target="#modal2">Modificar</button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle lang" key="deshabilitar" data-section="formGestionUsuario" data-value="deshabilitar">Deshabilitar</button></td>
            </tr>
            <tr>
            <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen lang" key="modificar" data-section="formGestionUsuario" data-value="modificar" data-toggle="modal" data-target="#modal2">Modificar</button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle lang" key="deshabilitar" data-section="formGestionUsuario" data-value="deshabilitar">Deshabilitar</button></td>
            </tr>
            <tr>
            <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen lang" key="modificar" data-section="formGestionUsuario" data-value="modificar" data-toggle="modal" data-target="#modal2">Modificar</button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle lang" key="deshabilitar" data-section="formGestionUsuario" data-value="deshabilitar">Deshabilitar</button></td>
            </tr>
            <tr>
            <td>456</td>
                <td>Daniela</td>
                <td>Romero</td>
                <td>789456</td>
                <td>dani@gmail.com</td>
                <td>Estadounidense</td>
                <td>casa</td>
                <td>7894599</td>
                <td><button type="button" class="btnModificarUsuario bi bi-pen lang" key="modificar" data-section="formGestionUsuario" data-value="modificar" data-toggle="modal" data-target="#modal2">Modificar</button></td>
                <td><button type="button" class="btnDeshabilitarUsuario bi bi-x-circle lang" key="deshabilitar" data-section="formGestionUsuario" data-value="deshabilitar">Deshabilitar</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </tbody>
    </table>
    </div>
</div>


<!--Ventana modal -->

<div class="modal" tabindex="-1" role="dialog" id="modal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title lang" key="gestionUsuario"  data-section="formGestionUsuario" data-value="gestionUsuario">Gestion de Usuario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form   action="../publico/php/procesarGestionUsuario.php"  method="POST" id="formGestionUsuario">
    <div class="modal-body">
        
    <div class="row">

    

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="id" data-section="formGestionUsuario"  data-value="id">ID</label><br>
        <input type="text" name="txtid" data-seccion="formGestionUsuario"  data-valor="placeholderId" data-validetta="required">
        <span class="warnings" id="warningsId"  data-section="formGestionUsuario"  data-value="spanId"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="nombre" data-section="formGestionUsuario"  data-value="nombre">Nombre</label>
        <input type="text" name="txtNombre" data-seccion="formGestionUsuario"  data-valor="placeholderNombre" data-validetta="required">
        <span class="warnings" id="warningsNombre"  data-section="formGestionUsuario"  data-value="spanNombre"></span>
    </div>

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="apellido" data-section="formGestionUsuario"  data-value="apellido">Apellido</label>
        <input type="text" name="txtApellido" data-seccion="formGestionUsuario"  data-valor="placeholderApellido">
        <span class="warnings" id="warningsApellido"  data-section="formGestionUsuario"  data-value="spanApellido"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="numeroIdentificacion" data-section="formGestionUsuario"  data-value="numeroIdentificacion">Numero de Identidad</label>
        <input type="text" name="txtNumeroIdentificacion" data-seccion="formGestionUsuario"  data-valor="placeholderNumeroIdentificacion" data-validetta="required">
        <span class="warnings" id="warningsNumeroIdentificacion"  data-section="formGestionUsuario"  data-value="spanNumeroIdentificacion"></span>
    </div>                        

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="correo" data-section="formGestionUsuario"  data-value="correo">Correo</label>
        <input type="email" name="txtCorreo" data-seccion="formGestionUsuario"  data-valor="placeholderCorreo" data-validetta="required">
        <span class="warnings" id="warningstCorreo"  data-section="formGestionUsuario"  data-value="spanCorreo"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="nacionalidad" data-section="formGestionUsuario"  data-value="nacionalidad">Nacionalidad</label>
        <input type="text" name="txtNacionalidad" data-seccion="formGestionUsuario"  data-valor="placeholderNacionalidad" data-validetta="required">
        <span class="warnings" id="warningsNacionalidad"  data-section="formGestionUsuario"  data-value="spanNacionalidad"></span>
    </div>

    

    <div class="col-md-12 col-lg-6 form-group mt-1 mb-1">
        <label class="lang" key="direccion" data-section="formGestionUsuario"  data-value="direccion">Direccion</label>
        <input type="text" name="txtDireccion" data-seccion="formGestionUsuario"  data-valor="placeholderDireccion" data-validetta="required">
        <span class="warnings" id="warningsDireccion"  data-section="formGestionUsuario"  data-value="spanDireccion"></span>
    </div>

    <div  class="col-lg-6 col-md-12 mt-1 mb-1">
        <label class="lang" key="telefono" data-section="formGestionUsuario"  data-value="telefono">Telefono</label>
        <input type="text" name="txtTelefono" data-seccion="formGestionUsuario"  data-valor="placeholderTelefono" data-validetta="required">
        <span class="warnings" id="warningsTelefono"  data-section="formGestionUsuario"  data-value="spanTelefono"></span>
    </div>

    
    
</div>

</div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary lang"  key="enviar" data-section="formGestionUsuario"  data-value="enviar">Enviar</button>
       <button type="button" class="btn btn-secondary lang" data-dismiss="modal"  key="cerrar" data-section="formGestionUsuario"  data-value="cerrar">Cerrar</button>
        
    </div>
    </form> 



</div>
</div>
</div>

<div class="col-auto ">
    <div class="row">
        <div class="col-md-12">
        <div class="<?=$col12?>" id="prueba2">
        </div>                
    </div>
</div>
</div>

<?php
    include('../includes/pie.php');
?>