<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
    $categoria_actual = conseguirCategoria($db, $_GET['id']);

    if(!isset($categoria_actual['id'])){
        header("Location: index.php");
    }        
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

        <!-- caja principal -->
        <div id="principal">
            
            <h1>Entradas de <?=$categoria_actual['nombre']?></h1>

            <?php
                $entradas = conseguirEntradas($db);
                if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
                        <article class="entrada">
                            <a href="">
                                <h2><?=$entrada['titulo']?></h2>
                                <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'];  ?></span>
                                <p><?=substr($entrada['descripcion'], 0, 200)."..."?></p>
                            </a>
                        </article>
            <?php
                    endwhile;
                endif;
            ?>
            
        </div>
    
<?php require_once 'includes/pie.php'; ?>