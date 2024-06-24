<?php

    include 'conexion.php';

    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $query="INSERT INTO base(nombre, usuario, correo, contraseña)
            VALUES('$nombre', '$usuario', '$correo', '$contrasena')";

    //verificar correo
    $v_correo= mysqli_query($conexion,"SELECT * FROM base WHERE correo='$correo'");

    if(mysqli_num_rows($v_correo) > 0){
        echo '
            <script>
                alert("este correo ya esta registrado, intenta con otro diferente");
                window.location="cuenta.php";
            </script>
        ';
        exit();
    }

    //verificar usuario
    $v_user= mysqli_query($conexion,"SELECT * FROM base WHERE usuario='$usuario'");

    if(mysqli_num_rows($v_user) > 0){
        echo '
            <script>
                alert("este usuario ya esta registrado, intenta con otro diferente");
                window.location="cuenta.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("registro exitoso");
                window.location="formulario.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("ERROR. intente de nuevo");
            window.location="cuenta.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>