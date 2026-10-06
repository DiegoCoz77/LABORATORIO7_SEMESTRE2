<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 07 - PHP</title>
</head>
<body>
    <h2>Laboratorio 07 - Programación Web</h2>
    <ul>
        <!-- El for genera los 8 enlaces: ejercicio1.php ... ejercicio8.php -->
        <?php for ($i = 1; $i <= 8; $i++) { ?>
            <li><a href="ejercicio<?= $i ?>.php">Ejercicio <?= $i ?></a></li>
        <?php } ?>
    </ul>
</body>
</html>
