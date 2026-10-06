<?php
// Ejercicio 5: Interpolación de variables en comillas dobles

// Tres variables tipo double: dimensiones de la caja en centímetros
$largo = 30.5;
$ancho = 20.0;
$alto = 15.25;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h2>Ejercicio 5: Medidas de una caja</h2>
    <?php
    // Con comillas dobles, PHP reemplaza cada variable por su valor
    // dentro del texto (esto se llama interpolación)
    echo "La caja mide $largo cm de largo, $ancho cm de ancho y $alto cm de alto.";
    ?>
</body>
</html>
