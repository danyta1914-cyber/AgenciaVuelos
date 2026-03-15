<?php
session_start();

// Recuperar datos del formulario
$destino = $_POST['destino'];
$precio = $_POST['precio'];

// Agregar paquete al carrito (sesión)
$_SESSION['carrito'][] = [
    'destino' => $destino,
    'precio' => $precio
];

// Redirigir al carrito
header("Location: carrito.php");
exit;


