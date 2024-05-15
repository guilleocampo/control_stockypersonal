<?php

    session_start();
    
    include 'conexion_be.php';
    
    $email = $_POST['email'];
    $contrasena= $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)> 0 ){
        $_SESSION['usuario'] = $email;
        header("location: ../bienvenido.php");
        exit;

    }else{
        echo '
        <script>
        alert("Usuario no existe, porfavor verifique los datos introduciodos");
        window.location = "../index.php";
        </script>
        ';
        exit;
    }
