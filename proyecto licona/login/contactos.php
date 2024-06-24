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
  <title>Acerca de</title>
   <link rel="icon" href="im/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <style> 
    body {
     
      text-align: center;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
    }
    .contact-info {
      max-width: 600px;
      margin: 0 auto;
      margin-top: 0;
    }
    .contact-info h2 {
      color: #333;
    }
    .contact-info p {
      margin-bottom: 10px;
    }
    .contact-info .images-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .contact-info img {
      margin-right: 10px;
    }
    .pn2 {
      max-width: 800px;
      margin: 50px auto;
      text-align: left;
      
    }
    .pn2 h3 {
      color: blue;
    }
  </style>
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
          
          <li><a href="paquetes.php">COLECCIONES</a></li>
          <li><a href="ayuda.php">AYUDA</a></li>
          <li><a href="acercaDE.php">ACERCA DE</a></li>
          <li><a href="index.php">INICIO</a></li>
          
        </ul>
      </nav>
    </div>
  </header>
    <div class="text1">
        <p>No dude en comunicarse con nosotros en caso de dudas sobre nuestra pagina <br>
         Puede enviarnos un mensaje a nuestros correos electrónicos de soporte en caso de necesitar asistencia.</p>
    </div
  <div class="contact-info">
    <h2 style="color: red;">Información de Contacto</h2>
    
    <p><strong>Correo electrónico:</strong> axelmartinezhernandez24@gmail.com </p>
    <div class="images-container">
      <a href="https://www.twitch.tv/axl950">
          <img src="im/tw.jpeg" width="80" height="80"></a>
        <a href=" https://mail.google.com/mail/u/0/#inbox">
        <img src="im/gm.png" width="80" height="80">
      </a>
    </div>
    
    <p><strong>Correo electrónico:</strong> leonardodarioguzmansanchez32@gmail.com</p>
    <div class="images-container">
      <a href="https://www.tiktok.com/@jorleo32?_t=8mRTtByNrU5&_r=1">
        <img src="im/tk.avif" width="80" height="80"></a>
        <a href=" https://mail.google.com/mail/u/0/#inbox">
        <img src="im/gm.png" width="80" height="80">
      </a>
        
    </div>
    
    <p><strong>Correo electrónico:</strong> jarc110607db@gmail.com</p>
    <div class="images-container">
      <a href="https://youtu.be/dQw4w9WgXcQ?si=f6zXLV65zq_o2tWQ">
        <img src="im/gm.png" width="80" height="80">
      </a>
      
    </div>
    
    <p><strong>Correo electrónico:</strong> roy31.reyvel@gmail.comh </p>
    <div class="images-container">
      <a href="https://www.twitch.tv/rrvtreyvel">
        <img src="im/tw.jpeg" width="80" height="80"></a>
        <a href=" https://mail.google.com/mail/u/0/#inbox">
        <img src="im/gm.png" width="80" height="80">
      </a>
    </div>
  </div>

    <div class="pn2">
    <h3>Acerca de VisualVault</h3>
    <p>Somos una empresa dedicada a proporcionar imágenes de alta calidad para que nuestros usuarios las  disfruten.</p>
       
  </div>
  <footer>
    <div class="grupo2">
                <small>&copy; 2024 <b> VisualVault </b> TODOS LOS DERECHOS RESERVADOS </small>
            </div>
            
  </footer>
    
</body>
</html>
