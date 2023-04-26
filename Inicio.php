<?php
session_start();
if(!isset($_SESSION['Usuario'])){
    echo '
        <script>
            alert("Debes iniciar sesión para acceder a este sitio");
            window.location="index.php";
        </script>
    ';
    session_destroy();
    die();
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >TinderFIT - Haz nuevos amigos</title>
    <link rel="stylesheet" href="CSS/Inicio.css">
</head>
<body>
    <header>
        <h1>TinderFIT</h1>
        <nav>
            <ul>
                <li><a href="Inicio.php">Inicio</a></li>
                <li><a href="#">Explorar</a></li>
                <li><a href="#">Mensajes</a></li>
                <li><a href="Perfil.php">Mi perfil</a></li>
                <li><a href="PHP/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h2>Encuentra amigos con intereses similares a los tuyos</h2>
        </section>
    </main>
    <footer>
        <center><p>Todos los derechos reservados © TinderFIT 2023</p></center>
    </footer>
</body>
</html>