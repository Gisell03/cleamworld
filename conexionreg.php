
<?php
  
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into nuevo_usuario (codtipodocumento,numerodocumento,nombres,apellidos,correo,contraseña,codtipousuario,fechanacimiento,codgenero,direccion,telefono,id_cargo) values 
                       ('$_REQUEST[codtipodocumento]','$_REQUEST[numerodocumento]','$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[correo]','$_REQUEST[contraseña]','$_REQUEST[codtipousuario]','$_REQUEST[fechanacimiento]','$_REQUEST[codgenero]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[id_cargo]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    mysqli_close($conexion);

    header("location:usuario/vistausu.php");
?>

<?php if ($_POST)  { ?>
    <script>
      Swal.fire({
      icon: 'success',
      title: "Registro exitoso",
      showConfirmButton: true,
      timer: 4500})
    </script>
  <?php  } ?> 

