<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?php 
        /* TIPOS DE DATOS:

        Entero (int / integer) = 99
        Coma flotante / decimales (float / double) = 3.45
        Cadenas (string) = 'Hola este en un string'
        Booleano (bool) = true/false
        Nulo = null
        Coleccion de datos = Arrays 
        Objetos 

         */

        $numero = 100;
        $decimal = 27.9;
        // se puede concatenar con comillas simples (son mas lentas)
        // $texto = 'soy un texto '.$numero;
        // \" para mostrar la comilla en el string sin que se confunda
        $texto = "Soy un texto \" $numero";
        $verdadero = true;

        echo $numero;
        echo '</br>';
        echo gettype($numero);
        echo '</br>';
        echo $decimal;
        echo '</br>';
        echo gettype($decimal);
        echo '</br>';
        echo $texto;
        echo '</br>';
        echo gettype($texto);
        echo '</br>';
        echo $verdadero;
        echo '</br>';
        echo gettype($verdadero);
        echo '</br>';

        // debugear
        $mi_nombre[] = 'Sergio Ramírez';
        $mi_nombre[] = 'Andrés Betancur';
        var_dump($mi_nombre);


       
    ?>
</body>
</html>