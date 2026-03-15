<?php
include("conexion.php");

$sql = "SELECT * FROM RESERVA";
$result = $conn->query($sql);
?>

<h2>Lista de Reservas</h2>

<table border="1">

<tr>
<th>ID Reserva</th>
<th>ID Cliente</th>
<th>Fecha</th>
<th>ID Vuelo</th>
<th>ID Hotel</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>".$row['id_reserva']."</td>";
    echo "<td>".$row['id_cliente']."</td>";
    echo "<td>".$row['fecha_reserva']."</td>";
    echo "<td>".$row['id_vuelo']."</td>";
    echo "<td>".$row['id_hotel']."</td>";
    echo "</tr>";
}
?>

</table>