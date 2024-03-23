<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css"/>
  <title>Cajeros</title>
  <script src="https://kit.fontawesome.com/7dccdc2a62.js" crossorigin="anonymous"></script>
  <style>  
    #iframe-container {
      display: none;
    }
  </style>
</head>
<body>
  <div class="main">
    <div class="box_base">
      <div class="box1">
        <form action="buscar.php" method="post" class="form_reg" id="searchForm">
          <section class="section">
            <div class="grid_index">
              <div>
                <a href="registro.php">
                <div>
              <i class="fa-regular fa-address-card register_icon"></i>
              </div>
                </a>
              </div>
              <div>
                <select class="" id="cajero" name="cajero" required>
                  <option value="">Seleccione Un Cajero</option>
                  <option value="1">Cajero 1</option>
                  <option value="2">Cajero 2</option>
                  <option value="3">Cajero 3</option>
                </select>
              </div>
              <div>
                <input type="date" id="fecha_inicial" name="fecha_inicial" required/>
              </div>
              <div>
                <input type="date" id="fecha_final" name="fecha_final" required/>
              </div>
              <div>
                <input type="submit" value="buscar" class="btn_buscar" id="mostrarIframe"/>
              </div>
            </div>
          </section>
        </form>
      </div>
      <div class="box2">
        <div class="">
          <section class="section">
            <div class="resultados">
              <div id="iframe-container">
                <!-- El iframe se cargará después de enviar el formulario -->
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el envío del formulario
      var formData = new FormData(this);

      fetch('buscar.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        document.getElementById('iframe-container').innerHTML = data; // Colocar la respuesta en el iframe
        document.getElementById('iframe-container').style.display = 'block'; // Mostrar el iframe
      })
      .catch(error => {
        console.error('Error:', error);
      });
    });
  </script>
</body>
</html>