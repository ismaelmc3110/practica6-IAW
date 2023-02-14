<html>
  <head>
    <title>Formulario: Página 2</title>
  </head>
  <body>
    <h1>Introduce tu apellido:</h1>
    <form action="Ejercicio4.3.php" method="post">
      <input type="hidden" name="nombre" value="<?php echo $_POST['nombre']; ?>">
      <input type="text" name="apellido">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>

