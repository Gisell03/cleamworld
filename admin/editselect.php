<?php include ("vistaadmi.php"); ?>

<!-- la linea de codigo que esta despues de este comentario representa al select de tipo documento,
haciendo la conexion a la base de datos atravez del archivo conexionselecttipodocu.php donde eliminamos e ingresamos un nuevo campo por
la llave primaria de la tabla que es codigodocu -->
<br>
<br>
<div class="titulodeselectroyect" style=" font-size: 18px; text-align: center;">
  <p> <i>  <b>"ten encuenta, una vez eliminado un tipo de documento este cambio se modificara en todo el sistema de este sito web."</b></i></p>
   <br> <br>
</div>

<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

   
  if($_POST){ 
    $accion=$_POST['accion'];
    $codigo=$_POST['codigo'];

    switch ($accion){

      case "borrarDocumento":
        $registros = mysqli_query($conexion, "DELETE FROM tipo_documento where codigodocu=$codigo");
        break;
      
      case "borrarUsuario":
        $regtpousu = mysqli_query($conexion, "DELETE FROM tipo_usuario where codigousu=$codigo");
        break;

      case "borrar":
        $regtpgnro = mysqli_query($conexion, "DELETE FROM tipo_genero where codigo=$codigo");
        break;        

    }

}
  $registros = mysqli_query($conexion, "SELECT * FROM tipo_documento") 
    or die("Problemas en el select" . mysqli_error($conexion));
    ?>
    <div class="container">
  <h2>Tabla Documento  <a href="añadirselecttipodocu.php" class="btn btn-success" style= "margin-left: 400px"><i class="fa-regular fa-id-card"></i>ㅤnuevo documento</a></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Codigo</th>
            <th>Tipo de documento</th>
            <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while($reg = mysqli_fetch_array($registros)) {?>    
    <td><?php echo $reg['codigodocu']; ?></td>    
    <td><?php echo $reg['tipodocumento']; ?></td>
    <td>
      <a class="btn btn-success" href="editselecttpdcu.php?codigodocu=<?php echo $reg['codigodocu']; ?>&tipodocumento=<?php echo $reg['tipodocumento']; ?>"><i class="fa-solid fa-user-pen"></i>Editar</a>
    </td>
      <td>
         <form action="" method="post">
          <input type="hidden" name="codigo" value="<?php echo $reg['codigodocu']; ?>" id="">
         <button type="submit" class="btn btn-danger" name="accion" value="borrarDocumento"><i class="fa-solid fa-trash-can"></i>Eliminar</button> </form></td>
        
    </tr>
<?php
        }
        ?>
    </tbody>
  </table>
</div>
<br>
<div class="linea"></div>

 <style> .linea {
  border-top: #E0E8DF 4px dashed;
  height: 6px;
  width: 100%;
  padding: 0;
  margin: 20px auto 0 auto;
} </style>



   <br>
    <br>
    <!-- la linea de codigo que esta antes de este comentario representa al select de tipo documento-->

<div class="titulodeselectroyect" style=" font-size: 18px; text-align: center;" >
  <p> <i> <b>"ten encuenta, una vez eliminado un tipo de usuario este cambio se modificara en todo el sistema de este sito web."</b></i></p>
   <br> <br>
</div>


    <!-- la linea de codigo que esta despues de este comentario representa al select de tipo usuario,
haciendo la conexion a la base de datos atravez del archivo conexionselecttipousu.php donde eliminamos e ingresamos un nuevo campo por
la llave primaria de la tabla que es codigousu -->

    <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");


  $regtpousu  = mysqli_query($conexion, "SELECT * FROM tipo_usuario") 
    or die("Problemas en el select" . mysqli_error($conexion));
    ?>

    <div class="container">
  <h2>Tabla Usuario <a href="añadirselecttipousu.php" class="btn btn-success" style= "margin-left: 460px"><i class="fa-solid fa-users"></i>ㅤnuevo usuario</a></h2>           
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Codigo</th>
            <th>Tipo de usuario</th>
            <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while($tpousu = mysqli_fetch_array($regtpousu )) {?>    
    <td><?php echo $tpousu['codigousu']; ?></td>    
    <td><?php echo $tpousu['tipousuario']; ?></td>
    <td>
      <a  class="btn btn-success" href="editselecttpusu.php?cgusu=<?php echo $tpousu['codigousu']; ?> &tipousuario= <?php echo $tpousu ['tipousuario']; ?> "><i class="fa-solid fa-user-pen"></i>Editar</a>
    </td>
      <td>
         <form action="" method="post">
          <input type="hidden" name="codigo" value="<?php echo $tpousu['codigousu'];?> " id="">
         <button type="submit" class="btn btn-danger" name="accion" value="borrarUsuario"><i class="fa-solid fa-trash-can"></i>Eliminar</button> </form></td>
        
    </tr>
<?php
        }
        ?>
    </tbody>
  </table>
</div>
<br>
<div class="linea"></div>

 <style> .linea {
  border-top: #E0E8DF 4px dashed;
  height: 6px;
  width: 100%;
  padding: 0;
  margin: 20px auto 0 auto;
} </style>

 <!-- la linea de codigo que esta antes de este comentario representa al select de tipo usuario-->
 <br>
<br>
<div class="titulodeselectroyect" style=" font-size: 18px; text-align: center;">
  <p> <i> <b> "ten encuenta, una vez eliminado un tipo de genero este cambio se modificara en todo el sistema de este sito web."</b></i></p>
   <br> <br>
</div>


    <!-- la linea de codigo que esta despues de este comentario representa al select de tipo genero,
haciendo la conexion a la base de datos atravez del archivo conexionselecttipogenero.php donde eliminamos e ingresamos un nuevo campo por
la llave primaria de la tabla que es codigogenero -->
<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

   
  $regtpgnro = mysqli_query($conexion, "SELECT * FROM tipo_genero") 
    or die("Problemas en el select" . mysqli_error($conexion));
    ?>

    <div class="container">
  <h2>Tabla de genero <a href="añadirselecttipogenero.php" class="btn btn-success" style= "margin-left: 420px"><i class="fa-solid fa-person-half-dress"></i>ㅤnuevo genero</a></h2>          
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Codigo</th>
            <th>Tipo de genero</th>
            <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while($tpgnr = mysqli_fetch_array($regtpgnro)) {?>    
    <td><?php echo $tpgnr['codigo']; ?></td>    
    <td><?php echo $tpgnr['genero']; ?></td>
    <td>
      <a  class="btn btn-success" href="editselecttpgro.php?cggnr=<?php echo $tpgnr['codigo']; ?>"><i class="fa-solid fa-user-pen"></i>Editar</a>
    </td>
      <td>
         <form action="" method="post">
          <input type="hidden" name="codigo" value="<?php echo $tpgnr['codigo']; ?>" id="">
         <button type="submit" class="btn btn-danger" name="accion" value="borrar"><i class="fa-solid fa-trash-can"></i>Eliminar</button> </form></td>
    </tr>
<?php
        }
        ?>
    </tbody>
  </table>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
  <path fill="#d0fdd7" fill-opacity="1" d="M0,160L48,186.7C96,213,192,267,288,261.3C384,256,480,192,576,154.7C672,117,768,107,864,128C960,149,1056,203,1152,197.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
</svg>
 <!-- la linea de codigo que esta antes de este comentario representa al select de tipo genero-->
<?php include ("../vista/pie.php"); ?>
