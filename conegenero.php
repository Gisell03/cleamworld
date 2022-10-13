<?php 
$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");

$codigo=$_POST['codigo'];
$codgenero=$_POST['codgenero'];

$registros =mysqli_query ($conexion,"UPDATE nuevo_usuario SET `codtipodocumento`='$codtipodocumento',`numerodocumento`='$numerodocumento',`nombres`='$nombres',`apellidos`='$apellidos',`correo`='$correo',`contraseña`='$contraseña',`codtipousuario`='$codtipousuario',`fechanacimiento`='$fechanacimiento',`codgenero`='$codgenero',`direccion`='$dirreccion',`telefono`='$telefono' WHERE numerodocumento=$numerodocumento");
echo ('<script>swal("modificado!", "registro modificado!", "success");</script>');
header("location:listusu.php");

UPDATE `tipo_genero` SET `codigo`='codigo',`genero`='[value-2]' WHERE `genero`
?>