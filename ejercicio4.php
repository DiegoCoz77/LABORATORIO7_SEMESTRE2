<?php
// Ejercicio 4: Concatenación de cadenas con el operador punto (.)

// Tres variables tipo string
$ciudad = "Lima";
$pais = "Perú";
$continente = "América del Sur";

// Se unen las tres en una cuarta variable con el operador punto (.)
// y se agrega un <br> al final
$frase = $ciudad . ", " . $pais . ", " . $continente . "<br>";

// Variable tipo integer para la segunda frase
$habitantes = 10000000;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>Ejercicio 4: Concatenación de cadenas</h2>
    <?php
    // Primera frase: ya viene armada con la concatenación
    echo $frase;

    // Segunda frase: se concatena texto con variables usando el punto
    echo "La ciudad de " . $ciudad . " tiene aproximadamente " . $habitantes . " de habitantes.<br>";
    ?>
</body>
</html>
