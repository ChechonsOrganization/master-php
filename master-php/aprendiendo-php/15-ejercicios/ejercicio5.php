<?php 
/*

Ejercicio 5

Crear un array con el contenido siguiente:

ACCION     AVENTURA    DEPORTES
GTA        A.C.        FIFA 19
COD        CRASH       PES 19
PUBG       P.O.P       MOTO GP 19

Cada columna debe ir en un fichero separado(includes).

*/

$tabla = array(
    "ACCION" => array("GTA 5", "Call Of Duty", "PUBG"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of persia"),
    "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
);

// var_dump($tabla);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require 'ejercicio5/encabezados.php' ?>
    <?php require 'ejercicio5/primera-fila.php' ?>
    <?php require 'ejercicio5/segunda-fila.php' ?>
    <?php require 'ejercicio5/tercera-fila.php' ?>    
</table>