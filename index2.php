<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 2</h2>
    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
secuencia compuesta por: impar, par, impar</p>

<p>Por ejemplo:</p>

<p>990, 382, 786</p>
<p>422, 361, 473</p>
<p>392, 671, 914</p>
<p>213, 744, 911 </p>

<p>Estos números deben almacenarse en una matriz de Mx3, donde M es el número de filas y
3 el número de columnas. Al final muestra el número de iteraciones y la cantidad de
números generados: 12 números obtenidos en 4 iteraciones</p>

<?php

function generarNumeroAleatorio() {
    return rand(1, 1000); // Cambia los límites según tus necesidades
}

function esPar($numero) {
    return $numero % 2 == 0;
}

function esImpar($numero) {
    return $numero % 2 != 0;
}

$matriz = [];
$iteraciones = 0;
$numerosGenerados = 0;

while (true) {
    $numeros = [];
    
    while (count($numeros) < 3) {
        $numero = generarNumeroAleatorio();
        $numeros[] = $numero;
        $numerosGenerados++;
    }
    
    if (esImpar($numeros[0]) && esPar($numeros[1]) && esImpar($numeros[2])) {
        $matriz[] = $numeros;
        break; // Termina el bucle una vez que se encuentra la secuencia deseada
    } else {
        $iteraciones++;
    }
}

echo "Matriz resultante:\n";
foreach ($matriz as $fila) {
    echo implode(', ', $fila) . "\n";
}

echo "Número de iteraciones: $iteraciones\n";
echo "Cantidad de números generados: $numerosGenerados\n";

?>
</body>
</html>