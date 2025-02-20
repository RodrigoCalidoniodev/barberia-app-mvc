<h1 class="nombre-pagina">Olvidé mi contraseña</h1>

<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu email a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form class="formulario" method="POST" action="/change">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Ingresa tu email" name="email">
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? ¡Inicia Sesión!</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡Crea una!</a>
</div>