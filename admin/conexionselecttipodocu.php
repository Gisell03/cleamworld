<?php
  
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into tipo_documento (codigodocu,tipodocumento) values 
                       ('$_REQUEST[codigodocu]','$_REQUEST[tipodocumento]')")
    or die("Problemas en el select" . mysqli_error($conexion));
    header("location: editselect.php");

  mysqli_close($conexion);

  ?>