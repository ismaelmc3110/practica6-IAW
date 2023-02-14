<?php
#recoge los valores de las notas que se envían a través del formulario y 
#los usa para calcular la media y determinar si todas las asignaturas están aprobadas o no.

$asignatura1 = $_POST["asignatura1"];
$asignatura2 = $_POST["asignatura2"];
$asignatura3 = $_POST["asignatura3"];

$media = ($asignatura1 + $asignatura2 + $asignatura3) / 3;
echo "La media de tus notas es: " . $media . "<br>";

if ($asignatura1 >= 5 && $asignatura2 >= 5 && $asignatura3 >= 5) {
    echo "Has aprobado todas las asignaturas.";
} else {
    echo "No has aprobado todas las asignaturas.";
}

?>