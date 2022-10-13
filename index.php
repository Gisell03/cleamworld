<!DOCTYPE html>
<html lang="en">
<head>
  <title>inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>


<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/img-3carrusel.jpg" alt="Los Angeles"  style="height: 100vh; object-fit: cover;"  >
    </div>
    <div class="carousel-item">
      <img src="./img/img-1carrusel.jpg" alt="Chicago"  style="height: 100vh; object-fit: cover;" >
    </div>
    <div class="carousel-item">
      <img src="./img/img-2carrusel.jpg" alt="New York"  style="height: 100vh; object-fit: cover;">
    </div>
    <div class="carousel-caption">
    <button type="button" class="a__inicio" data-toggle="modal" data-target="#myModal" style="outline:none;"> Iniciar sesión </button>
    <button type="button" class="a__inicio" data-toggle="modal" data-target="#myModal__2" style="outline:none;"> Registrarse </button>
      </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<style>
    .a__inicio {
        color: white;
        text-decoration:none;
        background-color:#58D68D;
        width: 250px;
        height:50px;
        border-radius:20px;
        border:none;
}

</style>

<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container" style="width: 400px; border: #DBDBDB solid 2px; height: 590px; border-radius: 10px;">
        <br>
        <center><img src="img/img.png" alt="" style="width: 200px; height: 170px;"></center>
        <form action="validar.php" method="post" class="was-validated">
        <div class="form-group">
        <label for="uname">Correo electronico:</label>
        <input type="email" class="form-control" id="uname" placeholder="ingrese correo" name="correo" required>
        <div class="valid-feedback">Correcto</div>
        <div class="invalid-feedback">Deligenciar este campo.</div>
        </div>
        <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="contraseña" required>
        <div class="valid-feedback">Correcto</div>
        <div class="invalid-feedback">Deligenciar este campo.</div>
        </div>
        <center>
        <button type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" values="Registrar"  onclick="login()">Iniciar</button>
        <br>
        <br>
        <a href="recuperaciondcontra.php">¿Olvidaste tu contraseña?</a> 
        <a href="nueusuario.php">Registrarse</a>
        <br>
    
  </form>
  </center>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<!-- AQUI SE DA INICIO AL MODAL DE REGISTRO DE USUARIO -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="myModal__2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container" style="width: 400px; border: #DBDBDB solid 2px; height: 1550px; border-radius: 10px;">
  <br>
  <center><img src="img/img.png" alt="" style="width: 200px; height: 170px;"></center>
  <form action="conexionreg.php" method="post" class="was-validated">
  <br>
<div class="form-group">
    <label for="cars">tipo de documento:</label>
<br>
     <select class="form-control" name="codtipodocumento" id="" required>
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "select tipodocumento,tipodocumento from tipo_documento") or
        die("problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array ($registros)){
          echo "<option value=\"$reg[tipodocumento]\">$reg[tipodocumento]</option>";
        }
      ?>
     </select>
<br>
    <div class="form-group">
    <label for="">numero de documento:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar numero de documento" name="numerodocumento" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">Nombres:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar nombres" name="nombres" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar Apellidos" name="apellidos" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">correo:</label>
      <input type="email" class="form-control" id="pwd" placeholder="ingresar correo" name="correo" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="ingresar contraseña" name="contraseña" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="cars">tipo de usuario:</label>
    <br>
     <select class="form-control" name="codtipousuario" id="" required>
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "select tipousuario,tipousuario from tipo_usuario") or
        die("problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array ($registros)){
          echo "<option value=\"$reg[tipousuario]\">$reg[tipousuario]</option>";
        }
      ?>
     </select>

<br>
    <div class="form-group">
    <label for="pwd">fecha de nacimiento:</label>
      <input type="date" class="form-control" id="pwd" placeholder="ingresar fecha de nacimiento" name="fechanacimiento" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="cars">Genero:</label>
    <br>
     <select  class="form-control" name="codgenero" id="" required>
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "select genero,genero from tipo_genero") or
        die("problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array ($registros)){
          echo "<option value=\"$reg[genero]\">$reg[genero]</option>";
        }
      ?>
     </select>
     <br>
    <div class="form-group">
    <label for="pwd">direccion:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar direccion" name="direccion" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">telefono:</label>
      <input type="number" class="form-control" id="pwd" placeholder="ingresar telefono" name="telefono" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>

    <center>
    <button type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" values="Registrar" >Iniciar</button>

  </form>
  </center>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<!-- AQUI SE DA CIERRE AL MODAL DE REGISTRO DE USUARIO -->



<?php include ("./vista/pie.php"); ?>