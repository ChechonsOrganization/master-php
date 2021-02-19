<?php require 'includes/redireccion.php'; ?>
<?php require 'includes/cabecera.php'; ?>
<?php require 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
    <h1>Crear Categorias</h1>
    <p>
        Añade nuevas categorias al blog para que los usuarios 
        puedan usarlas al crear sus entradas.
    </p><br>
    
    <form action="guardarCategoria.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"  value="Introduce nombre de la categoria">

        <input type="submit" value="Guardar categoria">
    </form>

</div>


<?php require 'includes/pie.php'; ?>