<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos tiene un nombre diferente
$username = "root"; // Cambia esto por tu nombre de usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$dbname = "cajero"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
if(isset($_POST['cajero']) && isset($_POST['cliente']) && isset($_POST['valor']) && isset($_POST['fecha'])) {
    $Cajero = $_POST['cajero'];
    $Cliente = $_POST['cliente'];
    $Valor = $_POST['valor'];
    $Fecha = $_POST['fecha'];

    $sql = "INSERT INTO cliente (cajero, cliente, valor, fecha)
            VALUES ('$Cajero', '$Cliente', '$Valor', '$Fecha')";

    if ($conn->query($sql) === TRUE) {
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
    
</head>
<body>
    <div class="main">
    <div class="box">
    <form action="registro.php" method="post">
        <section class="section">
            <div class="grid_reg">
                <div>
                    <select class="">
                        <option value="">Seleccione Un Cajero</option>
                        <option value="cajero1" id="cajero" name="cajero">Cajero 1</option>
                        <option value="cajero2" id="cajero" name="cajero">Cajero 2</option>
                        <option value="cajero3" id="cajero" name="cajero">Cajero 3</option>
                    </select>
                </div>
                <div>
                    <input type="text" id="cliente" placeholder="Cliente" name="cliente"/>
                </div>
                <div>
                    <input type="text" id="valor" placeholder="Valor" name="valor"/>
                </div>
                <div>
                    <input type="date" id="fecha" placeholder="Fecha" name="fecha"/>
                </div>
                <div>
                    <input type="submit" value="registrar" class="btn_registro">
                </div>
                <div>
                    <a href="./index.html">
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