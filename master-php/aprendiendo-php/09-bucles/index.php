<?php
    /*  
        Bucle while
        estructura de control que itera o repite la ejecucion de una serie
        de instrucciones n veces en base a una condicion.
    */
    
    $numero = 0;

    while($numero <= 10){
        echo $numero;

        if($numero != 10){
            echo ", ";
        }

        $numero ++;
    }

    echo '<hr>';

    // Ej 1
    // isset es para comprobar si existe

    if(isset($_GET['numero'])){
        $numero = (int) $_GET['numero']; // castear el tipo de string a int
    }else{
        $numero = 1;
    }
    
    echo "<h1> Tabla de multiplicar del numero $numero </h1>";
    $contador = 0;
    while($contador <=10){
        echo "$numero x $contador = ".($numero*$contador)."<br>";
        $contador++;
    }

    echo '<hr>';


    /*  
        Bucle do while
        Que se ejecute aunque sea una vez, luego vuelve a comprobar
    */

    $edad = 17;
    $contador = 1;

    do{
        echo "Tienes acceso al local privado $contador <br>";
        $contador++;
    }while($edad >=18 && $contador <=10);


    echo '<hr>';

    /*  
        Bucle for
    */

    for($contador = 1; $contador <= 10; $contador++){

        if($numero == 45){
            echo "no se pueden mostrar estas operaciones";
            break;
        }

        echo "$numero x $contador = ".($numero*$contador)."<br>";
        
    }


?>