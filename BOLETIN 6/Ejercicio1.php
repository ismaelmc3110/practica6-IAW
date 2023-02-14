<?php
#creamos un formulario que permite al usuario ingresar su nombre de usuario. 
#Cuando se envía el formulario, se guarda una cookie con el nombre
#username y el valor del nombre de usuario ingresado. Luego, en la página se
#comprueba si existe una cookie con el nombre username y si es así, se muestra
#un mensaje de bienvenida al usuario con su nombre de usuario.

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    setcookie('username', $username, time() + (86400 * 30), "/");
}
?>

<html>
<head>
    <title>Guardar y mostrar una cookie</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE['username'])) {
    ?>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Ingrese su nombre de usuario">
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php
    } else {
        echo "Bienvenido, " . $_COOKIE['username'];
    }
    ?>
</body>
</html>

