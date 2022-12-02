create database demo;
use demo;

create table traduccion(
id varchar(100) not null,
idioma char(2) not null,
llave char(50) not null,
valor varchar(300) not null
) ;

select * from traduccion;

insert into traduccion(id, idioma, llave, valor) values
('index','es','form','Formulario'),
('index','es','correo','Correo'),
('index','es','contra','Contraseña'),
('index','es','pais','País'),
('index','es','IP','IP'),
('index','es','codigoPais','Código de país'),
('index','es','guardar','Guardar'),
('index','es','Title','¿Desea ingresar los datos?'),
('index','es','Text','La información será enviada'),
('index','es','confirmButtonText','Si, enviar'),
('index','es','errorTitle','Error al enviar'),
('index','es','successTitle','Formulario enviado'),
('index','es','successText','Muchas gracias'),
('index','es','spancorreo','No ha ingresado el correo'),
('index','es','spancontra','No ha ingresado la contraseña'),
('index','es','placeholdercorreo','Escribe tu correo'),
('index','es','placeholdercontra','Escribe tu contraseña'), 
('index','en','form','Form'),
('index','en','correo','Email'),
('index','en','contra','Password'),
('index','en','pais','Country'),
('index','en','IP','IP'),
('index','en','codigoPais','Country Code'),
('index','en','guardar','Save'),
('index','en','Title','Do you want to send the data?'),
('index','en','Text','Information is going to be send'),
('index','en','confirmButtonText','Yes, send'),
('index','en','errorTitle','Error while sending'),
('index','en','successTitle','Form sent'),
('index','en','successText','Thank you'),
('index','en','spancorreo','You have not entered the email'),
('index','en','spancontra','You have not entered the password'),
('index','en','placeholdercorreo','Write your email'),
('index','en','placeholdercontra','Write your password'),
('formSolicitudPedidos','es','TitleDinamico','¿Desea enviar el formulario?'),
('formSolicitudPedidos','es','TextDinamico','La información será guardada'),
('formSolicitudPedidos','es','ConfirmDinamico','Si, enviar'),
('formSolicitudPedidos','es','DenyDinamico','No, salir'),
('formSolicitudPedidos','es','TitleDinamicoError','Error'),
('formSolicitudPedidos','es','TitleDinamicoCancelado','Cancelado'),
('formSolicitudPedidos','es','TitleFacturarDinamico','¿Desea facturar?'),
('formSolicitudPedidos','es','TextFacturarDinamico','El pedido será realizado'),
('formSolicitudPedidos','es','TitleFacturarDinamicoSuccess','Compra realizada'),
('formSolicitudPedidos','es','tituloSolicitudPedidos','Solicitud de pedido'),
('formSolicitudPedidos','es','DatosCliente','Datos del cliente'),
('formSolicitudPedidos','es','NomCompleto','Nombre completo'),
('formSolicitudPedidos','es','correo','Correo electrónico'),
('formSolicitudPedidos','es','Nacionalidad','Nacionalidad'),
('formSolicitudPedidos','es','Estadounidense','Estadounidense'),
('formSolicitudPedidos','es','NumIndentificacion','Número de identificación'),
('formSolicitudPedidos','es','NumTelefono','Número de teléfono'),
('formSolicitudPedidos','es','Direccion','Dirección'),
('formSolicitudPedidos','es','Productos','Productos'),
('formSolicitudPedidos','es','AgregarProducto','Agregar producto'),
('formSolicitudPedidos','es','NombreT','Nombre'),
('formSolicitudPedidos','es','CantidadT','Cantidad'),
('formSolicitudPedidos','es','QuitarT','Quitar'),
('formSolicitudPedidos','es','Sacos','Sacos'),
('formSolicitudPedidos','es','Enviar','Enviar'),
('formSolicitudPedidos','es','Cancelar','Cancelar'),
('formSolicitudPedidos','es','NomCompleto','Nombre Completo'),
('formSolicitudPedidos','es','correo','Correo electrónico'),
('formSolicitudPedidos','es','Nacionalidad','Nacionalidad'),
('formSolicitudPedidos','es','NumIndentificacion','Número de identificación'),
('formSolicitudPedidos','es','NumTelefono','Número teléfono'),
('formSolicitudPedidos','es','Direccion','Dirección'),
('formSolicitudPedidos','es','productoT','Producto'),
('formSolicitudPedidos','es','CantidadT','Cantidad'),
('formSolicitudPedidos','es','precioUniT','Precio Unitario'),
('formSolicitudPedidos','es','totalIVA','Total con IVA'),
('formSolicitudPedidos','es','Facturar','Facturar'),
('formSolicitudPedidos','es','InfoTarjeta','Indique la información de su tarjeta'),
('formSolicitudPedidos','es','MetodoPago','Método de pago'),
('formSolicitudPedidos','es','TarjetaCredito','Tarjeta de crédito'),
('formSolicitudPedidos','es','TarjetaDebito','Tarjeta de débito'),
('formSolicitudPedidos','es','NomTarjeta','Nombre de la tarjeta'),
('formSolicitudPedidos','es','NumTarjeta','Número de tarjeta'),
('formSolicitudPedidos','es','FechaVence','Fecha de vencimiento'),
('formSolicitudPedidos','es','Comprobante','Comprobante'),
('formSolicitudPedidos','es','Enviar','Enviar'),
('formSolicitudPedidos','es','Cancelar','Cancelar'),
('formSolicitudPedidos','es','PLComprobanteP','Factura'),
('formSolicitudPedidos','es','PLNomCompletoP','Ingrese su nombre completo'),
('formSolicitudPedidos','es','PLcorreoP','Ingrese su correo'),
('formSolicitudPedidos','es','PLNumIndentificacionP','Ingrese su número de identificación'),
('formSolicitudPedidos','es','PLNumTelefonoP','Ingrese su número de teléfono'),
('formSolicitudPedidos','es','PLNomTarjetaP','Ingrese el nombre de su tarjeta'),
('formSolicitudPedidos','es','PLNumTarjetaP','Ingrese el número de su tarjeta'),
('formSolicitudPedidos','es','PLDireccionP','Ingrese su dirección'),


