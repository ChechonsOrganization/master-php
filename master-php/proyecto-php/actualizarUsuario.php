<?php 

if(isset($_POST)){

    // Conexion a la BD
    require_once 'includes/conexion.php';

    // Recoger los valores del formulario de actualizacion
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    //$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    //$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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

    $guardar_usuario = false;

    if(count($errores) ==0 ){
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        // Comprobar si el correo existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        // que me actualice los datos si el id es igual al usuario logueado

        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
            // Actualizar usuario en la tabla usuarios en la BD
            $sql =  "UPDATE usuarios SET ".
                    "nombre = '$nombre', ".
                    "apellidos = '$apellidos'".
                    "WHERE id = ".$usuario['id'];
            $guardar = mysqli_query($db, $sql);

            if($guardar){
                // Actualizar sesión del usuario
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;

                $_SESSION['completado'] = "Tu perfil ha sido actualizado con exito";
            }else{
                $_SESSION['errores']['general'] = "Hubo un error al actualizar tu perfil";
            }
        }else{
            $_SESSION['errores']['general'] = "Ya existe una cuenta con el correo utilizado";
        }

        

    }else{
        $_SESSION['errores'] = $errores;
    }

}

header('Location: perfil.php');

?>