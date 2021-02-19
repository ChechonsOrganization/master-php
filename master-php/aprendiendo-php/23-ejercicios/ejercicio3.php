<?php


/* Ejercicio 3

Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones

para sumar, restar, dividir y multiplicar

*/

$resultado = false;

if(isset($_POST['n1']) && isset($_POST['n2'])){

    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }

    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }

    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }

    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora basica</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <label for="n1">Numero 1</label><br>
        <input type="number" name="n1"><br><br>

        <label for="n2">Numero 2</label><br>
        <input type="number" name="n2"><br><br>

        <input type="submit" name="sumar" value="Sumar">
        <input type="submit" name="restar" value="Restar">
        <input type="submit" name="multiplicar" value="Multiplicar">
        <input type="submit" name="dividir" value="Dividir">

    </form>
    <?php 
        // resultado
        if($resultado != false):
            echo "<h2>$resultado</h2>";
        endif
    ?>
</body>
</html>