('global','es','Inicio','Inicio'),
('global','es','GestionUsuarios','Gestión de usuarios'),
('global','es','ConsultaExistencia','Consulta de existencia'),
('global','es','SolicitudPedidos','Solicitud de pedidos'),
('global','es','Sobre','sobre'),
('global','es','Calidad','Calidad'),
('global','es','Productos','Productos'),
('global','es','Contacto','Contáctanos'),
('global','es','Derechos','2022, SACOS EL SALVADOR | Reservados todos los derechos.'),
('global','es','Inglés','Inglés'),
('global','es','Español','Español'),

('formGestionUsuario','es','guardar','Guardar'),
('formGestionUsuario','es','id','ID'),
('formGestionUsuario','es','nombre','Nombre'),
('formGestionUsuario','es','apellido','Apellido'),
('formGestionUsuario','es','numeroidentificacion','Número de identificación'),
('formGestionUsuario','es','correo','Correo'),
('formGestionUsuario','es','nacionalidad','Nacionalidad'),
('formGestionUsuario','es','direccion','Dirección'),
('formGestionUsuario','es','telefono','Teléfono'),
('formGestionUsuario','es','accionModificar','Acción de modificar'),
('formGestionUsuario','es','accionDeshabilitar','Acción de deshabilitar'),
('formGestionUsuario','es','modificar','Modificar'),
('formGestionUsuario','es','deshabilitar','Deshabilitar'),
('formGestionUsuario','es','gestionUsuario','Gestión de Usuario'),
('formGestionUsuario','es','enviar','Enviar'),
('formGestionUsuario','es','cerrar','Cerrar'),
('formGestionUsuario','es','numeroIdentificacion','Número de Identidad'),
('formGestionUsuario','es','Title','¿Desea enviar el formulario?'),
('formGestionUsuario','es','Text','La información será guardada'),
('formGestionUsuario','es','confirmButtonText','Si, enviar'),
('formGestionUsuario','es','denyButtonText','No, salir'),
('formGestionUsuario','es','successTitle','Gestión de usuario'),
('formGestionUsuario','es','TitleDinamicoCancelado','Cancelado'),
('formGestionUsuario','es','TitleDinamicoError','Error'),
('formGestionUsuario','es','PLNomCompletoU','Ingrese su nombre'),
('formGestionUsuario','es','PLApellidoU','Ingrese su apellido'),
('formGestionUsuario','es','PLNumIndentificacionU','Ingrese su número de Identificación'),
('formGestionUsuario','es','PLcorreoU','Ingrese su correo'),
('formGestionUsuario','es','PLNacionalidadU','Ingrese su nacionalidad'),
('formGestionUsuario','es','PLDireccionU','Ingrese su dirección'),
('formGestionUsuario','es','PLNumTelefonoU','Ingrese su teléfono'),


