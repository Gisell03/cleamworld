<?php include ("vistaadmi.php"); ?>

<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

   
  if($_POST){ 
    $accion=$_POST['accion'];
    $codigo=$_POST['codigo'];

    switch ($accion){
      case "borrar":
        $registros = mysqli_query($conexion, "delete from nuevo_usuario where codigo=$codigo");
        break;
        default;
        echo "no existe";
    }
}
  $registros = mysqli_query($conexion, "SELECT * FROM nuevo_usuario") 
    or die("Problemas en el select" . mysqli_error($conexion));
    ?>
    <br><br>
<script>
  $(document).ready( function () {
    $('#tablausu').DataTable();
} );
  </script>
<body>
  

<div> 
  <div id="myTab" role="tablist">
    <ul class="nav nav-tabs justify-content-end">
      <li class="nav-item">
      <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Nuevo Registro</a>            
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
        <div>


<table id="tablausu" class="display " >
    <thead style="text-justify: auto;">
        <tr>
            <th>Codigo</th>
            <th>Tipo de documento</th>
            <th>Numero de documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Tipo de usuario</th>
            <th>Fecha de nacimiento</th>
            <th>Genero</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Cargos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        while($reg = mysqli_fetch_array($registros)) {?>    
    <td><?php echo $reg['codigo']; ?></td>    
    <td><?php echo $reg['codtipodocumento']; ?></td>
    <td><?php echo $reg['numerodocumento']; ?></td>
    <td><?php echo $reg['nombres']; ?></td>
    <td><?php echo $reg['apellidos']; ?></td>
    <td><?php echo $reg['correo']; ?></td>
    <td><?php echo $reg['contraseña']; ?></td>
    <td><?php echo $reg['codtipousuario']; ?></td>
    <td><?php echo $reg['fechanacimiento']; ?></td>
    <td><?php echo $reg['codgenero']; ?></td>
    <td><?php echo $reg['direccion']; ?></td>
    <td><?php echo $reg['telefono']; ?></td>
    <td><?php echo $reg['id_cargo']; ?></td>
    <td>
      <a class="btn btn-primary" href="editar.php?codigo=<?php echo $reg['codigo']; ?> "><i class="fa-solid fa-user-pen"></i>Editar</a>
    </td>
    <!--botones el cual nos permite cancelar y aceptar la accion de eliminar un registro de usuario-->
      <td>
      <button type="button" class="btn btn-danger" id="btnBorrar" onclick="modalEliminar(<?php echo $reg['codigo']; ?>)"><i class="fa-solid fa-trash-can"></i>Eliminar</button> 
      <div id="<?php echo $reg['codigo']; ?>" class="w-100 h-100 position-absolute d-none justify-content-center align-items-center yeisongei" id="formularioEliminar">
        <form action="" method="post" class="bg-light h-50 w-25 p-5 d-flex flex-column text-center justify-content-center align-items-center rounded">
          <h2>¿Estás seguro que desea eliminar?</h2>
              <input type="hidden" name="codigo" value="<?php echo $reg['codigo']; ?>" id="">
              <div class="d-flex">
                <button type="submit" class="btn btn-danger mr-5" name="accion" value="borrar"><i class="fa-solid fa-trash-can"></i>Eliminar</button> 
                <button type="button" onclick="cancelarBorrar()" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Cancelar</button> 
              </div>
        </form>
      </div>
      </td>  
    </tr>
    <!-- cierre de botones el cual nos permite cancela y aceptar la accion de eliminar un registro de usuario-->
<?php
        }
        ?>

    </tbody>
  </table>


  <!--inicio de estilos del modal-->
  <style>
    .yeisongei {
      
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, .50);

    }
  </style>
<!--cierre de estilos del modal "estos estilos los debo de implementar en css"-->

  </div>
      <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                          
            </div>
            </div>
        </div>  
    </div>   
      </div>
      <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
      <div class="container" style="width: 500px; border: #DBDBDB solid 2px; height: 1450px; border-radius: 10px;">
  <br>
  <center><img src="../img/img.png" alt="" style="width: 200px; height: 170px;"></center>
  <form action="../conexionreg.php" method="post" class="was-validated">
  <br>
<div class="form-group">
    <label for="cars">tipo de documento:</label>
<br>

     <select name="codtipodocumento" id="" required>
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
    <label for="pwd">correo electronico:</label>
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
     <select name="codtipousuario" id="" required>
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
<br>
<div class="form-group">
    <label for="cars">Cargo:</label>
    <br>
     <select name="id_cargo" id="" required>
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");
        $registros = mysqli_query($conexion, "select cargo,cargo from rol") or
        die("problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array ($registros)){
          echo "<option value=\"$reg[cargo]\">$reg[cargo]</option>";
        }
      ?>
     </select>

<br>
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
     <select name="codgenero" id="" required>
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
    <button  onclick="guardarreg()"  type="submit" class="btn btn-success" style="border: 1px solid #DBDBDB; border-radius: 8px;" values="Registrar" >Guardar</button>
    
  </form>
  </center>
</div>

  <br>
</div>
      </div>
    </div>
  </div>
</div>
<script> 
      function  guardarreg() {
        alert ('registro de usuario exitoso');
      }
     </script>
</body>
<?php
mysqli_close($conexion);
?>

<br>
<br>
<br>

<?php include ("../vista/pie.php"); ?>


<!--script  en el cual declaramos la funciones para cancelar o eliminar un registro de usuario-->
<script>
     //funcion para cancelar el registro 
     function cancelarBorrar() {

        location.reload(); //cargamos la pagina 

      }
 //declaramos la funcion modalEliminar para realizar la funcion de eliminar el registro
      function modalEliminar(e) {

        const formularioEliminar = document.getElementById(e);
        formularioEliminar.classList.remove('d-none');
        formularioEliminar.style.display = 'flex';

      }

</script>
<!--script  en el cual declaramos la funciones para cancelar o eliminar un registro de usuario-->