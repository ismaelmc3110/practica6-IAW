
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pantalla de color</title>
  </head>
  <body style="background-color: 
    <?php
      $equipo = $_POST["equipo"];
      switch ($equipo) {
        case "Rojo":
          echo "red";
          break;
        case "Azul":
          echo "blue";
          break;
        case "Verde":
          echo "green";
          break;
      }
    ?>">
    <h1>Bienvenido al equipo <?php echo $equipo; ?>!</h1>
  </body>
</html>

