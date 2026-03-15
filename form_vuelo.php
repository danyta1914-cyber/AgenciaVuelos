<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Vuelo</title>
<link rel="stylesheet" href="styles.css">

<script>
function validarVuelo() {

    let origen = document.getElementById("origen").value;
    let destino = document.getElementById("destino").value;
    let plazas = document.getElementById("plazas").value;
    let precio = document.getElementById("precio").value;

    if(origen === "" || destino === "" || plazas === "" || precio === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    if(plazas <= 0 || precio <= 0) {
        alert("Plazas y precio deben ser mayores a 0");
        return false;
    }

    return true;
}
</script>

</head>
<body>

<div class="container">

<h2>✈️ Registrar Vuelo</h2>

<form action="insertar_vuelo.php" method="POST" onsubmit="return validarVuelo()">

Origen:
<input type="text" name="origen" id="origen"><br><br>

Destino:
<input type="text" name="destino" id="destino"><br><br>

Fecha:
<input type="date" name="fecha"><br><br>

Plazas disponibles:
<input type="number" name="plazas" id="plazas"><br><br>

Precio:
<input type="number" name="precio" id="precio"><br><br>

<input type="submit" value="Registrar Vuelo">

</form>

</div>

</body>
</html>