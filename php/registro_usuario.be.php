<?php

include 'conexion_be.php';

$nombre_completo = $_POST ['nombre_completo'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena =$_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, email, usuario, contrasena) 
            VALUES('$nombre_completo', '$email', '$usuario', '$contrasena')";

//verificar que el correo no se repita en la base de datos

$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

if(mysqli_num_rows($verificar_correo)> 0){

    echo '
        <script>
            alert("Este email ya esta registrado, intena con otro diferente");
            window.location ="../index.php";
        </script>

    ';
    exit();
}

$verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario)> 0){

    echo '
        <script>
            alert("Este usuario ya esta registrado, intena con otro diferente");
            window.location ="../index.php";
        </script>

    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente)";
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Usuario no almacenado )";
            window.location = "../index.php";
        </script>
    ';

    }

    mysqli_close($conexion);

