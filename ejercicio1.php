<?php
// Ejercicio 1: Ficha de producto (tipos de datos básicos)

// Variable tipo integer (número entero): código del producto
$codigo = 1025;

// Variable tipo double (número decimal): precio del producto
$precio = 45.90;

// Variable tipo string (texto): nombre del producto
$nombre = "Teclado mecánico";

// Variable tipo boolean (verdadero o falso): si hay stock o no
$enStock = true;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Ejercicio 1: Ficha de producto</h2>
    <?php
    // Se imprime cada variable con su etiqueta, separadas con <br>
    echo "Código de producto (integer): " . $codigo . "<br>";
    echo "Precio (double): S/ " . $precio . "<br>";
    echo "Nombre del producto (string): " . $nombre . "<br>";

    // Si $enStock es true muestra "Sí", si es false muestra "No"
    echo "Disponible en stock (boolean): " . ($enStock ? "Sí" : "No") . "<br>";
    ?>
</body>
</html>
