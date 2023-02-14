<?php
// Comprueba si la cookie ya existe
if(isset($_COOKIE['ultima_visita'])){
  $ultima_visita = $_COOKIE['ultima_visita'];
  // Muestra la última vez que el usuario se conectó
  echo "Bienvenido de nuevo! Su última conexión fue el: " . $ultima_visita;
} else {
  // Si la cookie no existe, la crea y muestra un mensaje de bienvenida
  setcookie('ultima_visita', date('d-m-Y H:i:s'), time() + (60*60*24*365));
  echo "Bienvenido por primera vez!";
}
?>

