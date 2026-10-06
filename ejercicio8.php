<?php
// Ejercicio 8: Área de un círculo
// Fórmula: A = PI * r^2

// Constante con el valor de pi que indica el ejercicio
const PI = 3.14159;

$r = "";
$a = "";

// Se ejecuta solo al presionar el botón "Calcular"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Entrada: el radio puede tener decimales, por eso se usa float
    $r = (float) $_POST["r"];

    // Proceso: pow($r, 2) eleva el radio al cuadrado
    $a = PI * pow($r, 2);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Problema 09</title>
    <!-- Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 420px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title mb-3">Problema 09</h4>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Radio</label>
                        <!-- step="any" permite escribir decimales -->
                        <input type="number" step="any" min="0" name="r" class="form-control" value="<?= $r ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Área</label>
                        <!-- Salida: área del círculo -->
                        <input type="text" class="form-control" value="<?= $a ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
