<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("favor de iniciar sesion");
                window.location="formulario.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VisualVault</title>
  <link rel="icon" href="im/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <style>
    .package {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .package img {
      margin-right: 20px;
    }
    .package .description {
      display: flex;
      flex-direction: column;
    }
    .package .description p {
      margin: 0;
    }
    .package .description button {
      background-color: #FFE8EC;
      border: none;
      color: black;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 5px;
      transition-duration: 0.4s;
    }
    .package .description button:hover {
      background-color: white;
      color: black;
      border: 2px solid #FFE8EC;
    }
  </style>
</head>

<body>
    
  <header>
    <div class="container">
        <a href="cerrar.php" class="axelSimp">Cerrar Sesion</a>
        <img src="im/us.png" alt="alt" height="25" width="25" style="position: absolute; top: 40px; right: 156px">
       <h1 style="z-index: 1; text-align: center">VisualVault</h1>
       <img src="logo.jpg" alt="Descripción de la imagen" style="position: absolute; top: 30px; right: 750px;" width='50' height='50'>
       <nav>
        <ul style="background-color: black; color: white;">
          <li><a href="ayuda.php">AYUDA</a></li>
          <li><a href="index.php">INICIO</a></li>
          <li><a href="AcercaDe.php">ACERCA DE</a></li>
          <li><a href="contactos.php">CONTACTOS</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="about">
      <div class="container">
        <h2>Proximamente estaran los paquetes para que puedas descargarlos en la pagina.</h2>
        <p>Asi que no te desesperes si no te aparecen para desacargarlos</p>
        <p>Ya que estamos trabajando en ellos además, cuando esten listos habra varios paquetes que seran de tu agrado y puedas descargarlos para el libre uso de estos</p>
        
        <div class="package">
          <img src="relax.png" alt="Descripción de la imagen">
          <div class="description">
            <p>Chica que no le importa nada sobre las demas personas y que tendra imagenes de hacer al malo o de desagrado</p>
            <a href="im/ciel.zip" download>
              <button>Paquete de Ciel</button>
            </a>
          </div>
        </div>

        <div class="package">
          <img src="trey.png" alt="Descripción de la imagen">
          <div class="description">
            <p>Personaje comico donde esta en diferentes formas en las imagenes como haciendo caras grcaiosas o estando de cuerpo completo</p>
            <a href="im/roy.zip" download>
              <button>Paquete de Roy</button>
            </a>
          </div>
        </div>

        <div class="package">
          <img src="tranquila.png" alt="Descripción de la imagen">
          <div class="description">
            <p>Chica tranquila donde estara en diferentes poses como feliz o agresivo dependeiendo de la imagen/p>
            <a href="im/bi.zip" download>
              <button>Paquete Ruby</button>
            </a>
          </div>
        </div>

        <div class="package">
          <img src="lo siento.png" alt="Descripción de la imagen">
          <div class="description">
            <p>Personaje donde estara de forma agresiva/cansada donde se vera de cuerpo completo con diferentes gestos</p>
            <a href="im/axl.zip" download>
              <button>Paquete AXl</button>
            </a>
          </div>
        </div>

      </div>
    </section>
  </main>

  <footer>
    <div class="grupo2">
      <small>&copy; 2024 <b>VisualVault</b> TODOS LOS DERECHOS RESERVADOS</small>
    </div>
  </footer>
</body>
</html>
