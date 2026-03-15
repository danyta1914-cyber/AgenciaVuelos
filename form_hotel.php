<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Hotel</title>
<link rel="stylesheet" href="styles.css">

<script>
function validarHotel() {

    let nombre = document.getElementById("nombre").value;
    let ubicacion = document.getElementById("ubicacion").value;

    if(nombre === "" || ubicacion === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    return true;
}
</script>

</head>
<body>

<div class="container">

<h2>🏨 Registrar Hotel</h2>

<form action="insertar_hotel.php" method="POST" onsubmit="return validarHotel()">

Nombre:
<input type="text" name="nombre" id="nombre"><br><br>

Ubicación:
<input type="text" name="ubicacion" id="ubicacion"><br><br>

Habitaciones disponibles:
<input type="number" name="habitaciones"><br><br>

Tarifa por noche:
<input type="number" name="tarifa"><br><br>

<input type="submit" value="Registrar Hotel">

</form>

</div>

</body>
</html>