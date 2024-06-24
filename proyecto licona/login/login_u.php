<?php
    session_start();
    include 'conexion.php';
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];

    $v_login=mysqli_query($conexion, "SELECT * FROM base WHERE correo='$correo' and contraseña='$contrasena'");
    if(mysqli_num_rows($v_login) > 0){
        $_SESSION['usuario']=$correo;
        header("location:index.php");
        exit();
    }else{
        echo '
            <script>
                alert("usuario no existe, verifique los datos introducidos");
                window.location="formulario.php";
            </script>
        ';
    }
?>