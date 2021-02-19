<?php 

/* Escribir un programa que añada valores a un array mientras que su longitud
sea menor a 120 y luego mostrarlo en pantalla*/


$coleccion = array();

for ($i=1; $i <= 120 ; $i++) { 

    array_push($coleccion, "elemento-".$i);

}

var_dump($coleccion);

echo $coleccion[45];


?>