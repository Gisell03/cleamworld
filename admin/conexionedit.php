<?php 
$conexion = mysqli_connect("localhost", "root", "", "base1") or
die("Problemas con la conexión");

$registros =mysqli_query ($conexion,"UPDATE
nuevo_usuario
INNER JOIN
tipo_documento
ON
nuevo_usuario.codigo = tipo_documento.codigodocu
SET 
nuevo_usuario.codtipodocumento = 'ValorModificado1', tipo_documento.tipodocumento = 'ValorModificado2'
WHERE
nuevo_usuario.codigo = 2");
echo ('<script>swal("modificado!", "registro modificado!", "success");</script>');
header("location:listusu.php");

?>
