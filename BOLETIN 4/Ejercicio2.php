<?php
function estadisticas($array) {
    $nota_maxima = max($array);
    $nota_minima = min($array);
    $nota_media = array_sum($array) / count($array);
    
    echo "Nota máxima: " . $nota_maxima . "<br>";
    echo "Nota mínima: " . $nota_minima . "<br>";
    echo "Nota media: " . $nota_media;
}

$notas = [85, 90, 78, 92, 88]; // Ejemplo de un array de notas
estadisticas($notas); // Llamada al procedimiento estadisticas con el array de notas como parámetro



?>