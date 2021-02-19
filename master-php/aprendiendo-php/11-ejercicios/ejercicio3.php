<?php

/* 
EJERCICIO 3

IMPRIMIR EN PANTALLA LOS CUADRADOS (NUMERO MULTIPLICADO POR SI MISMO) DE LOS PRIMEROS 40 NUMEROS NATURALES
UTILIZAR WHILE

*/

$contador = 1;
$numero = 0;
// $resultado = 0;

while ($contador <= 40) {
    $numero = $contador;
    echo "<p>El cuadrado de $contador es: ".($numero*$numero).'</p>';
    $contador++;
}

?>