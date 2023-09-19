<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
pero que además sea múltiplo de un número dado.</p>

<li>Crear una variante de este script utilizando el ciclo do-while.</li>
<li>El número dado se debe obtener vía GET.</li>
<p>
    <?php

// Obtén el número dado a través de la solicitud GET
$numeroDado = isset($_GET['numero']) ? intval($_GET['numero']) : 1; // 1 es el valor predeterminado si no se proporciona ningún número

function generarNumeroAleatorio() {
    return rand(1, 1000); // Cambia los límites según tus necesidades
}

$numerosGenerados = 0;
$primerMultiplo = null;

do {
    $numero = generarNumeroAleatorio();
    $numerosGenerados++;

    if ($numero % $numeroDado === 0) {
        $primerMultiplo = $numero;
    }
} while ($primerMultiplo === null);

echo "El primer número entero aleatorio múltiplo de $numeroDado es: $primerMultiplo\n";
echo "Número de números generados: $numerosGenerados\n";

?>
</body>
</html>