<?php


    $codigousu=(isset($_POST['codigousu']))?$_POST['codigousu']:"";
    $tipousuario=(isset($_POST['tipousuario']))?$_POST['tipousuario']:"";


    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");


        $respuesta =mysqli_query($conexion," UPDATE tipo_usuario SET `tipousuario`='$tipousuario' WHERE codigousu=$codigousu");   

    header ("location:editselect.php");

    ?>