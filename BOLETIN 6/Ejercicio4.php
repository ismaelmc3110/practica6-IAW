<?php
#Este script comprueba si la cookie visitas existe. Si existe, 
#se incrementa su valor y se actualiza la cookie. Si no existe, se 
#crea una nueva cookie con un valor de 1. Finalmente, se muestra el número de visitas por pantalla.
if(isset($_COOKIE['visitas'])){
   $visitas = $_COOKIE['visitas'] + 1;
   setcookie('visitas', $visitas, time() + (86400 * 30));
} else {
   $visitas = 1;
   setcookie('visitas', $visitas, time() + (86400 * 30));
}

echo "Has visitado esta página " . $visitas . " veces.";

?>

