<nav class="navbar navbar-expand-md navbar-dark sticky-top">
<img id="imgheader" src="<?=$raiz?>publico/img/logo.png" alt="Logo SASICASA">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav navbar-center">
        <li class="nav-item">
        <a  class="nav-link lang" href="<?=$raiz?>vista/Inicio.php"  key="Inicio" data-section="global" data-value="Inicio">Inicio</a></li>
        <li class="nav-item">
        <a class="nav-link lang" href="<?=$raiz?>vista/GestionUsuarios.php"  key="GestionUsuarios" data-section="global" data-value="GestionUsuarios">Gestión de usuarios</a></li>
        <li class="nav-item">
        <a class="nav-link lang" href="<?=$raiz?>vista/ConsultaExistencia.php"  key="ConsultaExistencia" data-section="global" data-value="ConsultaExistencia">Consulta de existencia</a></li>
        <li class="nav-item">
        <a class="nav-link lang" href="<?=$raiz?>vista/SolicitudPedidos.php"  key="SolicitudPedidos" data-section="global" data-value="SolicitudPedidos">Solicitud de pedidos</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle lang" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  key="Sobre" data-section="global" data-value="Sobre">
            Sobre
        </a>
        <div id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item lang" href="<?=$raiz?>vista/Calidad.php"  key="Calidad" data-section="global" data-value="Calidad">Calidad</a>
            <a class="dropdown-item lang" href="<?=$raiz?>vista/Productos.php"  key="Productos" data-section="global" data-value="Productos">Productos</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link lang" target="_blank" rel="noopener noreferrer"  href="https://sacoselsalvador.com/sasicasa/contacto/"  key="Contacto" data-section="global" data-value="Contacto">Contáctanos</a></li>
    </ul>
    </div>
</nav> 