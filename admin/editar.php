<?php
include ("vistaadmi.php");
?>
<br>
<br>
<?php

$a = $_GET['codigo'];

$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT `codigo`, `codtipodocumento`, `numerodocumento`, `nombres`, `apellidos`, `correo`, `contraseña`, `codtipousuario`, `fechanacimiento`, `codgenero`, `direccion`, `telefono` FROM `nuevo_usuario` WHERE `nuevo_usuario`.`codigo` = $a "); 
?>

<body>
   <?php
    if($_POST){
   $a = $_GET['codigo'];
   $conexion = mysqli_connect("localhost", "root", "", "base1") or
     die("Problemas con la conexión");
    
   $registros = mysqli_query($conexion, "SELECT u.codigo, u.codtipodocumento, u.numerodocumento, u.nombres, u.apellidos, u.correo, u.contraseña, u.codtipousuario, u.fechanacimiento, u.codgenero, u.direccion, u.telefono, d.codigo, d.tipodocumento  FROM nuevo_usuario u INNER JOIN tipo_documento d ON u.codtipodocumento = d.tipodocumento WHERE `nuevo_usuario`.`codigo` = $a") or
     die("Problemas en el select:" . mysqli_error($conexion));
  
   while ($reg = mysqli_fetch_array($registros)) {
     echo "Codigo:" . $reg['codigo'] . "<br>";
     echo "codtipodocumento:" . $reg['codtipodocumento'] . "<br>";
     echo "numerodocumento:" . $reg['numerodocumento'] . "<br>";
     $nombres = $reg['nombres'] . "";
     echo "apellidos:" . $reg['apellidos'] . "<br>";
     echo "correo:" . $reg['correo'] . "<br>";
     echo "Codigo:" . $reg['codigo'] . "<br>";
     echo "contraseña:" . $reg['contraseña'] . "<br>";
     echo "codtipousuario:" . $reg['codtipousuario'] . "<br>";
     echo "fechanacimiento:" . $reg['fechanacimiento'] . "<br>";
     $codgenero = $reg['codgenero'] . "";
     echo "direccion:" . $reg['direccion'] . "<br>";
     echo "telefono:" . $reg['telefono'] . "<br>";
     echo "<hr>";
   }
  }
   mysqli_close($conexion);
   ?>
 </body>

  <div class="container" style="width: 500px; border: #DBDBDB solid 2px; height: 1400px; border-radius: 10px;">
  <br>
  <center><img src="../img/img.png" alt="" style="width: 200px; height: 170px;"></center>
  <?php
        if($reg = mysqli_fetch_array($registros)) {?>
  <form action="conexionedit.php" method="post" class="was-validated">
    <div class="form-group">
    <label for="cars">tipo de documento:</label>
  <br>
  <input type="text" name="" id="" value="<?php echo $reg['codtipodocumento']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="">numero de documento:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar numero de documento" name="numerodocumento" required value="<?php echo $reg['numerodocumento']; ?>" >
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">Nombres:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar nombres" name="nombres" required value="<?php echo $reg['nombres']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">Apellidos:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar Apellidos" name="apellidos" required value="<?php echo $reg['apellidos']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">correo electronico:</label>
      <input type="email" class="form-control" id="pwd" placeholder="ingresar correo" name="correo" required value="<?php echo $reg['correo']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="ingresar contraseña" name="contraseña" required value="<?php echo $reg['contraseña']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="cars">tipo de usuario:</label>
    <br>
  <input type="text" name="" id="" value="<?php echo $reg['codtipousuario']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">fecha de nacimiento:</label>
      <input type="date" class="form-control" id="pwd" placeholder="ingresar fecha de nacimiento" name="fechanacimiento" required value="<?php echo $reg['fechanacimiento']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="cars">genero:</label>
    <br>
  <input type="text" name="" id="" value="<?php echo $reg['codgenero']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">direccion:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar direccion" name="direccion" required value="<?php echo $reg['direccion']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <div class="form-group">
    <label for="pwd">telefono:</label>
      <input type="number" class="form-control" id="pwd" placeholder="ingresar telefono" name="telefono" required value="<?php echo $reg['telefono']; ?>">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>

    <center>
    <button type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" value="Registrar">Actualizar</button>
    <br>
    <br> 

  </form>
  <?php } ?>
  </center>
</div>


<?php
include ("../vista/pie.php");
?>