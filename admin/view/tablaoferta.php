<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/oferta.css">
</head>
<body1>
 <section>
  <!--for demo wrap-->
  <h1 class="cebeceraoferta">OFERTA</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0" class="tableoferta">
      <thead>
        <tr>
          <th class="thoferta">Codigo</th>
          <th class="thoferta">Nombre</th>
          <th class="thoferta">precio</th>
          <th class="thoferta">total oferta</th>
          <th class="thoferta">acciones</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0" class="tableoferta">
      <tbody>
         <?php foreach ($ofertas as $oferta) { ?>

                <tr>
                    <th scope="row" class="thoferta"><?php echo $oferta['id_oferta'] ?></th>
                    <td class="tdoferta"><?php echo $oferta['nombre'] ?></td>
                    <td class="tdoferta"><?php echo $oferta['precio'] ?></td>
                    <td class="tdoferta"><?php echo $oferta['descuento'] ?></td>
                    <td class="tdoferta">
                        <form action="index.php" method="post">
                            <button name="borrarOferta" value="<?php echo $oferta['id_oferta'] ?>" type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                        </form>
                    </td>
                </tr>

            <?php } ?>
      </tbody>
    </table>
  </div>
</section> 
</body1>
</html>
<script>$(window)
  .on("load resize ", function () {
    var scrollWidth =
      $(".tbl-content").width() - $(".tbl-content table").width();
    $(".tbl-header").css({ "padding-right": scrollWidth });
  })
  .resize();</script>
