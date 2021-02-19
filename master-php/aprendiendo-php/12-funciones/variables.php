<?php

/* variables 

locales: son las que se definen dentro de una funcion y no pueden ser usadas
fuera de la funcion, solo estan disponibles dentro. a no ser de un return.

Globales: son las que se declaran fuera de una funcion y estan disponibles dentro y fuera.

*/

$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2020;
    echo "<h1>$year</h1>";

    "<h1>$frase</h1>";

    return $year;
}

echo holaMundo();

echo "<hr>";

// funciones variables

function buenosDias(){
    return "Hola, Buenos dias";
}

function buenasTardes(){
    return "Hey, que tal ha ido la comida?";
}

function buenasNoches(){
    return "Te vas a dormir? que descanses";
}

$horario = "Noches";
// invocar funcion
// echo $horario();

//echo "<hr>";


$miFuncion = "buenas".$horario;
echo $miFuncion();


?>