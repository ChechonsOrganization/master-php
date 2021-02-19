<?php require 'includes/cabecera.php'; ?>
    <?php require 'includes/lateral.php'; ?>

        <!-- caja principal -->
        <div id="principal">
            <?php
                $categoria = conseguirCategoria($db, $_GET['id']);        
            ?>
            <h1>Entradas de <?=$categoria['nombre']?></h1>

            <?php
                $entradas = conseguirEntradas($db);
                if(!empty($entradas)):
                    while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
                        <article class="entrada">
                            <?php //var_dump($entrada) ?>
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
    
<?php require 'includes/pie.php'; ?>