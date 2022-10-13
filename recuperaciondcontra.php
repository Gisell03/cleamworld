<?php include ("vista/cabecera.php"); ?>
<br>
<br>

<div class="container" style="width: 500px; border: #DBDBDB solid 2px; height: 590px; border-radius: 10px;">
  <br>
  <center><img src="img/img.png" alt="" style="width: 200px; height: 170px;"></center>
  <form action="conexrec.php" method="post">
    <div class="form-group">
    <select id="disabledSelect" class="form-control" name="tipodedocumento">
        <option disabled selected>Seleccione su tipo de identificación</option>
        <option value="T.I">Tarjeta de identidad.</option>
        <option value="C.C">Cedula de ciudadania</option>
        <option value="NIT">Cedula de extranjeria</option>
        <option value="NIT">Pasaporte</option>
        <option value="Pasaporte">Nit</option>
      </select>
    </div>
    <div class="form-group">
      <label for="number">Numero de documento:</label>
      <input type="number" class="form-control" id="pwd" placeholder="N° documento" name="numerodedocumento" required>
      <div class="valid-feedback">Correcto</div>
      <div class="invalid-feedback">Deligenciar este campo.</div>
    </div>
    <center>
    <button type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" values="Registrar" >Guardar</button>
  </form>
  </center>
</div>

<?php include ("vista/pie.php"); ?>