<?php
#recoge los valores de los números y la operación que se envían 
#a través del formulario y los usa para realizar la operación correspondiente.

  $numero1 = $_POST["numero1"];
  $numero2 = $_POST["numero2"];
  $operacion = $_POST["operacion"];
  
  if ($operacion == "suma") {
    $resultado = $numero1 + $numero2;
  } else if ($operacion == "resta") {
    $resultado = $numero1 - $numero2;
  } else if ($operacion == "multiplicacion") {
    $resultado = $numero1 * $numero2;
  }
  
  echo "El resultado de la operación es: " . $resultado;
?>






