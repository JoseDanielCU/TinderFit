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
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar perfil</title>
  <link rel="stylesheet" href="CSS/EditarPerfil.css">
</head>
<body>
  <div class="form-container">
    <form action="PHP/EditarPerfil_BE.php" enctype="multipart/form-data" method="POST">
      <h1>Editar perfil</h1>
      <div class="form-group">
<center>
        <label for="ImagenPerfil">Foto de perfil</label>
          <br>
          <input type="file" id="ImagenPerfil" name="ImagenPerfil" accept="image/*" onchange="previewImage(this)">
          <br>
          <div class="Preview">
          <br>
          <img id="Preview" src="IMG/Predeterminado.png" alt="Vista Previa">
          <h3>Si dejas este campo vacio, se actualizara y quitara tu foto de perfil, asegurate de actualizar tu foto antes de guardar</h3>
      </div>
</center>
      </div>
      <div class="form-group">
        <label for="Nombres">Nombres</label>
        <input type="text" id="Nombres" name="Nombres" >
      </div>
      <div class="form-group">
        <label for="Apellidos">Apellidos</label>
        <input type="text" id="Apellidos" name="Apellidos" >
      </div>

      <div class="form-group">
      <label for="Carrera">Carrera Universitaria:</label>
            <select id="Carrera" name="Carrera">
                <option value="">Seleccione su Carrera</option>
                <option value="Admin.Negocios">Admin. de negocios</option>
                <option value="Negocios Internacionales">Negocios iternacionales</option>
                <option value="Contaduría Pública">Contaduría pública</option>
                <option value="Mercadeo">Mercadeo</option>
                <option value="Ing.Civil">Ing. Civil</option>
                <option value="Ing.Diseño de Producto">Ing. Diseño de producto</option>
                <option value="Ing.Mecanica">Ing. Mecanica</option>
                <option value="Ing.de Procesos">Ing. De procesos</option>
                <option value="Ing.de Producción">Ing. De producción</option>
                <option value="Ing.de Sistemas">Ing. De sistemas</option>
                <option value="Ing.Agronómica">Ing. Agronómica</option>
                <option value="Biología">Biología</option>
                <option value="Geología">Geología</option>
                <option value="Ing.Matematica">Ing. Matemática</option>
                <option value="Ing.Física">Ing. Física</option>
                <option value="Diseño urbano y gestión del habitat">Diseño urbano y gestión del habitat</option>
                <option value="Música">Música</option>
                <option value="Comunicación Social">Comunicación social</option>
                <option value="Psicologia">Psicología</option>
                <option value="Literatura">Literatura</option>
                <option value="Diseño Interactivo">Diseño interactivo</option>
                <option value="Derecho">Derecho</option>
                <option value="Finanzas">Finanzas</option>
                <option value="Economía">Economía</option>
                <option value="Ciencias Políticas">Ciancias Políticas</option>
            </select>
      </div>  
      <div class="form-group">
        <label for="Bio">Biografía</label>
        <textarea id="Bio" name="Bio" maxlength="500" oninput="updateCounter()"></textarea>
        <div id="counter">0/500 Caracteres restantes</div>

      </div>
      <div class="form-group">
      <label for="Edad">Edad:</label>
            <select id="Edad" name="Edad">
                <option value="">Seleccione la Edad mas acorde:</option>
                <option value="16">Menos de 16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30 o más">Mas de 30</option>





            </select>
      </div>
      <div class="form-group">
        <label for="NombreUsuario">Nombre de Usuario</label>
        <input type="text" id="NombreUsuario" name="NombreUsuario" >
      </div>
      <div class="form-group">
        <button type="submit" name="Enviar">Guardar cambios</button>
      </div>
    </form>
  </div>
  <script>
function previewImage(img) {
  var preview = document.getElementById("Preview");
  preview.src = URL.createObjectURL(img.files[0]);
}
function updateCounter() {
  var textarea = document.getElementById("Bio");
  var counter = document.getElementById("counter");
  var remaining = 0 + textarea.value.length;
  counter.innerHTML = remaining + "/500 Caracteres restantes";
}
</script>
</body>
</html>
