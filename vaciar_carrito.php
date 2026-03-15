<?php
session_start();
unset($_SESSION['carrito']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito vaciado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>🧹 Carrito vaciado correctamente</h2>
    <a href="index.php">Volver al inicio</a>
</div>

</body>
</html>
