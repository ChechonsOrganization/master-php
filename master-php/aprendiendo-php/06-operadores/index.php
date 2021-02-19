<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?php 
        // ***************************   
        // Operadores aritmeticos
        // ***************************
        
        $numero1 = 55;
        $numero2 = 33;

        echo 'Suma: '.($numero1 + $numero2).'<br/>';
        echo 'Resta: '.($numero1 - $numero2).'<br/>';
        echo 'Multiplicacion: '.($numero1 * $numero2).'<br/>';
        echo 'Division: '.($numero1 / $numero2).'<br/>';
        echo 'Resto: '.($numero1 % $numero2).'<br/>'; 

        // ***************************
        // Operadores incremento y decremento
        // ***************************

        $year = 2019;

        // incremento
        $year++;

        // decremento
        $year--;

        // pre-incremento
        ++$year;

        // pre-decremento
        --$year;

        echo '<h1>'.$year.'</h1>';
        
        // ***************************
        // Operadores de asignacion
        // ***************************

        $edad = 55;

        echo $edad.'<br>';
        // $edad = $edad + 5;
        echo ($edad+=5).'<br>';
        // restar
        echo ($edad-=5);
        // multiplicar
        echo ($edad*=5);
        // dividir
        echo ($edad/=5);
        
    ?>
</body>
</html>