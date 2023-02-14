<?php
#La función setcookie guarda la cookie en el navegador del usuario, y $_POST es 
#un array que contiene los valores enviados a través del formulario. 
#El segundo y tercer parámetro de la función setcookie son el valor de la cookie y 
#la fecha de expiración, respectivamente.
  if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
    setcookie('nombre', $_POST['nombre'], time() + 3600);
    setcookie('apellido', $_POST['apellido'], time() + 3600);
  }

  if (isset($_COOKIE['nombre']) && isset($_COOKIE['apellido'])) {
    echo "Bienvenido, " . $_COOKIE['nombre'] . " " . $_COOKIE['apellido'];
  } else {
    echo "No existen cookies";
  }
?>

