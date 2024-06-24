<!DOCTYPE html>
<html>
    <head>
        <title>Crear Cuenta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/css1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1>Crear una cuenta</h1>
            <form action="registro.php" id="form" method="post">
                <div class="form-control">
                    <input id="name" type="text" required name="nombre"/>
                    <label>Nombre</label>
                </div>
                <div class="form-control">
                    <input id="user" type="text" required name="usuario"/>
                    <label>Usuario</label>
                </div>
                <div class="form-control">
                    <input id="email" type="email" required name="correo"/>
                    <label>Correo</label>
                </div>
                <div class="form-control">
                    <input id="password" type="password" required name="contrasena"/>
                    <label>Contraseña</label>
                </div>
                <button type="submit"class ="btn">Enviar</button>
                <p class="text">¿Ya tiene una cuenta?
                    <a href="formulario.php">Ingresar</a>
                </p>
            </form>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>
