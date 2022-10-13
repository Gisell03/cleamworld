<?php
 include ("vistaadmi.php");
?>
<br>
<br>

<div class="container" style="width: 500px; border: #DBDBDB solid 2px; height: 550px; border-radius: 10px;">
  <br>
  <center><img src="../img/img.png" alt="" style="width: 200px; height: 170px;"></center>
  
  <form action="conexionselecttipousu.php" method="POST" class="was-validated">
    <h6>Escribir el nuevo tipo de usuario correctamente.</h6>
    <br>
    <div class="form-group">
    <label for="">NUEVO TIPO DE USUARIO:</label>
      <input type="text" class="form-control" id="pwd" placeholder="ingresar el nuevo tipo de usuario"  name="tipousuario">
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <center>
    <button  href="editselect.php" type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" value="agregartipododcumento">Agregar campo</button>
    <br>
    <br> 

  </form>
 
  </center>
</div>
<br><br>

<?php include ("../vista/pie.php"); ?>