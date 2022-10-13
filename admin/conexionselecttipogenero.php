<?php
  
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into tipo_genero(codigo,genero) values 
                       ('$_REQUEST[codigo]','$_REQUEST[genero]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    header("location: editselect.php");

  mysqli_close($conexion);

  ?>