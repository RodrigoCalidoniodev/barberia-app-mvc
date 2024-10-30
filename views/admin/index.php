<h1 class="nombre-pagina">Panel de administración</h1>

<?php include_once __DIR__ . '/../templates/barra.php' ?>

<h2>Buscar Citas</h2>

<div class="busqueda">
    <form class="formulario">
        <div class="campo">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" value="<?php echo $fecha ?>">
        </div>
    </form>
</div>

<?php 
    if(count($citas) === 0) {
        echo "<h2>No hay citas registradas en esta fecha</h2>";
    }
?>

<div id="citas-admin">
    <ul class="citas">
        <?php
            $IdCita = 0;

            foreach($citas as $key => $cita) {

                // Con este if no se repiten los datos de una misma cita.
                if($IdCita !== $cita->id) {
                $total = 0
        ?>
        <li>
            <p>ID: <span><?php echo $cita->id ?></span></p>
            <p>Hora: <span><?php echo $cita->hora ?></span></p>
            <p>Fecha: <span><?php echo $cita->cliente ?></span></p>
            <p>Email: <span><?php echo $cita->email ?></span></p>
            <p>Teléfono: <span><?php echo $cita->telefono ?></span></p>

            <h3>Servicios</h3>

            <?php 
                $IdCita = $cita->id;    
                } // Fin de IF

                $total += $cita->precio;
            ?>

            <p class="servicio"><?php echo $cita->servicio . " ---> $" . $cita->precio; ?></p>

            <?php 
                $actual = $cita->id;
                $proximo = $citas[$key + 1]->id ?? 0;

                if(esUltimo($actual, $proximo)) { ?>
                    <p class="total">Total a pagar: <span>$ <?php echo number_format($total,2)  ?></span></p>

                    <form action="/api/eliminar" method="POST" id="formEliminar-<?php echo $cita->id; ?>">
                        <input type="hidden" name="id" value="<?php echo $cita->id; ?>">
                        <input type="submit" class="boton-eliminar" value="Eliminar" onclick="confirmDelete(event, <?php echo $cita->id; ?>)">
                    </form>

            <?php } ?>
            
        <?php } // Fin de Foreach ?>
    </ul>
</div>

<?php 
     $script = "
     <script src='build/js/buscador.js'></script>
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    ";
    
?>