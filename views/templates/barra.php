<div class="barra">
    <a class="boton" href="/logout">Cerrar Sesión</a>
    <p>¡Hola, <?php echo $nombre ?? ''; ?>!</p>
</div>

<?php if(isset($_SESSION['admin'])) { ?>

    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver Citas</a>
        <a class="boton" href="/servicios">Ver Servicios</a>
        <a class="boton" href="/servicios/crear">Nuevo Servicio</a>
    </div>

<?php } ?>