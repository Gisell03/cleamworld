<?php 

$codigousu = $_GET['cgusu'];
$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT * FROM `tipo_usuario` WHERE codigousu=$codigousu"); 
?>


<body>
   <?php
    if($_POST){
   $a = $_GET['codigousu'];
   $conexion = mysqli_connect("localhost", "root", "", "base1") or
     die("Problemas con la conexión");
    
   $registros = mysqli_query($conexion, "SELECT * FROM `tipo_usuario`") or
     die("Problemas en el select:" . mysqli_error($conexion));
  
   while ($reg = mysqli_fetch_array($registros)) {
     echo "codigousu:" . $reg['codigousu'] . "<br>";
     echo "tipousuario:" . $reg['tipousuario'] . "<br>";
     echo "<hr>";
   }
  }
   mysqli_close($conexion);
   ?>
 </body>
<?php
 include ("vistaadmi.php");
?>

<br>
<br>
<div class="container" style="width: 500px; border: #DBDBDB solid 2px; height: 500px; border-radius: 10px;">
  <br>
  <center><img src="../img/img.png" alt="" style="width: 200px; height: 170px;"></center>
   <?php if($reg = mysqli_fetch_array($registros)) {?>
  <form action="coneselecttpusu.php" method="post" class="was-validated">
    <div class="form-group">
    <label for="cars">tipo de documento:</label>
    <input type="hidden" class="form-control" id="pwd" placeholder="ingrese aqui el nuevo tipo documento" name="codigousu" value="<?php echo $reg['codigousu']; ?>" >
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <input type="text" class="form-control" id="pwd" placeholder="ingrese aqui el nuevo tipo documento" name="tipousuario"  value="<?php echo $reg['tipousuario']; ?>" >
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
      <center>
    <button type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" value="editselec">Actualizar</button>
    <br>
    <br> 

  </form>

  <?php } ?>
  </center>
    </div>
</div>
<?php include ("../vista/pie.php"); ?>