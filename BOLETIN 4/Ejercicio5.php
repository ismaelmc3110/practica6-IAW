<?php

function imprime_tabla($numero) {
    if ($numero === 'todas') { // Si se recibe la cadena 'todas'
        for ($i = 1; $i <= 10; $i++) { // Iterar del 1 al 10
            imprime_tabla($i); // Llamada recursiva a la función con cada número
        }
    } else if ($numero >= 1 && $numero <= 10) { // Si se recibe un número del 1 al 10
        echo "Tabla de multiplicar del $numero:\n";
        for ($i = 1; $i <= 10; $i++) { // Iterar del 1 al 10
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado\n"; // Imprimir la multiplicación y su resultado
        }
    } else { // Si se recibe un valor fuera de rango
        echo "Error: el valor recibido debe ser 'todas' o un número del 1 al 10\n";
    }
}


imprime_tabla('todas'); // Imprirmir todas las tablas de multiplicar del 1 al 10
imprime_tabla(7); // Imprimir la tabla de multiplicar del 7
imprime_tabla(20); // Imprimir un mensaje de error por recibir un valor fuera de rango

?>