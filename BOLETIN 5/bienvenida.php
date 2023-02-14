<?php
#recoge los valores de nombre y apellido que se envían 
#a través del formulario y los usa para generar un mensaje de bienvenida

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
echo "Bienvenido, " . $nombre . " " . $apellido;

?>