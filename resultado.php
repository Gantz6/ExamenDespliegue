
<?php
session_start();


if (!isset($_SESSION['finished']) || !$_SESSION['finished']) {
    header("Location: index.php");
    exit;
}

$secret = $_SESSION['secret'];
$won = $_SESSION['won'];
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Resultado de la partida</title>
</head>
<body>

    <h2>Resultado de la partida</h2>

    <?php if ($won): ?>
        <h3>¡Correcto! Has ganado.</h3>
    <?php else: ?>
        <h3>¡Has perdido!</h3>
    <?php endif; ?>

    <p>El número secreto era: <?= htmlspecialchars($secret) ?></p>

    <a href="index.php?reset=1">
        <button>Jugar otra vez</button>
    </a>

</body>
</html>
