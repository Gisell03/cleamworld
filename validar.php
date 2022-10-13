<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","","base1");

$consulta="SELECT*FROM nuevo_usuario where correo='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']=='administrador'){ //administrador
    header("location:admin/inicioadmin.php");

}else
if($filas['id_cargo']=='usuario'){ //cliente
header("location:usuario/inicio.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <script>
        alert (' Upss..!!    Algo salio mal');
    </script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
