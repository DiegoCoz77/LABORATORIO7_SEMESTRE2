<?php
// Ejercicio 7: Cociente y residuo de dos números enteros
// c = n1 / n2 (división entera)   r = n1 Mod n2

$n1 = "";
$n2 = "";
$c = "";
$r = "";
$error = "";

// Se ejecuta solo al presionar el botón "Calcular"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Entrada: se convierten los datos del formulario a entero
    $n1 = (int) $_POST["n1"];
    $n2 = (int) $_POST["n2"];

    // No se puede dividir entre cero, por eso se valida primero
    if ($n2 == 0) {
        $error = "El número 2 no puede ser cero.";
    } else {
        // Proceso:
        $c = intdiv($n1, $n2); // intdiv() da el cociente entero
        $r = $n1 % $n2;        // % da el residuo (Mod)
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Problema 02</title>
    <!-- Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 420px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title mb-3">Problema 02</h4>

                <!-- Mensaje de error (solo aparece si se intentó dividir entre 0) -->
                <?php if ($error != "") { ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php } ?>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Número 1</label>
                        <input type="number" name="n1" class="form-control" value="<?= $n1 ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Número 2</label>
                        <input type="number" name="n2" class="form-control" value="<?= $n2 ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cociente</label>
                        <!-- Salida: cociente -->
                        <input type="text" class="form-control" value="<?= $c ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Residuo</label>
                        <!-- Salida: residuo -->
                        <input type="text" class="form-control" value="<?= $r ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
