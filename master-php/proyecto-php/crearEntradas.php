<?php require 'includes/redireccion.php'; ?>
<?php require 'includes/cabecera.php'; ?>
<?php require 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuarios 
        puedan leerlas y disfrutar de nuestro contenido.
    </p><br>
    
    <form action="guardarEntrada.php" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" placeholder="Introduce un titulo">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" cols="100" rows="10" placeholder="Introduce una descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

        <label for="categoria">Categoria</label>
        <select name="categoria" default="Seleccione una categoria">
            <option value="" selected disabled hidden> 
                Selecciona una categoria
            </option>
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>">
                        <?=$categoria['nombre']?>
                </option>
            <?php 
                    endwhile;
                endif;     
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar entrada">
    </form>
    <?php borrarErrores(); ?>            
</div>


<?php require 'includes/pie.php'; ?>