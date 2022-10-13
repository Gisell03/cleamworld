<?php

$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");

if ($_GET) {

    $codigodocu = $_GET['codigodocu'];
    $tipodocu = $_GET ['tipodocumento'];

}

if ($_POST) {

    $documento = $_POST['documento'];
    $codigodocumento = $_POST['codigodocumento'];
    
    $registros = mysqli_query($conexion, "UPDATE `tipo_documento` SET `tipodocumento` = '$documento' WHERE `tipo_documento`.`codigodocu` = $codigodocumento") or
    die("Problemas en el select:" . mysqli_error($conexion));

    header('Location: editselect.php');

}

?>

<?php
 include ("vistaadmi.php");
?>

<br>
<br>
<div class="container" style="width: 500px; border: #DBDBDB solid 2px; height: 500px; border-radius: 10px;">
  <br>
  <center><img src="../img/img.png" alt="" style="width: 200px; height: 170px;"></center>
  <form action="editselecttpdcu.php" method="post" class="was-validated">
    <div class="form-group">
    <label for="cars">tipo de documento:</label>
    <input type="hidden" class="form-control" id="pwd" placeholder="ingrese aqui el nuevo tipo documento" name="codigodocumento" value="<?php echo $codigodocu; ?>" >
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <input type="text" class="form-control" id="pwd" placeholder="ingrese aqui el nuevo tipo documento" name="documento" value="<?php echo $tipodocu; ?> " >
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
      <center>
    <button type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" value="editselec">Actualizar</button>
    <br>
    <br> 

  </form>
  </center>
    </div>
</div>
<?php include ("../vista/pie.php"); ?>