('formConsultaExistencia','es','numeroFactura','Número de factura'),
('formConsultaExistencia','es','cliente','Cliente'),
('formConsultaExistencia','es','comprobante','Comprobante'),
('formConsultaExistencia','es','impuesto','Impuesto'),
('formConsultaExistencia','es','total','Total'),
('formConsultaExistencia','es','estado','Estado'),
('formConsultaExistencia','es','acciones','Acciones'),
('formConsultaExistencia','es','detalles','Detalles'),
('formConsultaExistencia','es','reporte','Reporte'),
('formConsultaExistencia','es','anular','Anular'),
('formConsultaExistencia','es','consultaExistencia','Consulta de existencia'),
('formConsultaExistencia','es','detallesCliente','Detalles del cliente'),
('formConsultaExistencia','es','nombre','Nombre'),
('formConsultaExistencia','es','correo','Correo'),
('formConsultaExistencia','es','nacionalidad','Nacionalidad'),
('formConsultaExistencia','es','nIdentdad','Número de Identidad'),
('formConsultaExistencia','es','telefono','Teléfono'),
('formConsultaExistencia','es','direccion','Dirección'),
('formConsultaExistencia','es','detalleProducto','Detalles del producto'),
('formConsultaExistencia','es','producto','Producto'),
('formConsultaExistencia','es','cantidad','Cantidad'),
('formConsultaExistencia','es','precioUnitario','Precio Unitario'),
('formConsultaExistencia','es','totalIva','Total con IVA'),
('formConsultaExistencia','es','metodoPago','Método de pago'),
('formConsultaExistencia','es','efectivo','Efectivo'),
('formConsultaExistencia','es','tarjeta','Tarjeta'),
('formConsultaExistencia','es','estado','Estado'),
('formConsultaExistencia','es','activo','Activo'),
('formConsultaExistencia','es','noActivo','No activo'),
('formConsultaExistencia','es','enviar','Enviar'),
('formConsultaExistencia','es','cerrar','Cerrar'),
('formConsultaExistencia','es','TitleDinamico','¿Desea enviar el formulario?'),
('formConsultaExistencia','es','TextDinamico','La información será guardada'),
('formConsultaExistencia','es','ConfirmDinamico','Si, enviar'),
('formConsultaExistencia','es','DenyDinamico','No, salir'),
('formConsultaExistencia','es','TitleDinamicoError','Error'),
('formConsultaExistencia','es','TitleDinamicoCancelado','Cancelado'),
('formConsultaExistencia','es','TitleSuccessDinamico','Consulta de existencia'),
('formConsultaExistencia','es','PLNombreCE','Ingrese su nombre'),
('formConsultaExistencia','es','PLCorreoCE','Ingrese su correo'),
('formConsultaExistencia','es','PLNacionalidadCE','Ingrese su nacionalidad'),
('formConsultaExistencia','es','PLNIdentidadCE','Ingrese su número de identidad'),
('formConsultaExistencia','es','PLTelefonoCE','Ingrese su número de teléfono'),
('formConsultaExistencia','es','PLDireccionCE','Ingrese su dirección'),
('formConsultaExistencia','es','PLProductoCE','Ingrese nombre de producto'),
('formConsultaExistencia','es','PLCantidadCE','Ingrese su cantidad'),
('formConsultaExistencia','es','PLPrecioUnitarioCE','Ingrese precio unitario'),

