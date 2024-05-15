<?php

include 'conexion_be.php';

$nombre_completo = $_POST ['nombre_completo'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena =$_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, email, usuario, contrasena) 
            VALUES('$nombre_completo', '$email', '$usuario', '$contrasena')";

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

    
