<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location:pag.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/css1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1> Bienvenido </h1>
            <form action="login_u.php" id="form"method="post">
                <div class="form-control">
                    <input id="email" type="email" required name="correo" />
                    <label>Correo electrónico</label>
                </div>
                <div class="form-control">
                    <input id="password" type="password" required name="contrasena"/>
                    <label>Contraseña</label> 
                </div>
                <button class="btn">Enviar</button>
                <p class="text">¿No tiene una cuenta?
                    <a href="cuenta.php">Crear cuenta</a> 
                </p>
            </form>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>
