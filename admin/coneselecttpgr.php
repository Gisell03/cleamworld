<?php


$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$genero=(isset($_POST['genero']))?$_POST['genero']:"";

$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");


    $respuesta =mysqli_query($conexion," UPDATE tipo_genero SET `genero`='$genero' WHERE codigo=$codigo");   

header ("location:editselect.php");

?>