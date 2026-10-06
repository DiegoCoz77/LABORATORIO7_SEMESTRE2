<?php
/*
    Problema: Almacenar los datos de un estudiante (edad, promedio de
    calificaciones, nombre completo y estado de inscripción) en variables
    y mostrarlos línea por línea en la página.
*/

$edad = 20;                              // integer: edad del estudiante
$promedio = 15.75;                       // double: promedio de calificaciones
$nombreCompleto = "Juan Diego Coz Soto"; // string: nombre completo
$inscripcionActiva = true;               // boolean: true = inscripción activa
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Ejercicio 3: Datos de un estudiante</h2>
    <?php
    // Se muestra cada dato en una línea usando <br>
    echo "Nombre completo: " . $nombreCompleto . "<br>";
    echo "Edad: " . $edad . " años<br>";
    echo "Promedio de calificaciones: " . $promedio . "<br>";
    echo "Inscripción activa: " . ($inscripcionActiva ? "Sí" : "No") . "<br>";
    ?>
</body>
</html>
