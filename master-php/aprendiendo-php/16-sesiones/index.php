<?php 

/* 
Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
hasta que cierra sesión o cierra el navegador.

*/

// Iniciar la sesión
session_start();

// variable local
$variable_normal = "Soy una cadena de texto";

// variable de sesion
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];

?>