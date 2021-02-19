<?php

// verificar si la carpeta no existe
if(!is_dir('mi_carpeta')){
    // crear la carpeta
    mkdir('mi_carpeta', 0777) or die('No se puede crrear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}

// eliminar la carpeta
//rmdir('mi_carpeta');
echo '<br>';

// mostrar contenido carpeta
echo "<hr><h1>Contenido de carpeta</h1>";
if($gestor = opendir('./mi_carpeta/')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br>";
        }   
        
    }
}