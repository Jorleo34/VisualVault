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

</head>
<body>
  <header>
    <div class="container">
        <a href="cerrar.php"  class="axelSimp" >Cerrar Sesion</a>
         <img src="im/us.png" alt="alt" height="25" width="25" style="position: absolute; top: 40px; right: 156px ">
       <h1 style="z-index: 1; text-align: center">VisualVault</h1>
      <img src="logo.jpg" alt="Descripción de la imagen" style="position: absolute; top: 30px; right: 810px;" width='50' height='50'>
      <nav>
        <ul style="background-color: black; color: white;">
          
          <li><a href="paquetes.php">COLECCIONES</a></li>
          <li><a href="AcercaDE.php">ACERCA DE</a></li>
          <li><a href="contactos.php">CONTACTOS</a></li>
          <li><a href="index.php">INICIO</a></li>
         
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container">
        <h2>Aqui encontrara algunas cosas que le puedan ayudar al navegar en la pagina web</h2>
        <div>
            <p>1.Para que sirve la pagina?</p>
            <p>Esta pagina sirve para poder descargar algunos paquetes que le sea util al usuario para el libre uso de estos.</p>
            <p>2.Como puedo encontrar los paquetes?</p>
            <p>Estos se pueden encontrar en el apartado de colecciones y dandole click en el boton de ver paquetes para que asi el usuario pueda descargarlos.</p>
            <p>3.En verdad estos paquetes son de libre uso?</p>
            <p>Si ya que son hechos por nosotros y no tendrian un copyright que no te deje usarlos en lo que tu quieras.</p>
            <br><br><p>Si no encuentras alguna ayuda puedes contactarnos por nuestras redes sociales o por nuestro gmails que se encuentran en el apartado de contactos.</p>
        </div>
      </div>
        <footer>
    <div class="grupo2">
                <small>&copy; 2024 <b> VisualVault </b> TODOS LOS DERECHOS RESERVADOS </small>
            
    </section>

  </main>

  
</body>
</html>
