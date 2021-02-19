<?php 

// abrir y escribir archivo
$archivo = fopen("fichero_texto.txt", "a+");

// leer contenido del archivo
// recorrer todas las lineas que tenga el archivo
/* while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido;
    echo "<br>";
} */

// escribir dentro del texto
//fwrite($archivo, ". Soy un texto metido desde php");

// cerrar archivo
//fclose($archivo);

// copiar
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die ("Error al copiar");

// renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

// eliminar
//unlink('archivito_recopiadito.txt') or die('error al borrar');

if(file_exists("fichero_texto.txt")){
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}
