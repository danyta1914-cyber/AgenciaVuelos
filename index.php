<?php
session_start();
require_once("clase.php");

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agencia de Viajes</title>
<link rel="stylesheet" href="styles.css">

<style>

/* Menú principal */
.menu {
    background-color: #3b5013;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
}

.menu a {
    color: white;
    margin: 10px;
    text-decoration: none;
    font-weight: bold;
}

.menu a:hover {
    color: #f5e6cc;
}

</style>

</head>
<body>

<?php
function mostrarNotificacionOferta() {
    echo "
    <script>
        window.onload = function() {
            alert('🎉 ¡Oferta especial! 15% de descuento en paquetes turísticos.');
        };
    </script>
    ";
}

mostrarNotificacionOferta();
?>

<div class="container">

<h1>🌎 Agencia de Viajes</h1>

<!-- MENÚ PRINCIPAL -->

<div class="menu">
<a href="index.php">🏠 Inicio</a>

<a href="form_vuelo.php">✈️ Registrar Vuelo</a>

<a href="form_hotel.php">🏨 Registrar Hotel</a>

<a href="mostrar_vuelos.php">📋 Ver Vuelos</a>

<a href="mostrar_hoteles.php">📋 Ver Hoteles</a>

<a href="mostrar_reservas.php">📋 Ver Reservas</a>

<a href="consulta_avanzada.php">📊 Consulta Avanzada</a>

<a href="carrito.php">🛒 Ver Carrito</a>

</div>

<hr>

<h2>Formulario de Intención de Viaje</h2>

<form action="procesar.php" method="POST">

<label>Nombre del Hotel:</label><br>
<input type="text" name="hotel" required><br><br>

<label>Ciudad:</label><br>
<input type="text" name="ciudad" required><br><br>

<label>País:</label><br>
<input type="text" name="pais" required><br><br>

<label>Fecha de viaje:</label><br>
<input type="date" name="fecha" required><br><br>

<label>Duración del viaje (días):</label><br>
<input type="number" name="duracion" min="1" required><br><br>

<input type="submit" value="Buscar viaje">

</form>

<hr>

<h2>Paquetes destacados</h2>

<form method="POST" action="agregar_carrito.php">
<input type="hidden" name="destino" value="Inglaterra">
<input type="hidden" name="precio" value="2500">
<input type="submit" value="Agregar Inglaterra al carrito">
</form>

<form method="POST" action="agregar_carrito.php">
<input type="hidden" name="destino" value="Perú">
<input type="hidden" name="precio" value="650">
<input type="submit" value="Agregar Perú al carrito">
</form>

<form method="POST" action="agregar_carrito.php">
<input type="hidden" name="destino" value="Tailandia">
<input type="hidden" name="precio" value="1900">
<input type="submit" value="Agregar Tailandia al carrito">
</form>

<br>

<a href="carrito.php">🛒 Ir al carrito</a>

</div>

</body>
</html>
