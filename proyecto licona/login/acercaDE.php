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
    body{

            text-align: center;
            
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            
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
          <li><a href="contactos.php">CONTACTOS</a></li>
          <li><a href="index.php">INICIO</a></li>
          
        </ul>
      </nav>
    </div>
  </header>
 <body>
         
        
        <div class="xd">
          
            <br>
            <br><h4>La visión que se tiene en esta pagina web es el uso libre de imágenes para que los usuarios puedan utilizarlas en todo tipos de proyectos como:
                Videos, Exposiciones, Paginas web, Tareas, entre otros.
                <br>Gracias a su libre uso pueden utilizarlo en muchas cosas sin que tenga que pagar imágenes con derecho de autor y meterse en problemas por esto, 
                dándole a los usuarios una manera divertida al decorar sus proyectos de mejor manera.</h4></div>
                <div class="text2">
            <br><p>  <center> Nuestra página está diseñada con el propósito de brindar a los usuarios una  <br> experiencia 
                visual excepcional, permitiéndoles explorar y disfrutar de nuestra amplia y<br> diversa colección de imágenes.<br><br>
                
                
                Si en algún momento surge alguna pregunta o inquietud sobre nuestra página, no
                dude  <br> en ponerse  en contacto con nosotros. <br>Puede enviarnos un mensaje a nuestros
                correos electrónicos de soporte que se encuentran como: <br></div>

                
        <div class=text1> axelmartinezhernandez24@gmail.com <br> leonardodarioguzmansanchez32@gmail.com</div> </center>
       
            </p>
        <br> 
        
       <footer>
    <div class="grupo2">
                <small>&copy; 2024 <b> VisualVault </b> TODOS LOS DERECHOS RESERVADOS </small>
            </div>
            
  </footer>

  
</body>
</html>
