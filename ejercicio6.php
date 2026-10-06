<?php
// Ejercicio 6: Suma de dos números enteros
// Fórmula: s = n1 + n2

// Variables vacías para que el formulario aparezca limpio al inicio
$n1 = "";
$n2 = "";
$s = "";

// Este bloque solo se ejecuta cuando se presiona el botón "Calcular"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Entrada: se leen los números del formulario y se convierten a entero
    $n1 = (int) $_POST["n1"];
    $n2 = (int) $_POST["n2"];

    // Proceso: se calcula la suma
    $s = $n1 + $n2;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Problema 01</title>
    <!-- Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 420px;">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title mb-3">Problema 01</h4>

                <!-- Formulario que envía los datos a esta misma página -->
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Número 1</label>
                        <!-- value mantiene el número escrito después de calcular -->
                        <input type="number" name="n1" class="form-control" value="<?= $n1 ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Número 2</label>
                        <input type="number" name="n2" class="form-control" value="<?= $n2 ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Suma</label>
                        <!-- Salida: campo de solo lectura que muestra el resultado -->
                        <input type="text" class="form-control" value="<?= $s ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
