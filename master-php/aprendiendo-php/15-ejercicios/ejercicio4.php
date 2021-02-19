<?php 
/* Ejercicio 4
 Crear Script que tenga 4 variables:

 1 de array
 1 de string
 1 de int
 1 de booleano

 y que imprima un mensaje segun el tipo que sea

*/

$coleccion = array(1,2,3,4);
$cadena = "texto";
$numero = 12;
$booleano = false;

var_dump($coleccion);
echo "<hr>";
var_dump($cadena);
echo "<hr>";
var_dump($numero);
echo "<hr>";
var_dump($booleano);
echo "<hr>";

if(is_array($coleccion)){
    echo "la variable coleccion es un array";
    echo "<hr>";
}

if(is_string($cadena)){
    echo "la variable cadena es un string";
    echo "<hr>";
}

if(is_int($numero)){
    echo "la variable numero es un int";
    echo "<hr>";
}

if(is_bool($booleano)){
    echo "la variable booleano es una variable booleana";
    echo "<hr>";
}







?>