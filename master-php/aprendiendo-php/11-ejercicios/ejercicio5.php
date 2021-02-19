<?php

/* 
EJERCICIO 5

MOSTRAR TODOS LOS NUMEROS ENTRE DOS NUMEROS QUE NOS LLEGUEN POR LA URL ($_GET)

*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = $numero1; $i<= $numero2; $i++){
            echo "<p>$i</p>";
        }
    }else{
        for($i = $numero2; $i<= $numero1; $i++){
            echo "<p>$i</p>";
        }
    }
    

}else{
    echo "<p>Introducir correctamente los parametros de los numeros por GET</p>";
}



?>