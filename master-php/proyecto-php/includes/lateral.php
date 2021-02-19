
<!-- Barra lateral -->
<aside id="sidebar">

    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
            <?php /* var_dump($_SESSION['usuario']); */ ?>

            <!-- botones -->
            <a href="crearEntradas.php" id="" class="boton boton-verde">Crear entradas</a>
            <a href="crearCategoria.php" id="" class="boton boton">Crear categoria</a>
            <a href="perfil.php" id="" class="boton boton-naranja">Mis perfil</a>
            <a href="cerrarSesion.php" id="" class="boton boton-rojo">Cerrar sesión</a>

        </div>
    <?php endif; ?>

    <?php if(!isset($_SESSION['usuario'])): ?>

        <div id="login" class="bloque">
            <h3>Identificate</h3>

            <?php if(isset($_SESSION['error-login'])): ?>
                <div class="alerta alerta-error">
                    <?=$_SESSION['error-login'];?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="email">Correo electronico</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" value="Entrar" />
            </form>
        </div>
        <div id="register" class="bloque">
            <h3>Registrate</h3>

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

            <form action="registro.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                <label for="email">Correo electronico</label>
                <input type="email" name="email">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" value="Registrarse" name="submit"/>
            </form>
            <?php borrarErrores(); ?>
        </div>

    <?php endif; ?>

</aside>