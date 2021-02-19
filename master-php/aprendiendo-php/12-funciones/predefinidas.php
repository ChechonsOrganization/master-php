<?php

// Debugg
$nombre = "Sergio Ramirez";
var_dump($nombre);

echo '<hr>';

// Fechas
echo date('d-m-Y');
echo '<hr>';
echo time(); // timestamp

echo '<hr>';

// Matematicas
echo "Raiz cuadrada de diez: ".sqrt(10);
echo '<hr>';
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo '<hr>';
echo "Numero pi: ".pi();
echo '<hr>';
echo "Redondear: ".round(7.893452, 1);

// Mas funciones generales

echo '<hr>';
echo gettype($nombre);


echo '<hr>';
if(is_string($nombre)){
    echo "La variable es un string";
}else{
    echo "La variable es otro tipo de dato";
}

echo '<hr>';
//comprobar si existe variable edad
if(isset($nombre)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

echo '<hr>';


// Trim - eliminar espacios

$frase = "        mi contenido     ";

var_dump(trim($frase));
echo '<hr>';
echo $frase;


// Eliminar variables / indices

$year = 2020;
unset($year);
//echo '<hr>';
//var_dump($year);

echo '<hr>';

// Comprobar variable vacia

$texto = "";

if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable contiene informacion";
}

echo '<hr>';

// Contar caracteres del string
$cadena = "12345";
echo strlen($cadena);

echo '<hr>';

// Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "es");

echo '<hr>';
// reemplazar palabra
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo '<hr>';

// pasar a upper y lower cases
echo strtolower($frase);
echo '<hr>';
echo strtoupper($frase);


?>