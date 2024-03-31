<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table, th, td {
    text-align: center;
    color: white;
    border: 1px solid white;
    border-collapse: collapse;
    }

    td, th {
        padding: 6px;
    }
</style>
<body>
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "transacciones";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$fecha_inicial = $_POST['fecha_inicial'];
$fecha_final = $_POST['fecha_final'];
$cajero = $_POST['cajero'];

// Consulta SQL
if ($cajero == "0") {
    $sql = "SELECT * FROM transacciones WHERE fecha BETWEEN '$fecha_inicial' AND '$fecha_final'";
} else {
    $sql = "SELECT * FROM transacciones WHERE cajero = $cajero AND fecha BETWEEN '$fecha_inicial' AND '$fecha_final'";
}

$result = $conn->query($sql);

// Inicializar la variable para almacenar la suma total de valores
$suma_valores = 0;

if ($result->num_rows > 0) {
    // Mostrar los resultados
    echo "<table><tr><th>Cliente</th><th>Cajero</th><th>Valor</th><th>Fecha</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "</td><td>".$row["cliente"]."</td><td>".$row["cajero"]."</td><td>".$row["valor"]."</td><td>".$row["fecha"]."</td></tr>";
        $suma_valores += $row["valor"];
    }
    echo "</table>";
    // Mostrar la suma total de los valores de las transacciones
    echo "<p>Suma total de los valores: $suma_valores</p>";
} else {
    echo "No se encontraron resultados";
}
$conn->close();
?>
</body>
</html>
