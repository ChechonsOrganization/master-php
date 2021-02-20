<?php
require_once 'includes/conexion.php';


if(isset($_SESSION['usuario']) && isset($_GET['id'])){

    // obtener el id de la entrada por get
    $entrada_id = $_GET['id'];
    // obtener el id del usuario a través de la sesión
    $usuario_id = $_SESSION['usuario']['id'];
    // consulta sql para borrar la entrada
    $sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";
    // funcion para solicitar la peticion sql
    mysqli_query($db, $sql);
}

header("Location: index.php");