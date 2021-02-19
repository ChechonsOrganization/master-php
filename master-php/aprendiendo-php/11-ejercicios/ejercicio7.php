<?php

/* 
EJERCICIO 7

MOSTRAR TODOS LOS NUMEROS IMPARES ENTRE DOS NUMEROS QUE NOS LLEGUEN POR LA URL ($_GET)

*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = $numero1; $i<= $numero2; $i++){
            if($i % 2 != 0){
                echo "<p>$i es impar</p>";
            }else{
                echo "<p>$i es par</p>";
            }
        }
    }else{
        for($i = $numero2; $i<= $numero1; $i++){
            if($i % 2 != 0){
                echo "<p>$i es impar</p>";
            }else{
                echo "<p>$i es par</p>";
            }
        }
    }
    

}else{
    echo "<p>Introducir correctamente los parametros de los numeros por GET</p>";
}

?>