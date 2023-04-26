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

<head>
  <meta charset="utf-8">
  <title>Tu Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Perfil.css">

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
    <section id="Perfil" name="Perfil">
        <?php
        $id_usuario=$_SESSION['Usuario'];  
        
        include 'PHP/db.php';
            $Consulta= "SELECT * FROM usuarios WHERE CorreoElectronico='$id_usuario'";
            $resultado= mysqli_query($conexion,$Consulta);
            if ($resultado){
                while ($row= $resultado->fetch_array()){
                    $Nombres=$row['Nombres'];
                    $Apellidos=$row['Apellidos'];
                    $NombreUsuario=$row['NombreUsuario'];
                    $FotoPerfil=$row['FotoPerfil'];
                    $CarreraU=$row['CarreraUniversitaria'];
                    $Edad=$row['Edad'];
                    $Bio=$row['Biografia'];      
            ?>
        <div class="DatosUsuarios">        

            <br>    
            <div class="FotoPerfil">
            <?php echo "<img src='IMG/".$FotoPerfil."'>";?>
            </div>
            <h2><?php echo $Nombres," ",$Apellidos;?></h2>
            <div>
            <h3><?php echo $NombreUsuario, " - ",$CarreraU," - ",$Edad;?> Años</h3> 
            <div class="Biografia">
            <h4><?php echo $Bio;?></h4>
            </div>
            </div>
        </div>
                    <?php
                }
            } 
        
        
        
        
        ?>
    </section>
    <section id="EditarPerfil">
        <a href="EditarPerfil.php">Editar Perfil</a>
    </section>

</body>
</html>
