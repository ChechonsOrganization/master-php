<?php require_once 'conexion.php' ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <!-- logo -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos jeje
            </a>
        </div>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                ?>
                            <li>
                                <a href="categoria.php?id=<?php echo $categoria['id']?>"><?=$categoria['nombre']?></a>
                            </li>
                <?php
                        endwhile;
                    endif; 
                ?>
                <li>
                    <a href="">Sobre mi</a>                    
                </li>
                <li>
                    <a href="">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">