('formInicio','es','texto','En Sacos Sintéticos Centroamericanos ofrecemos soluciones de empaque, productos tejidos y no tejidos de polipropileno, actuando como líderes en el mercado salvadoreño, basando nuestro crecimiento en el mercado de la exportación.'),
('formInicio','es','Inicio','Inicio'),

('formSolicitudPedidos','en','TitleDinamico','Do you want to submit the form?'),
('formSolicitudPedidos','en','TextDinamico','The information will be saved'),
('formSolicitudPedidos','en','ConfirmDinamico','Yes, send'),
('formSolicitudPedidos','en','DenyDinamico','No, exit'),
('formSolicitudPedidos','en','TitleDinamicoError','Error'),
('formSolicitudPedidos','en','TitleDinamicoCancelado','Canceled'),
('formSolicitudPedidos','en','TitleFacturarDinamico','Do you want to invoice?'),
('formSolicitudPedidos','en','TextFacturarDinamico','The order will be placed'),
('formSolicitudPedidos','en','TitleFacturarDinamicoSuccess','Purchase made'),
('formSolicitudPedidos','en','tituloSolicitudPedidos','Pre-Order Form'),
('formSolicitudPedidos','en','DatosCliente','Customer data'),
('formSolicitudPedidos','en','NomCompleto','Full name'),
('formSolicitudPedidos','en','correo','Email'),
('formSolicitudPedidos','en','Nacionalidad','Nationality'),
('formSolicitudPedidos','en','Estadounidense','American'),
('formSolicitudPedidos','en','NumIndentificacion','Identification number'),
('formSolicitudPedidos','en','NumTelefono','Phone Number'),
('formSolicitudPedidos','en','Direccion','Address'),
('formSolicitudPedidos','en','Productos','Products'),
('formSolicitudPedidos','en','AgregarProducto','Add Product'),
('formSolicitudPedidos','en','NombreT','Name'),
('formSolicitudPedidos','en','CantidadT','Quantity'),
('formSolicitudPedidos','en','QuitarT','Remove'),
('formSolicitudPedidos','en','Sacos','Sacks'),
('formSolicitudPedidos','en','Enviar','Send'),
('formSolicitudPedidos','en','Cancelar','Cancel'),
('formSolicitudPedidos','en','NomCompleto','Full name'),
('formSolicitudPedidos','en','correo','Email'),
('formSolicitudPedidos','en','Nacionalidad','Nationality'),
('formSolicitudPedidos','en','NumIndentificacion','Identification number'),
('formSolicitudPedidos','en','NumTelefono','Phone number'),
('formSolicitudPedidos','en','Direccion','Address'),
('formSolicitudPedidos','en','productoT','Product'),
('formSolicitudPedidos','en','CantidadT','Quantity'),
('formSolicitudPedidos','en','precioUniT','Unit Price'),
('formSolicitudPedidos','en','totalIVA','Total with IVA'),
('formSolicitudPedidos','en','Facturar','Invoice'),
('formSolicitudPedidos','en','InfoTarjeta','Enter your card information'),
('formSolicitudPedidos','en','MetodoPago','Payment method'),
('formSolicitudPedidos','en','TarjetaCredito','Credit card'),
('formSolicitudPedidos','en','TarjetaDebito','Debit card'),
('formSolicitudPedidos','en','NomTarjeta','Card name'),
('formSolicitudPedidos','en','NumTarjeta','Card number'),
('formSolicitudPedidos','en','FechaVence','Expiration date'),
('formSolicitudPedidos','en','Comprobante','Voucher'),
('formSolicitudPedidos','en','Enviar','Send'),
('formSolicitudPedidos','en','Cancelar','Cancel'),
('formSolicitudPedidos','en','PLComprobanteP','Receipt'),
('formSolicitudPedidos','en','PLNomCompletoP','Enter your full name'),
('formSolicitudPedidos','en','PLcorreoP','Enter your email'),
('formSolicitudPedidos','en','PLNumIndentificacionP','Enter your ID number'),
('formSolicitudPedidos','en','PLNumTelefonoP','Enter your phone number'),
('formSolicitudPedidos','en','PLNomTarjetaP','Enter your card name'),
('formSolicitudPedidos','en','PLNumTarjetaP','Enter your card number'),
('formSolicitudPedidos','en','PLDireccionP','Enter your address'),


