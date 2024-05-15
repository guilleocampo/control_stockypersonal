<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
    src="https://kit.fontawesome.com/869dc8f5ef.js"
    crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/stylos.css" />
    <title>login CSS</title>
    </head>
    <body>
    <div class="container" id="container">
    <div class="form-container sign-up-container" method="POST">
        <form action="php/registro_usuario.be.php" method="POST">
        <h1>Crea tu Cuenta</h1>
        <div class="social-container">
            <a href="#" class="social>">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social>">
            <i class="fab fa-google" id="red"></i>
            </a>
            <a href="#" class="social>">
            <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <span>o usa tu email como registro</span>
        <input type="text" name="nombre_completo" placeholder="Nombre Completo" />
        <input type="email" name="email" placeholder="Email" />
        <input type="text" name="usuario" placeholder="Usuario" />
        <input type="password" name="contrasena" placeholder="Contraseña" />
        <button id="lila">Registrar</button>
        </form>
    </div>
<div class="form-container sign-in-container">
        <form action="#" method="POST">
        <h1>Iniciar Sesión</h1>
        <div class="social-container">
            <a href="#" class="social">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social>">
            <i class="fab fa-google" id="red"></i>
            </a>
            <a href="#" class="social">
            <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <span>o usa tu email</span>
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <a href="#">Olvidaste tu contraseña?</a>
        <button>Iniciar sesión</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
        <div class="overlay-panel overlay-left">
            <h1>¡Bienvenido!</h1>
            <p>
            Inicia sesión con tu cuenta
            </p>
            <button class="ghost" id="signIn">Inicia sesión</button>
        </div>
        <div class="overlay-panel overlay-right">
            <h1>Hola!!!</h1>
            <p>Crear tu cuenta</p>
            <button class="ghost" id="signUp">Registrar</button>
        </div>
        </div>
    </div>
    </div>

    <script src="app.js"></script>
</body>
</html>
