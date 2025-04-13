<?php
require_once __DIR__ . '/classes/EcuacionCuadratica.php';

$resultado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = floatval($_POST['a']);
    $b = floatval($_POST['b']);
    $c = floatval($_POST['c']);

    $ecuacion = new EcuacionCuadratica($a, $b, $c);
    $resultado = $ecuacion->resolver();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ecuación Cuadrática</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Calculadora de Ecuación Cuadrática</h1>

    <form method="POST">
        <label for="a">Valor de a:</label>
        <input type="number" step="any" name="a" required>

        <label for="b">Valor de b:</label>
        <input type="number" step="any" name="b" required>

        <label for="c">Valor de c:</label>
        <input type="number" step="any" name="c" required>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <div class="resultado">
            <?php if (is_array($resultado)): ?>
                <p>Raíz x1: <strong><?= $resultado['x1'] ?></strong></p>
                <p>Raíz x2: <strong><?= $resultado['x2'] ?></strong></p>
            <?php else: ?>
                <p><?= $resultado ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <footer>
        <p>→ Hecho  por <strong>ELBALLE</strong></p>
    </footer>

</body>
</html>
