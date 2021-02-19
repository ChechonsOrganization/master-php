<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - <?php echo 'Master en PHP' ?></title>
</head>
<body>
    <h1>Master en PHP</h1>

    <?='"Bienvenido al curso de PHP"'?>

    <?php 
        // imprimir con echo
       /*  debemos cerrar el echo con punto y coma
        o dará error de syntaxis */
        echo '<h3>Listado de videojuegos:</h3>';
        echo '<ul>'
            .'<li>GTA</li>'
            .'<li>FIFA</li>'
            .'<li>Mario Bros</li>'
            .'</ul>';

        echo '<p>Esta es toda'.' - '.'lista de juegos </p>';
    ?>
</body>
</html>