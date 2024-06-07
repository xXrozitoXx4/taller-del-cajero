<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos tiene un nombre diferente
$username = "root"; // Cambia esto por tu nombre de usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$dbname = "transacciones"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la base de datos después de la confirmación
if(isset($_POST['cliente']) && isset($_POST['cajero']) && isset($_POST['valor']) && isset($_POST['fecha'])) {
    $Cliente = $_POST['cliente'];
    $Cajero = $_POST['cajero'];
    $Valor = $_POST['valor'];
    $Fecha = $_POST['fecha'];

    $sql = "INSERT INTO transacciones (cliente, cajero, valor, fecha)
            VALUES ('$Cliente', '$Cajero', '$Valor', '$Fecha')";

    if ($conn->query($sql) === true) {
        echo "";
    } else {
        echo "Error al insertar registro: " . $conn->error;
    }
}
?>

<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cajeros</title>
    <script src="https://kit.fontawesome.com/7dccdc2a62.js" crossorigin="anonymous"></script>
    <script>
        function confirmSubmit() {
            var cliente = document.getElementById('cliente').value;
            var cajero = document.getElementById('cajero').value;
            var valor = document.getElementById('valor').value;
            var fecha = document.getElementById('fecha').value;
            return confirm(`¿Estás seguro que quieres registrar al cliente ${cliente} en el cajero ${cajero} con el valor ${valor} y la fecha ${fecha}?`);
        }
    </script>
</head>
<body>
    <div class="main">
    <div class="box_reg">
    <form action="registro.php" method="post" class="form_reg" onsubmit="return confirmSubmit()">
        <section class="section">
            <div class="grid_reg">
                <div>
                    <select id="cajero" name="cajero" required>
                        <option value="">Seleccione Un Cajero</option>
                        <option value="1">Cajero 1</option>
                        <option value="2">Cajero 2</option>
                        <option value="3">Cajero 3</option>
                    </select>
                </div>
                <div>
                    <input type="text" id="cliente" placeholder="Cliente" name="cliente" required/>
                </div>
                <div>
                    <input type="text" id="valor" placeholder="Valor" name="valor" required/>
                </div>
                <div>
                    <input type="date" id="fecha" placeholder="Fecha" name="fecha" required/>
                </div>
                <div>
                    <input type="submit" value="registrar" class="btn_registro">
                </div>
                <div>
                    <a href="./index.php">
                    <input type="button" value="buscar" class="btn_buscar">
                    </a>
                </div>
            </div>
        </section>
        </form>
        
    </div>
</div>
</body>
</html>
