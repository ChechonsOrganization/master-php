<?php 
/* Ejercicio 1 

Hacer un programa que tenga un array con 8 numeros enteros:

- Recorrerlo y mostrarlo
- Ordernarlo y mostrarlo
- Mostrar su longitud
- Buscar algun elemento

*/

// Array con 8 numeros
$numeros = array(9,20,30,12,50,4,100,21);

// 1.-
// Recorrerlo y mostrarlo (alternativa 1)
/* foreach ($numeros as $key => $numero) {
    echo $numero.'<br>';
} */

// crear funcion
function mostrarArray($numeros){
    $resultado = "";

    foreach ($numeros as $numero){
        // $resultado = $resultado.$numero."<br>";
        $resultado .= $numero."<br>";
    }

    return $resultado;
}

// llamar funcion
echo mostrarArray($numeros);
// separar ejercicio
echo "<hr>";


// 2.-
// Ordenar array - asort hace que el ordenamiento sea "temporal"
sort($numeros);
// llamar funcion
echo mostrarArray($numeros);
// separar ejercicio
echo "<hr>";


// 3.-
// Mostrar longitud
echo sizeof($numeros)."<br>";
echo count($numeros);
// separar ejercicio
echo "<hr>";


// 4.- 
// Buscar algun elemento
$busqueda = 100;

if(array_search($busqueda, $numeros)){
    echo "el numero buscado existe dentro del array";
}else{
    echo "no existe el numero buscado";
}




?>