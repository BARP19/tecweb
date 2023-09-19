<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’</p>
    <p>a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner</p>
    <p>el valor en cada índice. Es decir:</p>

    [97] => a
[98] => b
[99] => c
...
[122] => z <p>

<li>Crea el arreglo con un ciclo for </li>
<li>Lee el arreglo y crea una tabla en XHTML con echo y un ciclo foreach</li> <p>
    <?php
// Crear el arreglo con un ciclo for
$arreglo = [];
for ($i = 97; $i <= 122; $i++) {
    $arreglo[$i] = chr($i);
}

// Crear una tabla XHTML con un ciclo foreach
echo '<table border="1">';
foreach ($arreglo as $indice => $valor) {
    echo '<tr>';
    echo '<td>' . $indice . '</td>';
    echo '<td>' . $valor . '</td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>