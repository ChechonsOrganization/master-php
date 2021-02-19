<?php 

if(isset($_POST)){

    // Conexion a la BD
    require_once 'includes/conexion.php';
    // Iniciar Sesión
    if(!isset($_SESSION)){
        session_start();
    }

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    // Array de errores
    $errores = array();


    // validar los datos antes de guardarlos
    
    // validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validate = true;
    }else{
        $apellidos_validate = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    // validar email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = "El correo electronico no es valido";
    }

    // validar contraseña

    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = false;
        $errores['password'] = "La contraseña esta vacía";
    }


    $guardar_usuario = false;
    if(count($errores) ==0 ){
        $guardar_usuario = true;

        // Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);
        
        //var_dump($password);
        //var_dump($password_segura);
        //var_dump(password_verify($password, $password_segura));

        // Insertar usuario en la tabla usuarios en la BD
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        //var_dump($sql);

        // var_dump(mysqli_error($db));
        // die();

        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }

    }else{
        $_SESSION['errores'] = $errores;
        header("Location: index.php");
    }

}

header('Location: index.php');

?>