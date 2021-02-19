<?php 
/* Ejercicio 3
Programa que compruebe si una variable esta vacia, si lo está rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita

*/

$variable = "";

if(empty($variable)){
    $variable = "texto dentro de la variable";
}

echo "<b>".strtoupper($variable)."</b>";






?>  