<?php

function notas_aprobadas($array) {
    $notas_aprobadas = array(); // Crear un nuevo array para almacenar las notas aprobadas
    
    foreach ($array as $nota) { // Iterar sobre el array de notas
        if ($nota >= 5) { // Si la nota está aprobada
            $notas_aprobadas[] = $nota; // Agregar la nota al array de notas aprobadas
        }
    }
    
    return $notas_aprobadas; // Devolver el array de notas aprobadas
}


$notas = [4, 6, 8, 2, 7, 5]; // Ejemplo de un array de notas

$notas_aprobadas = notas_aprobadas($notas); // Llamada a la función notas_aprobadas

print_r($notas_aprobadas); // Imprimir el array de notas aprobadas

?>