
<?php
include ("vista/cabecera.php");
?>
<br>
<br>

<div class="container">
  <h2> Inicio de sesion</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Iniciar sesión 
  </button>

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

<?php
include ("vista/pie.php");
?>
