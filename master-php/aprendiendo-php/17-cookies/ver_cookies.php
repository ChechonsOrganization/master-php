<?php 

/* Para mostrar el valor de las cookies hay que usar $_COOKIE, 
que es una variable superglobal y es un array asociativo.


*/

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "no existe la cookie";
}

?>
<a href="crear_cookies.php">Crear las cookies/galletas</a>

<a href="borrar_cookies.php">Borrar las cookies/galletas</a>