('global','en','Inicio','Home'),
('global','en','GestionUsuarios','User Management'),
('global','en','ConsultaExistencia','Inventory look-up'),
('global','en','SolicitudPedidos','Pre-Order Form'),
('global','en','Sobre','About'),
('global','en','Calidad','Quality'),
('global','en','Productos','Products'),
('global','en','Derechos','2022, SACOS EL SALVADOR | All rights reserved.'),
('global','en','Contacto','Contact us'),
('global','en','Inglés','English'),
('global','en','Español','Spanish'),

('formGestionUsuario','en','guardar','Save'),
('formGestionUsuario','en','id','ID'),
('formGestionUsuario','en','nombre','Name'),
('formGestionUsuario','en','apellido','Last name'),
('formGestionUsuario','en','numeroidentificacion','ID Number'),
('formGestionUsuario','en','correo','Email'),
('formGestionUsuario','en','nacionalidad','Nationality'),
('formGestionUsuario','en','direccion','Address'),
('formGestionUsuario','en','telefono','Phone'),
('formGestionUsuario','en','accionModificar','Modify action'),
('formGestionUsuario','en','accionDeshabilitar','Disable action'),
('formGestionUsuario','en','modificar','Modify'),
('formGestionUsuario','en','deshabilitar','Disable'),
('formGestionUsuario','en','gestionUsuario','User management'),
('formGestionUsuario','en','enviar','Send'),
('formGestionUsuario','en','cerrar','Close'),
('formGestionUsuario','en','numeroIdentificacion','Identity Number'),
('formGestionUsuario','en','Title','Do you want to send the form?'),
('formGestionUsuario','en','Text','The information will be saved'),
('formGestionUsuario','en','confirmButtonText','Yes, send'),
('formGestionUsuario','en','denyButtonText','No, leave'),
('formGestionUsuario','en','successTitle','User management'),
('formGestionUsuario','en','TitleDinamicoCancelado','Canceled'),
('formGestionUsuario','en','TitleDinamicoError','Error'),
('formGestionUsuario','en','PLNomCompletoU','Enter your first name'),
('formGestionUsuario','en','PLApellidoU','Enter your last name'),
('formGestionUsuario','en','PLNumIndentificacionU','Enter your ID number'),
('formGestionUsuario','en','PLcorreoU','Enter your email address'),
('formGestionUsuario','en','PLNacionalidadU','Enter your nationality'),
('formGestionUsuario','en','PLDireccionU','Enter your address'),
('formGestionUsuario','en','PLNumTelefonoU','Enter your phone number'),

