<?php
session_start();
$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
 <h2>Tu Carrito de Viajes</h2>

<?php if (empty($_SESSION['carrito'])): ?>
    <p>El carrito está vacío.</p>
<?php else: ?>

    <ul>
        <?php foreach ($_SESSION['carrito'] as $item): ?>
            <li>
                Destino: <strong><?= htmlspecialchars($item['destino']) ?></strong> |
                Precio: $<?= number_format($item['precio'], 0) ?>
            </li>
            <?php $total += $item['precio']; ?>
        <?php endforeach; ?>
    </ul>

    <h3>Total a pagar: $<?= number_format($total, 0) ?></h3>

    <form action="vaciar_carrito.php" method="POST">
        <button type="submit">Vaciar carrito</button>
    </form>

    <form action="cerrar_sesion.php" method="POST">
        <button type="submit">Cerrar sesión de forma segura</button>
    </form>

<?php endif; ?>

<br>
<a href="index.php">Volver a la página principal</a>
