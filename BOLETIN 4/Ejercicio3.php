<?php
function agregar_nota($array, $nota) {
    $array[] = $nota; // Agregar la nota al final del array
    return $array; // Devolver el array actualizado
}


$notas = [85, 90, 78, 92, 88]; // Ejemplo de un array de notas
$nueva_nota = 95; // Ejemplo de una nueva nota que se quiere agregar

$notas_actualizadas = agregar_nota($notas, $nueva_nota); // Llamada a la función agregar_nota

print_r($notas_actualizadas); // Imprimir el array actualizado


?>