('formConsultaExistencia','en','numeroFactura','Invoice number'),
('formConsultaExistencia','en','cliente','Customer'),
('formConsultaExistencia','en','comprobante','Receipt'),
('formConsultaExistencia','en','impuesto','Tax'),
('formConsultaExistencia','en','total','Total'),
('formConsultaExistencia','en','estado','Status'),
('formConsultaExistencia','en','acciones','Actions'),
('formConsultaExistencia','en','detalles','Details'),
('formConsultaExistencia','en','reporte','Report'),
('formConsultaExistencia','en','anular','Cancel'),
('formConsultaExistencia','en','consultaExistencia','Inventory look-up'),
('formConsultaExistencia','en','detallesCliente','Customer Details'),
('formConsultaExistencia','en','nombre','Name'),
('formConsultaExistencia','en','correo','Email'),
('formConsultaExistencia','en','nacionalidad','Nationality'),
('formConsultaExistencia','en','nIdentdad','Identity Number'),
('formConsultaExistencia','en','telefono','Phone'),
('formConsultaExistencia','en','direccion','Address'),
('formConsultaExistencia','en','detalleProducto','Product Details'),
('formConsultaExistencia','en','producto','Product'),
('formConsultaExistencia','en','cantidad','Quantity'),
('formConsultaExistencia','en','precioUnitario','Unit Price'),
('formConsultaExistencia','en','totalIva','Total with IVA'),
('formConsultaExistencia','en','metodoPago','Payment method'),
('formConsultaExistencia','en','efectivo','Cash'),
('formConsultaExistencia','en','tarjeta','Card'),
('formConsultaExistencia','en','estado','Status'),
('formConsultaExistencia','en','activo','Active'),
('formConsultaExistencia','en','noActivo','Non-Active'),
('formConsultaExistencia','en','enviar','Send'),
('formConsultaExistencia','en','cerrar','Close'),
('formConsultaExistencia','en','TitleDinamico','Do you want to submit the form?'),
('formConsultaExistencia','en','TextDinamico','The information will be saved'),
('formConsultaExistencia','en','ConfirmDinamico','Yes, send'),
('formConsultaExistencia','en','DenyDinamico','No, exit'),
('formConsultaExistencia','en','TitleDinamicoError','Error'),
('formConsultaExistencia','en','TitleDinamicoCancelado','Canceled'),
('formConsultaExistencia','en','TitleSuccessDinamico','Inventory look-up'),
('formConsultaExistencia','en','PLNombreCE','Enter your name'),
('formConsultaExistencia','en','PLCorreoCE','Enter your email address'),
('formConsultaExistencia','en','PLNacionalidadCE','Enter your nationality'),
('formConsultaExistencia','en','PLNIdentidadCE','Enter your identity number'),
('formConsultaExistencia','en','PLTelefonoCE','Enter your phone number'),
('formConsultaExistencia','en','PLDireccionCE','Enter your address'),
('formConsultaExistencia','en','PLProductoCE','Enter your product name'),
('formConsultaExistencia','en','PLCantidadCE','Enter your quantity'),
('formConsultaExistencia','en','PLPrecioUnitarioCE','Enter your unit price'),


('formInicio','en','texto','In Sacos Sintéticos Centroamericanos we offer packaging solutions, woven and non-woven polypropylene products, acting as leaders in the Salvadoran market, basing our growth in the export market.'),
('formInicio','en','Inicio','Home'),

/*span*/
('formGestionUsuario','es','spanId','ID no introducido correctamente'),
('formGestionUsuario','es','spanNombre','Nombre no introducido correctamente'),
('formGestionUsuario','es','spanApellido','Apellido no introducido correctamente'),
('formGestionUsuario','es','spanNumeroIdentificacion','Numero de identidad no introducido correctamente'),
('formGestionUsuario','es','spanCorreo','Correo no introducido correctamente'),
('formGestionUsuario','es','spanNacionalidad','Nacionalidad no introducido correctamente'),
('formGestionUsuario','es','spanDireccion','Dirección no introducido correctamente'),
('formGestionUsuario','es','spanTelefono','Teléfono no introducido correctamente'),

