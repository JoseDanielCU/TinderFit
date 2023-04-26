<?php

    session_start();
    if(isset($_SESSION['Usuario'])){
        header("location:Inicio.php");
    }

?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio y Registro de Usuarios</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <main>
        <div class="Todo">
            <div class="cajaFondo">
                <div class="CajaTrasera_Login">
                    <h3>¿Ya cuentas con una cuenta de TinderFit?</h3>
                    <p>Inicia sesión y haz amigos</p>
                    <button id="btn_Login"> Iniciar Sesión </button>
                </div>
                <div class="CajaTrasera_Registro">
                    <h3>Crea tu cuenta ahora mismo</h3>
                    <p>Es hora de conocer gente nueva, crea una cuenta</p>
                    <button id="btn_Registro"> Registrarse </button>
                </div>
            </div>

            <div class="ContenedorRegistro_Login">
                <form action="PHP/LoginUsuario_BE.php" method="POST" class="FormularioLogin">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="Correo" required>
                    <input type="password" placeholder="Contraseña" name="Contrasena" required>
                    <button>Entrar</button>
                </form>
                <form action="PHP/RegistroUsuario_BE.php" method="POST" class="FormularioRegistro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre(s)" name="Nombres" required>
                    <input type="text" placeholder="Apellidos" name="Apellidos" required>
                    <input type="text" placeholder="Correo Electronico" name="Correo"required>
                    <input type="password" placeholder="Contraseña" name="Contrasena" required>
                    <button>Registrarse</button>
                </form> 
            </div>
        </div>
    </main>
    <script src="JS/Script.js"></script>
</body>
</html>