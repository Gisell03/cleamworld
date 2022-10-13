<?php include ("vista/cabecera.php"); ?>

<table class="table table-striped table-bordered" style="float: left; border:#CACFD2 20px solid; padding: 15px; color: black; width: 1000px; margin: 26px;">
    <thead>
        <?php



    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "SELECT d.codigodecu, d.nombred, d.codigoprod, d.precio, d.descu, p.nombre, p.foto  FROM descuento d left JOIN producto p ON d.codigodecu = p.codigo WHERE `codigodecu` = `codigodecu`") or
die("Problemas en el select:" . mysqli_error($conexion));
    ?>
        <tr>
            <th>Codigo</th>
            <th>codigoprod</th>
            <th>Nombre de la oferta</th>
            <th>Nombre</th>
            <th>precio</th>
            <th>descuento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($reg = mysqli_fetch_array($registros)) {?>    
        <tr>
            <td><?php echo $reg['codigodecu']?></td>
            <td><?php echo $reg['codigoprod']?></td>
            <td><?php echo $reg['nombred']?></td>
            <td><?php echo $reg['nombre']?></td>
            <td><?php echo $reg['precio']?></td>
            <td><?php echo $reg['descu']?></td>
            <td>
                <img src="img/<?php  echo $reg['foto']?>" alt="" width="120px" height="120px">
                <input type="hidden" name="" <?php  echo $reg['foto']?>>
            </td>
            <td> 
                <form method="post">
                <input type="hidden" name="codigo" id="codigo" value="<?php echo $reg['codigodecu']?> ">
              <input type="submit" name="accion" value="seleccionar" class="btn btn-success">
                <input type="submit" name="accion" value="Borrar" class="btn btn-danger">
            </form> </td>
        </tr>
       <?php } ?>
    </tbody>
</table>    

</div>
<?php include ("vista/pie.php"); ?>