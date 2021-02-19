<?php require 'includes/redireccion.php'; ?>
<?php require 'includes/cabecera.php'; ?>
<?php require 'includes/lateral.php'; ?>

<div id="principal">
    <h1>Mi Perfil</h1>

    <!-- Mostrar Errores -->
    <?php if(isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito">
            <?=$_SESSION['completado']; ?>
        </div>
    <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['errores']['general']; ?>
        </div>
    <?php endif; ?>

    <form action="actualizarUsuario.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']; ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']; ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

        <input type="submit" value="Actualizar" name="submit"/>
    </form>
    <?php borrarErrores(); ?>
</div>

<?php require 'includes/pie.php'; ?>