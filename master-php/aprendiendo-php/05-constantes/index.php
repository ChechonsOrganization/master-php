<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?php 
        // Constantes, nunca se puede modificar (como en js)

        define('nombre', 'Sergio Ramírez');
        define('web', 'udemy.com');

        // mostrar constante es sin el simbolo $
        echo '<h1>'.nombre.'</h1>';
        echo '<h1>'.web.'</h1>';

        // constantes predefinidas (en mayusculas como en python)
        echo PHP_OS;
        echo '<br>';
        echo PHP_VERSION;
        echo '<br>';
        echo PHP_EXTENSION_DIR;
        echo '<br>';
        echo __LINE__;
        echo '<br>';
        echo __FILE__;
        echo '<br>';
        function holaMundo(){
            echo __FUNCTION__;
        }
        holaMundo();
        echo '<br>';


        // variable
        $web = 'udemy.com';
        $web = 'udemy';
        echo '<h1>'.$web.'</h1>';
       
    ?>
</body>
</html>