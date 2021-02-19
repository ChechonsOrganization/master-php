<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios php</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php 
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_valores'){
                echo '<b style="color:red">Introduce los campos faltantes del formulario</b>';
            }

            if($error == 'nombre'){
                echo '<b style="color:red">Verifica escribir bien tu nombre</b>';
            }

            if($error == 'apellido'){
                echo '<b style="color:red">Verifica escribir bien tu apellido</b>';
            }

            if($error == 'edad'){
                echo '<b style="color:red">Verifica escribir bien tu edad</b>';
            }

            if($error == 'email'){
                echo '<b style="color:red">El correo es erroneo</b>';
            }

            if($error == 'password'){
                echo '<b style="color:red">Contraseña vacia o muy corta</b>';
            }
        }
    
    ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" required="required" pattern="[a-zA-Z]+" name="nombre"><br>

        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellido" required="required" pattern="[a-zA-Z]+"><br>
        
        <label for="edad">Edad</label><br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br>
        
        <label for="email">Correo</label><br>
        <input type="email" name="email" required="required"><br>

        <label for="pass">Contraseña</label><br>
        <input type="password" name="pass" required="required" minlength="5"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>