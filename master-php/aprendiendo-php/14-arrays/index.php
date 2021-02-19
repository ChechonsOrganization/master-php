<?php 

/* Arrays es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un indice numero o alfanumerico.

*/

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El senor de los anillos');
$cantantes = ['2pac', 'Drake', 'Jeniffer', 'Akon'];

// generar indices en un array (array asociativo)
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'www.google.cl'
);

// array multidimensionales
$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Pepe',
        'email' => 'pepe@pepe.com'
    ),
);

foreach($contactos as $key => $contacto){
    var_dump($contacto);
    echo '<br>';
}

var_dump($personas);
echo '<br>';
var_dump($contactos[1]['nombre']);
echo '<br>';
echo $peliculas[0];
echo '<br>';
echo $cantantes[2];

// Recorrer arreglo con un for
echo "<h1> Listado de peliculas </h1>";
echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

echo "<h1> Listado de cantantes </h1>";
echo "<ul>";
// Recorrer con foreach
foreach ($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

// funciones array

// orden alfabetico, sort sirve para los numeros
asort($cantantes);
// orden alfabetico descendente
// arsort($cantantes)
var_dump($cantantes);

// añadir elementos al array
// alternativa 1
$cantantes[] = "Natos";
// alternativa 2
array_push($cantantes, "Waor");
echo '<br>';
var_dump($cantantes);

// eliminar elemento del array
// eliminar el ultimo elemento de la lista
array_pop($cantantes);
// eliminar por indice
unset($cantantes[2]);

echo '<br>';
var_dump($cantantes);

// indice de array aleatorio
$indice = array_rand($cantantes);
echo '<br>';
echo $cantantes[$indice];

// dar la vuelta al array
echo '<br>';
var_dump(array_reverse($cantantes));


// buscar dentro de un array
$resultado = array_search('2pac', $cantantes);
echo '<br>';
var_dump($resultado);

// contar numero de elementos
echo '<br>';
echo sizeof($cantantes);

?>