<?php
    session_start();

    if(!isset ($_SESSION ['usuario'])){
        
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de la pagina</title>
</head>
<body>
    <h1>Ingresaste a la pagina </h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
    <h2>Aca vamos a probar la rama para el incio de sesion.</h2>
</body>
</html>