('formGestionUsuario','en','spanId','ID not entered correctly'),
('formGestionUsuario','en','spanNombre','Name not entered correctly'),
('formGestionUsuario','en','spanApellido','Last name not entered correctly'),
('formGestionUsuario','en','spanNumeroIdentificacion','ID number not entered correctly'),
('formGestionUsuario','en','spanCorreo','Email not entered correctly'),
('formGestionUsuario','en','spanNacionalidad','Nationality not entered correctly'),
('formGestionUsuario','en','spanDireccion','Address not correctly entered'),
('formGestionUsuario','en','spanTelefono','Telephone not correctly entered'),

('formConsultaExistencia','es','spannombreCE','Nombre no introducido correctamente'),
('formConsultaExistencia','es','spancorreoCE','Correo no introducido correctamente'),
('formConsultaExistencia','es','spannacionalidadCE','Nacionalidad no introducido correctamente'),
('formConsultaExistencia','es','spannumeroidentidadCE','Numero de Identidad no introducido correctamente'),
('formConsultaExistencia','es','spantelefonoCE','Teléfono no introducido correctamente'),
('formConsultaExistencia','es','spandireccionCE','Dirección no introducido correctamente'),
('formConsultaExistencia','es','spanproductoCE','Producto no introducido correctamente'),
('formConsultaExistencia','es','spancantidadCE','Cantidad no introducido correctamente'),
('formConsultaExistencia','es','spanprecioUnitarioCE','Precio Unitario no introducido correctamente'),
('formConsultaExistencia','es','spantotalIvaCE','Total con IVA no introducido correctamente'),


('formConsultaExistencia','en','spannombreCE','Name not entered correctly'),
('formConsultaExistencia','en','spancorreoCE','Mail not correctly entered'),
('formConsultaExistencia','en','spannacionalidadCE','Nationality not correctly entered'),
('formConsultaExistencia','en','spannumeroidentidadCE','Identity number not entered correctly'),
('formConsultaExistencia','en','spantelefonoCE','Telephone not correctly entered'),
('formConsultaExistencia','en','spandireccionCE','Address not entered correctly'),
('formConsultaExistencia','en','spanproductoCE','Product not entered correctly'),
('formConsultaExistencia','en','spancantidadCE','Quantity not entered correctly'),
('formConsultaExistencia','en','spanprecioUnitarioCE','Unit Price not entered correctly'),
('formConsultaExistencia','en','spantotalIvaCE',' Total incl. VAT not correctly entered'),

('formSolicitudPedidos','es','spanNombreTarjeta','Nombre de la tarjeta no introducido correctamente'),
('formSolicitudPedidos','es','spanNumeroTarjeta','Número de tarjeta no introducido correctamente'),
('formSolicitudPedidos','es','spanFechaVence','Fecha de vencimiento no introducido correctamente'),


('formSolicitudPedidos','en','spanNombreTarjeta','Card name not entered correctly'),
('formSolicitudPedidos','en','spanNumeroTarjeta','Card number not entered correctly'),
('formSolicitudPedidos','es','spanFechaVence','Expiration date not correctly entered'),

('formSolicitudPedidos','es','spanNombreCompletoSP','Nombre completo no introducido correctamente'),
('formSolicitudPedidos','es','spanCorreoElectronicoSP','Correo electrónico no introducido correctamente'),
('formSolicitudPedidos','es','spanNumIndentificacionSP','Número de identificación no introducido correctamente'),
('formSolicitudPedidos','es','spanTelefonoSP','Número de teléfono no introducido correctamente'),
('formSolicitudPedidos','es','spanDireccionSP','Dirección no introducido correctamente'),

('formSolicitudPedidos','en','spanNombreCompletoSP','Full name not entered correctly'),
('formSolicitudPedidos','en','spanCorreoElectronicoSP','E-mail address not entered correctly'),
('formSolicitudPedidos','en','spanNumIndentificacionSP','ID number not entered correctly'),
('formSolicitudPedidos','en','spanTelefonoSP','Telephone number not entered correctly'),
('formSolicitudPedidos','en','spanDireccionSP','Address not entered correctly');
