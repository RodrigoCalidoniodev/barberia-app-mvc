<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form class="formulario" method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" placeholder="Ingresa tu nombre" name="nombre" value="<?php echo s($usuario->nombre); ?>"/>
    </div>

    <div class="campo">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" placeholder="Ingresa tu apellido" name="apellido" value="<?php echo s($usuario->apellido); ?>"/>
    </div>

    <div class="campo">
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" placeholder="Ingresa tu número telefónico" name="telefono" value="<?php echo s($usuario->telefono); ?>"/>
    </div>

    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Ingresa tu email" name="email" value="<?php echo s($usuario->email); ?>"/>
    </div>

    <div class="campo">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" placeholder="Crea tu password" name="password"/>
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? ¡Inicia Sesión!</a>
    <a href="/change">¿Olvidaste tu contraseña?</a>
</div>