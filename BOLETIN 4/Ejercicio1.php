<?php
//prueba
function notas_aleatorias($size) {
    $notas = array();
    for ($i = 0; $i < $size; $i++) {
        $notas[$i] = rand(0, 100); // Genera una nota aleatoria entre 0 y 100
    }
    return $notas;
}



$size = 5; // Tamaño del array de notas aleatorias que se quiere generar

// Llamar a la función notas_aleatorias con el tamaño especificado y guardar el resultado en la variable $notas
$notas = notas_aleatorias($size);

// Imprimir el array de notas aleatorias generado
print_r($notas);



?>
