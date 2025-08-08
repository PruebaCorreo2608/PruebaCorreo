<?php
// Guardar la visita en un archivo de texto
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date('Y-m-d H:i:s');
$registro = "Visita desde $ip a las $fecha\n";
file_put_contents('visitas.txt', $registro, FILE_APPEND);

// Llamar al archivo que envía el correo (sin mostrar nada)
include 'enviar_correo.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Primera Página Web</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>¡Bienvenido a mi página!</h1>
    <nav>
      <a href="#inicio">Inicio</a>
      <a href="#sobre-mi">Sobre mí</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </header>

  <main>
    <section id="inicio">
      <h2>Inicio</h2>
      <p>Esta es mi primera página web creada con HTML, CSS y JavaScript.</p>
    </section>

    <section id="sobre-mi">
      <h2>Sobre mí</h2>
      <p>Hola, soy un desarrollador aprendiendo a crear páginas web.</p>
    </section>

    <section id="contacto">
      <h2>Contacto</h2>
      <button onclick="mostrarAlerta()">Haz clic aquí</button>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 - Mi Sitio Web</p>
  </footer>

  <script>
    function mostrarAlerta() {
      alert('¡Gracias por visitar!');
    }
  </script>
</body>
</html>
