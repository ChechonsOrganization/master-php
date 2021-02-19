<?php

    // ***************************   
    // Condicionales.
    // ***************************  
    // Operadores de comparacion
    /*  == igual 
        === identico
        != diferente
        <> diferente
        !== no identico
        < menor que
        > mayor que
        <= menor o igual que
        >= mayor o igual que

        Operadores Logicos
        && AND Y 
        || OR O
        ! NOT NO
    */
    // ***************************

    // ***************************   
    // If
    // *************************** 

    // Ej 1
    $color = 'rojo';

    if ($color == 'rojo'){
        echo 'El color es rojo';
        echo '<br>';
    }else {
        echo 'El color no es rojo';
        echo '<br>';
    }

    echo '<hr/>';

    // Ej 2
    $year = 2019;
    if ($year < 2019){
        echo 'Estamos en un año anterior a 2019';
        echo '<br>';
    }else {
        echo 'Estamos en un año posterior a 2019';
        echo '<br>';
    }

    echo '<hr/>';

    // Ej 3
    $nombre = 'David';
    $ciudad = 'Madrid';
    $continente = 'Asia';
    $edad = 50;
    $mayoria_edad = 18;

    if ($edad >= $mayoria_edad){
        echo "$nombre es mayor de edad";
        echo '<br>';
        if ($continente == 'Europa'){
            echo "y es de $ciudad";
            echo '<br>';
        }else{
            echo "y no es europeo";
            echo '<br>';
        }
    }else{
        echo "$nombre es menor de edad";
        echo '<br>';
    }

    echo '<hr/>';

    // ***************************   
    // Elseif
    // *************************** 
    $dia = 6;

    if ($dia == 1){
        echo "Hoy es lunes";
        echo '<br>';
    }elseif ($dia == 2) {
        echo "Hoy es martes";
        echo '<br>';
    }elseif ($dia == 3){
        echo "Hoy es miercoles";
        echo '<br>';
    }elseif ($dia == 4) {
        echo "Hoy es jueves";
        echo '<br>';
    }elseif ($dia == 5) {
        echo "Hoy es viernes";
        echo '<br>';
    }else{
        echo "Hoy es fin de semana";
        echo '<br>';
    }
    
    echo '<hr/>';

    // Ej 5
    $edad1 = 18;
    $edad2 = 64;
    $edad_oficial = 20;

    if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
        echo "Puede trabajar";
        echo '<br>';
    }else{
        echo "Ya es jubilado";
        echo '<br>';
    }

    // Ej 6

    $pais = 'Colombia';
    if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia'){
        echo 'En este pais se habla español';
        echo '<br>';
    }else{
        echo "En este pais no se habla español";
        echo '<br>';
    }

    echo '<hr/>';

    // ***************************   
    // Switch
    // *************************** 
    $dia = 4;
    switch ($dia) {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miercoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        default:
           echo 'Fin de semana';
            break;
    }

    echo '<hr/>';

    // ***************************   
    // Goto
    // *************************** 
    goto marca;

    echo 'Instruccion 1';
    echo 'Instruccion 2';
    echo 'Instruccion 3';
    echo 'Instruccion 4';

    marca:
        echo 'me he saltado 4 echos';
    
?>