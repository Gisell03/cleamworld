<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/producto.css">
</head>
<body2>
<section>
  <!--for demo wrap-->
  <h1>PRODUCTO</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0" class="tableproducto">
      <thead>
        <tr>  
        <th class="thproducto">id</th>
        <th class="thproducto">Nombre</th>
        <th class="thproducto">Precio</th>
        <th class="thproducto">foto</th>
        <th class="thproducto">Opciones</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-contentproducto">
    <table cellpadding="0" cellspacing="0" border="0" class="tableproducto">
      <tbody>
        <?php foreach ($productos as $producto) { ?>

                <tr>
                    <th scope="row" class="tdproducto"><?php echo $producto['id'] ?></th>
                    <td class="tdproducto"><?php echo $producto['nombre'] ?></td>
                    <td class="tdproducto"><?php echo $producto['precio'] ?></td>
                    <td class="tdproducto"><img src="../img/<?php  echo $producto['foto']?>" alt="" width="120px" height="120px">
                    <input type="hidden" name="" <?php  echo $producto['foto']?>> </td>
                    <td>
                        <form action="index.php" method="post" class="thproducto">
                            <input type="hidden" name="nombre" value="<?php echo $producto['nombre'] ?>">
                            <input type="hidden" name="precio" value="<?php echo $producto['precio'] ?>">
                            <input type="hidden" name="foto" value="<?php echo $foto['foto'] ?>">
                            <a href="view/editar.php?id=<?php echo $producto['id'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                            <button name="borrar" value="<?php echo $producto['id'] ?>" type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                            <button name="seleccionar" value="<?php echo $producto['id'] ?>" type="submit" class="btn btn-sm btn-outline-success">seleccionar</button>
                        </form>
                    </td>
                </tr>
                
            <?php } ?>
      </tbody>
    </table>
  </div>
</section>
</body2>
</html>
<script>$(window)
  .on("load resize ", function () {
    var scrollWidth =
      $(".tbl-content").width() - $(".tbl-content table").width();
    $(".tbl-header").css({ "padding-right": scrollWidth });
  })
  .resize();</script>