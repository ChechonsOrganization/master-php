<?php

/* 
EJERCICIO 6

IMPRIMIR POR PANTALLA TODAS LAS TABLAS DE MULTIPLICAR DEL 1 AL 10 EN HTML

*/
echo "<table border='1'>";

echo "<tr>";
    for($cabecera = 1; $cabecera <=10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>";

echo "<tr>";

    for($i = 1; $i <= 10; $i++){
        echo "<td>";
            for ($x=1; $x <= 10; $x++) { 
                echo "$i x $x = ".($i*$x).'<br>';
            }
        echo "</td>";
    }

echo "</tr>";

echo "</table>";
?>
