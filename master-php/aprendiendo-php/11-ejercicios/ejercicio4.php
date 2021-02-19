<?php

/* 
EJERCICIO 4

RECOGER 2 NUMEROS CON PARAMETRO GET Y HACER OPERACIONES DE ESOS DOS NUMEROS (SUMA, RESTA, MULTIPLICAR Y DIVIDIR)

*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<p>la suma de $numero1 y $numero2 es: ".($numero1+$numero2).'</p>';
    echo "<p>la resta de $numero1 y $numero2 es: ".($numero1-$numero2).'</p>';
    echo "<p>la multiplicacion de $numero1 y $numero2 es: ".($numero1*$numero2).'</p>';
    echo "<p>la division de $numero1 y $numero2 es: ".($numero1/$numero2).'</p>';

}else{
    echo "<p>Faltan los parametros o los numeros no fueron introducidos correctamente</p>";
}



?>