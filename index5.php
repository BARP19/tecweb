<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Obtener los valores de edad y sexo del formulario
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        
        // Comprobar si la persona cumple con los criterios
        if ($sexo === "femenino" && $edad >= 18 && $edad <= 35) {
            echo "<h1>Bienvenida, usted está en el rango de edad permitido.</h1>";
        } else {
            echo "<h1>Lo sentimos, no cumple con los criterios requeridos.</h1>";
        }
    } else {
        echo "<h1>Acceso no válido.</h1>";
    }
    ?>
</body>
</html>
