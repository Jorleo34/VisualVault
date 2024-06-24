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
       <img src="logo.jpg" alt="Descripción de la imagen" style="position: absolute; top: 30px; right: 750px;" width='50' height='50'>
      <nav>
        <ul style="background-color: black; color: white;">
          <li><a href="ayuda.php">AYUDA</a></li>
          <li><a href="paquetes.php">COLECCIONES</a></li>
          <li><a href="AcercaDe.php">ACERCA DE</a></li>
          <li><a href="contactos.php">CONTACTOS</a></li>
          
       
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container">
        <h2>Imágenes Flipantes</h2>
        <p>Nuestros paquetes de imágenes están diseñados para ofrecerte la máxima versatilidad y calidad.</p>
        <a href="paquetes.php" class="btn">VER COLECCIONES</a><br>
       <img src="sorprendido.png" alt="Descripción de la imagen">
      </div>
    </section>

    <section class="about">
      <div class="container">
        <h2>Explora nuestra extensa colección de paquetes de imágenes cuidadosamente seleccionadas para satisfacer todas tus necesidades.</h2>
        <p>Estamos aquí para proporcionarte las herramientas visuales que necesitas para destacar en cualquier proyecto.</p>
        <p>Además, ofrecemos opciones de licencia flexibles para adaptarnos a tus requisitos específicos, ya sea para uso personal o comercial.</p>
      </div>
    </section>
  </main>

  <footer>
    <div class="grupo2">
                <small>&copy; 2024 <b> VisualVault </b> TODOS LOS DERECHOS RESERVADOS </small>
            </div>
            
  </footer>
</body>
</html>
