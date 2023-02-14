<?php

// Crear la cookie
if (!isset($_COOKIE['usuario'])) {
    $nombre = "";
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    }
    setcookie("usuario", $nombre, time() + 3600);
}

// Verificar si la cookie existe
if (isset($_COOKIE['usuario'])) {
    // Dar la bienvenida al usuario
    echo "Bienvenido, " . $_COOKIE['usuario'];
} else {
    // Mostrar formulario para ingresar el nombre
    echo "<form action='ejercicio2.php' method='post'>";
    echo "Ingrese su nombre: <input type='text' name='nombre'>";
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}

?>

