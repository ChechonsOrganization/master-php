<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP en HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="input-nombre">Nombre: </label>       
        <p><input type="text" name="nombre" id="input-nombre" placeholder="Pedro..."></p>
        <label for="input-apellido"> Apellido: </label>
        <p><input type="text" name="apellido" id="input-apellido" placeholder="Jimenez..."></p>
        <textarea name="mensaje" id="" cols="30" rows="10"></textarea><br>
        <label for="Peliculas">Peliculas:</label>
        <select name="Peliculas" id="">
            <option value="spiderman">Spiderman</option>
            <option value="batman">Batman</option>
            <option value="superman">Superman</option>
            <option value="joker">Joker</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>