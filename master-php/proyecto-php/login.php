<?php

// Inciar la sesión y la conexion a bd
require_once('includes/conexion.php');

// Recoger los dtos del formulario
if(isset($_POST)){

    // Borrar error antiguo
    if(isset($_SESSION['error-login'])){
        unset($_SESSION['error-login']);
    }

    // Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Hacer consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        // var_dump($usuario);
        // die();
        $verify = password_verify($password, $usuario['password']);

        if($verify){
            // Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

        }else{
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error-login'] = "Login Incorrecto";
        }


    }else{
        $_SESSION['error-login'] = "Login Incorrecto";
    }

}

// Redirigir al index.php
header('Location: index.php');