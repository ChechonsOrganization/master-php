<?php

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
    echo "La conexion a la base de datos mysql ha fallado".mysqli_connect_error();
}else{
    echo "Conexion realizada correctamente";   
}
echo '<br>';

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta select desde php
$query = mysqli_query($conexion, "Select * from notas");
while($nota = mysqli_fetch_assoc($query)){
    // var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
}

// Insertar en la bd desde php
/* $sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de php', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "Datos insertados satisfactoriamente";
}else{
    echo "Error de insert en la bd";
}
 */