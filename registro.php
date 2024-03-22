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
        
        <section class="section">
            <div class="grid_reg">
                <div>
                    <select class="" id="cajero">
                        <option value="">Seleccione Un Cajero</option>
                        <option value="cajero1">Cajero 1</option>
                        <option value="cajero2">Cajero 2</option>
                        <option value="cajero3">Cajero 3</option>
                    </select>
                </div>
                <div>
                    <input type="text" id="cliente" placeholder="Cliente"/>
                </div>
                <div>
                    <input type="text" id="valor" placeholder="Valor"/>
                </div>
                <div>
                    <input type="date" id="fecha" placeholder="Fecha"/>
                </div>
                <div>
                    <input type="submit" value="registrar" class="btn_registro">
                </div>
                <div>
                    <a href="./index.html">
                    <input type="submit" value="buscar" class="btn_buscar">
                    </a>
                </div>
            </div>
        </section>
        
    </div>
</div>
</body>