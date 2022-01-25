<?php
  include ("modulos/index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Ingresar - PipeGrow</title>
    <link rel="stylesheet" type="text/css" href="../css/user.css">
    <link rel="icon" href="../logo/fav.png" >
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <div class="img">
        <img src="img/eeeeee.svg">
      </div>
      <div class="login-content">

        <form action="index.php" method="post">
          <img src="../logo/pipegrow.png" >
          <div class="input-div one">
              <div class="i">
                <i class="fas fa-user"></i>
              </div>
              <div class="div">
                <h5>Usuario</h5>
                <input type="text" class="input" name="usuario" value required>
              </div>
            </div>
            <div class="input-div pass">
              <div class="i"> 
                <i class="fas fa-lock"></i>
              </div>
              <div class="div">
                <h5>Contraseña</h5>
                <input type="password" class="input" name="contraseña" value required>
              </div>
          </div>
            <input type="submit" class="btn" value="Iniciar Sesión" name="ingresar">
        </form>

      </div>
    </div>
    <script type="text/javascript" src="../js/user.js"></script>
  </body>
</html>
