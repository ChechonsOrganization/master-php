<?php

/* Funciones: es un conjunto de instrucciones agrupadas bajo un nombre en concreto
y que pueden reutilizarse solamente invocando la funcion n veces.
*/

// Ejemplo 1

function muestraNombres(){
    echo 'Felipe'.'<br/>';
    echo 'Ramiro <br/>';
    echo 'Victor <br/>';
    echo 'Pedro <br/>';

    echo '<hr>';
}

muestraNombres();

// Ejemplo 2

function tabla($numero){
    echo "<h3> Tabla de multiplicar del numero: $numero</h3>";
    for ($i = 1; $i <= 10; $i++){
        $multiplicar = $numero*$i;
        echo "$numero x $i = $multiplicar </br>";
    }
    // var_dump($numero);
    echo '<hr>';
}

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo 'faltan los parametros get de numero para hacer la multiplicacion';
}

// Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if($negrita){
        $cadena_texto .= '<h1>';
    }

    $cadena_texto .= "Suma de $numero1 y $numero2: $suma <br>";
    $cadena_texto .= "Resta de $numero1 y $numero2: $resta <br>";
    $cadena_texto .= "Multiplicacion de $numero1 y $numero2: $multiplicacion <br>";
    $cadena_texto .= "Division de $numero1 y $numero2: $division <br>";

    if($negrita){
        $cadena_texto .= '</h1>';
    }

    $cadena_texto .= '<hr>';

    return $cadena_texto;
}

echo calculadora(30, 10, true);

// Ejemplo 4

function getNombre($nombre){
    $texto = "El nombre es : $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son $apellidos";
    return $texto;
}


function devuelveNombre($nombre, $apellidos){
    $texto =  getNombre($nombre)
                ."<br>".
                getApellidos($apellidos);
    return $texto;
}

echo devuelveNombre("Sergio", "Ramirez");








?>